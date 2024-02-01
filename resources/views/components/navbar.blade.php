<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Homepage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('articles.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('articles.byCategory', $category)}}">{{$category}}</a></li>
              <li><hr class="dropdown-divider"></li>
              @endforeach
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>