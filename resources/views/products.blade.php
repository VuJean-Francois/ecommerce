  @extends("layout")
    
    @section("content")
      <main class=" py-5 p-3 mb-2 bg-primary-subtle text-dark">
      <div class="row align-items-center">
        
        @foreach ($products as $product)
        <article class="border border-3"></div>
          <div name="nom"><h3>{{$product->name}}</h3></div>
          <div class=""><img  class='img-fluid img-thumbnail img-thumbnail w-25 p-3' src="/image/{{$product->image}}" alt="{{$product->name}}"></div>
          <div class="prix">Prix : {{$product->price}} $ HT</div>
          <div class="tva">TVA : {{$product->vat}} %</div>
          <div class="Ttc">Prix : {{$product->price * $product->vat/100 + $product ->price}} $ TTC</div>
          <div class="accordion-item">
              <h2 class="accordion-header">
              <div class=""> 
              <button class="accordion-button collapsed w-100" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Description
              </button>
              </div>   
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">{{$product->description}}</div>
              </div>
        </div>
        <div class="button">
        <button type="button" class="btn btn-primary w-25"><a class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/details/{{$product->id}}">Voir</a></button>
        </article>
        @endforeach

        
    </div>
</main>
@endsection
