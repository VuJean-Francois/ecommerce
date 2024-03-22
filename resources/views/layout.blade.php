
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>products</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    
<body class="container-fluid h-100 text-center text-bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column border-bottom pb-6">
  <header class="mb-auto ">
    <div>
      <h3 class="float-md-start mb-0">La Boutique</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end px-4">
        <a class="nav-link fw-bold py-1 px-2 active text-light bg-dark" aria-current="page" href="/products">Produits</a>
        <a class="nav-link fw-bold py-1 px-2 text-light bg-dark" href="/create">Create</a>
        <a class="nav-link fw-bold py-1 px-2 text-light bg-dark" href="/cart">Panier</a>
        <a class="nav-link fw-bold py-1 px-2 text-light bg-dark" href="/modify">Modifier</a>
        <a class="nav-link fw-bold py-1 px-2 text-light bg-dark" href="#">Contact</a>
      </nav>
    </div>
  </header>    
</div>
@yield('content')
<!-- <footer class="footer bg-dark text-white mt-auto py-3 border-top">
  <div class="container text-center">
    <span>&copy; 2023 Jean-François Vu. Tous droits réservés.</span>
  </div>
</footer> -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>