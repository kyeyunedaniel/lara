<!DOCTYPE html>
<html lang="en">
<head>
  editfunc
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">WELCOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('view-records')? 'active':''}}">
          <a class="nav-link" href="view-records">Users<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('trained')? 'active':''}}">
          <a class="nav-link" href="trained">Trainings<span class="sr-only">(current)</span></a>
        </li>
       
        <li class="nav-item {{ Request::is('pdfUpload')? 'active':''}}">
          <a class="nav-link" href="pdfUpload">PDF Upload<span class="sr-only">(current)</span></a>
        </li>
        
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            API TESTING
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Laravel Cache</a>
            <a class="dropdown-item" href="#">Memcached</a>
          </div>
        </li> 

        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div>
  @yield('content')
</div>
</body>

</html>