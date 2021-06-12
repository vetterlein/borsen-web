
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="justify-content-center navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
      <ul class="navbar-nav">
        <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}">
            <h4><a class="nav-link" href="{{ url('/') }}">Home</a></h4>
        </li>
        <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == 'cal') ? 'active' : '' }}">
            <h4><a class="nav-link" href="{{ url('/articles') }}">Articles</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="#">Sport</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="#">Business</a></h4>
        </li>
    
        <li class="nav-item">
          <h4><a class="nav-link disabled" href="#">Technology</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link disabled" href="#">National</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link disabled" href="#">International</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link disabled" href="#">Disabled</a></h4>
        </li>
      </ul>
    </div>
  </div>
</nav>