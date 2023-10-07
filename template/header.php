<?php 
require_once "constants.php";
function load_header(String $title, Array $css = []) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?=base_url("assets/bootstrap/css/bootstrap.min.css")?>">

    <!-- fontawesome -->
    <link rel="stylesheet" href="<?=base_url("assets/fontawesome/css/all.min.css")?>">

    <!-- datatable -->
    <link rel="stylesheet" href="<?=base_url("assets/datatable/css/dataTables.dataTables.min.css")?>">
    



    <!-- JQUERY -->
    <script src="<?=base_url("assets/jquery/jquery.min.js")?>"></script>

    
</head>
<body>
    

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<?php }?>