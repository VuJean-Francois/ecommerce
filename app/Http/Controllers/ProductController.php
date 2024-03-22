<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\ProductManager;
use App\Models\Product;

class ProductController extends Controller
{
    public function viewAll(){
        // $products = ProductManager::getAllProducts();
        $products = Product::all();
        return view('products')->with('products', $products);
    }

    public function details($id){
        // $detail = ProductManager::getProductById($id);
        $detail = Product::find($id);
        return view('details')->with('detail', $detail);
    }
    public function add($id) {
        $cart = session("cart",[]);
        // $product = ProductManager::getProductById($id);
        $product = Product::find($id);
        if (array_key_exists($id,$cart)) {
            $cart[$id]["quantity"]++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "vat" => $product->vat,
                "quantity" => 1
            ];
        }
        session(["cart"=>$cart]);
        return redirect("/cart");
    }

    public function cart() {
        $cart = session("cart",[]);
        $total = 0;
        $vat = 0;
        foreach ($cart as $product) {
           $total+= $product["quantity"]*$product["price"]*($product["vat"]/100+1);
           $vat+= $product["quantity"]*$product["price"]*$product["vat"]/100;
        }
        return view("cart")
            ->with("total",$total)
            ->with("vat",$vat)
            ->with("cart",$cart);
    }
    public function create(){
        
        
        return view('/create');
    }
    public function store(ProductRequest $request){
        $product = Product::create($request->all());

        if($request->image != null){
            $image = $product->id.'.'.$request->image->extension();
            $request->file('image')->move(public_path('image'), $image);
            $product->image = $image;
            $product->save();
        }

        echo '<div>Produit bien enregistrer.</div>';
        return redirect('/create');
    }
    public function modify($id){
        $products = Product::find($id);
        return view('modify')->with('product', $products);
    }
}