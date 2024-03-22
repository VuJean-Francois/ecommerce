@extends("layout")

@section("content")

<main class="position-absolute top-50 start-50 translate-middle text-bg-secondary p-3 rounded ">
    <article class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
    <img src="/image/{{$detail->image}}" alt="" class="img-fluid img-thumbnail img-thumbnail  p-3">
      </div>
      <div class="col-lg-6">
        <h2 class="">{{$detail->name}}</h2>
        <div>{{$detail->price*($detail->vat/100+1)}}€</div>
        <p>{{$detail->description}}</p>
        <a href="/add/{{$detail->id}}"
                class="btn btn-primary w-50">Ajouter</a>
           </div>
            
        </div>
      </div>
    </article>
</main>
@endsection

