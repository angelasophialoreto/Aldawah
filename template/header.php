<?php
require_once "constants.php";
function load_header(String $title, array $css = [], $nav = false, $constants = []) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.min.css") ?>">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/all.min.css") ?>">

    <!-- DATATABLE -->
    <link rel="stylesheet" href="<?= base_url("assets/datatable/css/dataTables.dataTables.min.css") ?>">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/header.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">

    <!-- CUSTOM LINKED CSS -->
    <?php foreach ($css as $c) {?>
    <link rel="stylesheet" href="<?= base_url("assets/css/{$c}.css") ?>">
    <?php } ?>

    <!-- JQUERY -->
    <script src="<?= base_url("assets/jquery/jquery.min.js") ?>"></script>

    <!-- CUSTOM JS -->
    <script src="<?= base_url('assets/js/constants.js')?>"></script>

    <!-- CONSTANTS -->
    <script>
    <?php foreach($constants as $key => $val) {
    echo "const const_{$key} = '{$val}';";  
    }?>

    </script>

</head>


<body>
    <header style="background-color: white;">
        <a class="d-flex align-items-center gap-2" style="background-color: #163A0A; color: white; text-decoration: none;" href="<?= base_url() ?>">
            <img id="logo-img" src="<?= base_url("assets/images/logo.png") ?>" alt="" srcset="">
            <span class="fs-2"> <span id="webiste-name">Alda'wah Producers Cooperative</span> Payroll System </span>
        </a>
        <?php if($nav) {?>

        <nav class="navbar navbar-expand-lg shadow mb-5 p-1">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-2" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav gap-1">
                        <li class="nav-item">
                            <button class="btn btn-secondary"><i class="fa-solid fa-house"></i> Home</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-secondary"><i class="fa-solid fa-users"></i> Employee</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-secondary"><i class="fa-solid fa-money-bill-wave"></i> Payroll</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-secondary"><i class="fa-solid fa-file"></i> Report</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-secondary"><i class="fa-solid fa-circle-info"></i> About</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php }?>

    </header>
<?php } ?>