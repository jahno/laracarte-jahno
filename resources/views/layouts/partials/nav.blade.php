    <nav class="navbar navbar-expand-md navbar-dark fixed-static-top bg-dark">
      <a class="navbar-brand" href="{{route('home')}}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisan</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Laravel.com</a>
              <a class="dropdown-item" href="#">Laravel.io</a>
              <a class="dropdown-item" href="#">Laravel cast</a>
              <a class="dropdown-item" href="#">Laravel job</a>
              <a class="dropdown-item" href="#">Laravel tchat</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">

          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
     
      </div>
    </nav>