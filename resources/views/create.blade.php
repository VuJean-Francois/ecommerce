@extends("layout")

@section("content")


<main class="text-bg-secondary p-3 rounded ">

            <div class="container my-5">
            <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3 py-2">Ajouter un nouveau produit</h1>
                <form action="/create"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">


                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom du produit:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', '') }}">
                        @error('name')<div class="text-warning ">{{$message}}</div> @enderror 
                    </div> 
                    <div class="col-12">
                        <label for="description" class="form-label">Description : </label>
                        <textarea class="form-control" id="description" name="description" rows="5" value="{{ old('description', '') }}" ></textarea>
                        @error('description')<div class="text-warning ">{{$message}}</div> @enderror 
                    </div>
                    <div class="col-12">
                        <label for="image" class="form-label">Photo du produit:</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" value="{{ old('image', '') }}">
                        @error('image')<div class="text-warning ">{{$message}}</div> @enderror 
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Prix ($) :</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price', '') }}">
                        @error('price')<div class="text-warning ">{{$message}}</div> @enderror 
                    </div>
                    <div class="col-md-6">
                    <label for="vat" class="form-label">TVA (%) :</label>
                        <select name="vat" class="form-control" value="{{ old('vat', '') }}">
                            <option value="">Sélectionnez un taux de TVA (%)</option>
                            <option value="2.1" @if  ((old('vat')) == '2.1') selected  @endif>2,1 %</option>
                            <option value="5.5" @if  ((old('vat')) == '5.5') selected  @endif>5,5 %</option>
                            <option value="10" @if  ((old('vat')) == '10') selected  @endif>10 %</option>
                            <option value="20" @if  ((old('vat')) == '20') selected  @endif>20 %</option>
                            
                        </select>
                        @error('name')<div class="text-warning">{{$message}}</div> @enderror 
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary w-100 fw-bold" >Créer ce produit</button>
    <div class="text-warning ">
        <ul
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
   
</main>
@endsection