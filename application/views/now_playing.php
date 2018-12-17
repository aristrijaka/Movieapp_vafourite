<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contoh Output Akses API TheMovie DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Movie Favorite</h1>
  <p>Cari Movie Favoritmu Disini!</p> 
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<ul class="navbar-nav mr-auto"> 
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url(); ?>index.php/movieapp/now_playing">NOW PLAYING</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/movieapp/upcoming">UP COMING</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>index.php/movieapp/favourite">FAVOURITE</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="q" type="search" placeholder="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container"> 
    <?php  
    echo $hasil;
    ?>
  </div>

</body>
</html>