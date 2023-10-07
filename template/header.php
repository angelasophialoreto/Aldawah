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
    
    <link rel="stylesheet" href="<?=base_url("assets/css/main.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/header.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/footer.css")?>">

    <?php foreach($css as $c) {?>
    <link rel="stylesheet" href="<?=base_url("assets/css/{$c}.css")?>">
    <?php }?>



    <!-- JQUERY -->
    <script src="<?=base_url("assets/jquery/jquery.min.js")?>"></script>

    
</head>


<body >
    

<header>
<nav class="navbar navbar-expand-lg" style="background-color: #163A0A; color: white; ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>"><img id="logo-img" src="<?=base_url ("assets/images/logo.png")?>" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <span class= "fs-2">
          Alda'wah Producers Cooperative Payroll System
        </span>
      </ul>
    </div>
  </div>
</nav>
</header>

<?php }?>