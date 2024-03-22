@extends("layout")

@section("content")
<div class="d-flex align-items-center justify-content-center vh-100">
    <main class="bg-primary-subtle p-3 rounded">
        <h1 class="text-center text-body mb-4">Votre panier</h1>
        <ul class="list-group">
            @forelse ($cart as $product)
            <li class="list-group-item d-flex {{ $loop->even ? 'bg-light' : '' }}">
                <img src="/image/{{$product['image']}}" alt="" class="img-fluid img-thumbnail w-25">
                <div class="flex-grow-1 ms-3 d-flex align-items-center">
                    <div class="flex-grow-1">{{$product["name"]}}</div>
                    <div class="px-2">{{$product["quantity"]}}x{{$product["price"]*($product["vat"]/100+1)}}€</div>
                    <div class="px-2">{{$product["quantity"]*$product["price"]*($product["vat"]/100+1)}}€</div>
                </div>
            </li>
            @empty
            <p class="text-center text-body mb-4">Votre panier est vide</p>
            @endforelse
            @if (count($cart)>0)
            <li class="list-group-item d-flex bg-secondary text-white">
                <div class="flex-grow-1">TVA : </div>
                <div class="">{{$vat}}€</div>
            </li>
            <li class="list-group-item d-flex bg-primary text-white">
                <div class="flex-grow-1">Total : </div>
                <div>{{$total}}€</div>
            </li>
            @endif
        </ul>
    </main>
</div>
@endsection
