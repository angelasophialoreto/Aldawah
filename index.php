<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah", ["index"], false, []);
?>


<main class="flex-grow-1 d-flex flex-column justify-content-center align-items-center m-5">
    <div class="card p-3 shadow d-flex flex-column" id="form-container">
        <form method="post" id="form-admin" class="d-flex flex-column gap-3" style="width:300px;">
            <span class="fw-bold fs-4" id="title-admin">
                Sign in as Admin
                <hr>
            </span>
            
            <span class="d-flex flex-column">
                <label for="">Username</label>
                <input class="form-control" type="text" name="uname" id="a-uname">
            </span>
            <span class="d-flex flex-column">
                <label for="">Password</label>
                <input class="form-control" type="password" name="pword" id="a-pword">

            </span>
            <span class="d-flex flex-row-reverse justify-content-between">
                <button class="btn btn-success" id="btn-a-sign-in">Sign In</button>
                <button class="btn btn-secondary">Clear</button>
            </span>
            <span>
                Forgot your Password? <a href="#">Click Here</a>
            </span>
        </form>
        <form method="post" id="form-emp" class="d-flex flex-column gap-3 hidden" style="width:300px;">
            <span class="fw-bold fs-4" id="title-employee">
                Sign in as Employee 
                <hr>
            </span>
            
            <span class="d-flex flex-column">
                <label for="">Username</label>
                <input class="form-control" type="text" name="uname" id="e-uname">
            </span>
            <span class="d-flex flex-column">
                <label for="">Password</label>
                <input class="form-control" type="password" name="pword" id="e-pword">

            </span>
            <span class="d-flex flex-row-reverse justify-content-between">
                <button class="btn btn-success" id="btn-e-sign-in">Sign In</button>
                <button class="btn btn-secondary">Clear</button>
            </span>
            <span>
                Forgot your Password? <a href="#">Click Here</a>
            </span>
        </form>
        <hr>
        <div class="d-flex justify-content-between">
            <button id="btn-admin" class="btn btn-outline-secondary">Admin</button>
            <button id="btn-emp" class="btn btn-outline-secondary">Employee</button>
        </div>
    </div>

</main>

<?php
load_footer(["index"]);
?>