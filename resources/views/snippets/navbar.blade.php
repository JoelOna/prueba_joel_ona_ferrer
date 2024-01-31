<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Visagov</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('books')}}">{{__('books.books')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">{{__('contact.contact')}}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('navbar.language')}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{env('APP_URL')}}/es">Español</a></li>
              <li><a class="dropdown-item" href="{{env('APP_URL')}}/en">English</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>