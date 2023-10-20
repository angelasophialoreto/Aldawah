<?php
function load_header(String $title, array $css = [], $nav = false, $constants = [])
{ ?>
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
    <link rel="stylesheet" href="<?= base_url("assets/datatables/datatables.min.css") ?>">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/header.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/footer.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/animations.css") ?>">

    <!-- CUSTOM LINKED CSS -->
    <?php foreach ($css as $c) { ?>
        <link rel="stylesheet" href="<?= base_url("assets/css/{$c}.css") ?>">
    <?php } ?>

    <!-- JQUERY -->
    <script src="<?= base_url("assets/jquery/jquery.min.js") ?>"></script>

    <!-- CUSTOM JS -->
    <script src="<?= base_url('assets/js/constants.js') ?>"></script>
    <script src="<?= base_url('assets/js/header.js') ?>"></script>
    <script src="<?= base_url('assets/js/alert.js') ?>"></script>

    <!-- CONSTANTS -->
    <script>
        <?php foreach ($constants as $key => $val) {
            echo "const const_{$key} = '{$val}';\n\t\t\t";
        } ?>

    </script>

</head>


<body>
<header style="background-color: white;">
    <a class="d-flex align-items-center gap-2" style="background-color: #163A0A; color: white; text-decoration: none;" href="<?= base_url() ?>">
        <img id="logo-img" src="<?= base_url("assets/images/logo.png") ?>" alt="" srcset="">
        <span class="fs-2"> <span id="webiste-name">Alda'wah Producers Cooperative</span> Payroll System </span>
    </a>
    <?php if ($nav) { ?>

        <nav class="navbar navbar-expand-lg shadow mb-5 p-1">
            <div class="container-fluid justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-2 justify-content-end" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav gap-1">
                        <li class="nav-item">
                            <button onclick="goto_page('admin')" class="btn"><i class="fa-solid fa-house"></i> Home</button>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-users"></i> Employee
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button onclick="goto_page('employee-add')" class="dropdown-item" type="button"><i class="fa-solid fa-plus"></i> Add employee</button></li>
                                    <li><button onclick="goto_page('class-add')" class="dropdown-item" type="button"><i class="fa-solid fa-plus"></i> Add class</button></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><button onclick="goto_page('employee-info')" class="dropdown-item" type="button">Employee details</button></li>
                                </ul>
                            </div>
                            <!-- <button onclick="goto_page('employee-info')" class="btn"><i class="fa-solid fa-users"></i> Employee</button> -->
                        </li>
                        <li class="nav-item">
                            <button onclick="goto_page('payroll')" class="btn"><i class="fa-solid fa-money-bill-wave"></i> Payroll</button>
                        </li>
                        <li class="nav-item">
                            <button onclick="goto_page('salary-report')" class="btn"><i class="fa-solid fa-file"></i> Report</button>
                        </li>
                        <li class="nav-item">
                            <button onclick="goto_page('about')" class="btn" type="button"><i class="fa-solid fa-circle-info"></i> About</button>  
                        </li>
                        <li class="nav-item">
                            <button onclick="goto_page('')" class="btn" type="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                        </li>
                        <!-- <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i> Profile
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><button onclick="goto_page('')" class="dropdown-item" type="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><button onclick="goto_page('about')" class="dropdown-item" type="button"><i class="fa-solid fa-circle-info"></i> About system</button></li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <button onclick="goto_page('employee-info')" class="btn"><i class="fa-solid fa-users"></i> Employee</button> -->
                        <!-- <li class="nav-item">
                            <button onclick="goto_page('about')" class="btn"><i class="fa-solid fa-circle-info"></i> About</button>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    <?php } ?>

</header>
<?php } ?>