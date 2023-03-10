<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  
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

<script>

function loadListing(){
  if($('.data-table').length > 0){
    $('.data-table,.inner-table').each(function(){

      var table = $(this).attr('class').split(' ')[1]
      var id = $(this).attr('class').split(' ')[2]
      var extraParam = $(this).attr('class').split(' ')[3]

      initiateDataTable(table,table,id,extraParam)
    })
  }

  if($('.ajaxLoad').length > 0){
    $('.ajaxLoad').each(function(){
      var route = $(this).attr('class').split(' ')[1]

      loadPart($(this),route)
    })
  }


          if($('.realtime_table_totals').length > 0){

              /**
               * This handles tables where the table has totals at the bottom and the totals
               * are calculated attributes from the backed.
               */
              $('.realtime_table_totals').each(function(){
                  var totalsContentUrl = $(this).attr('data-totals-href');
                  loadRealTimeTableTotals($(this),totalsContentUrl)
              })
          }


			}
</script>