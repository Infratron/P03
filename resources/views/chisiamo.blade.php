<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <header>
    <!-- inizio navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('Homepage')}}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('chi.siamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servizi</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Pagine di dettaglio</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Digita..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>
<!-- fine navbar -->
  </header>
    <div class="container-fluid mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="bg-success display-1">Utenti</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            @foreach($users as $utente)
            <div class="col-12 col-md-6 col-lg-3 mt-5">
            <div class="card">
                    <img src="https://picsum.photos/250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$utente['name']}} {{$utente['surname']}}</h5>
                        <p class="card-text">Età: {{$utente['age']}}</p>
                        <a href="{{route('dettaglio-utente', ['id' => $utente['id']])}}" class="btn btn-info">Scopri di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>