@php
    use App\Http\Controllers\ProductController;
    $total=0;
    if (Session::has('user')) {
      $total=ProductController::cartItem();
    }

@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ecom</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Cart({{$total}})</a></li>
            @if (Session::has('user'))
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/logout">Log Out</a>
                  </div>
                </li>

            @else
                <li><a href="/login">Login</a></li>
            @endif

        </ul>
      </div>
    </div>
  </nav>
  
  