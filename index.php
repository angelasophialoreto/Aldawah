<?php
require_once "template/header.php";
require_once "template/footer.php";
?>

<?php
load_header("Aldawah", ["index"]);
?>


<main class="flex-grow-1 d-flex flex-column justify-content-center align-items-center m-5">


    <div class="card p-3 shadow d-flex flex-column">
        <form id="form-admin" action="" class="d-flex flex-column gap-3" style="width:300px;">
            <span class="fw-bold fs-4">
                Sign in as Admin
                <hr>
            </span>
            
            <span class="d-flex flex-column">
                <label for="">Username</label>
                <input class="form-control" type="text" name="" id="">
            </span>
            <span class="d-flex flex-column">
                <label for="">Password</label>
                <input class="form-control" type="password" name="" id="">

            </span>
            <span class="d-flex justify-content-between">
                <button class="btn btn-secondary">Clear</button>
                <button class="btn btn-success">Sign In</button>
            </span>
            <span>
                Forgot your Password? <a href="#">Click Here</a>
            </span>
        </form>
        <form id="form-emp" action="" class="d-flex flex-column gap-3 hidden" style="width:300px;">
            <span class="fw-bold fs-4">
                Sign in as Employee 
                <hr>
            </span>
            
            <span class="d-flex flex-column">
                <label for="">Username</label>
                <input class="form-control" type="text" name="" id="">
            </span>
            <span class="d-flex flex-column">
                <label for="">Password</label>
                <input class="form-control" type="password" name="" id="">

            </span>
            <span class="d-flex justify-content-between">
                <button class="btn btn-secondary">Clear</button>
                <button class="btn btn-success">Sign In</button>
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

<script>
    $("#btn-emp").on("click", function(e) {
        $("#form-admin").addClass("hidden");
        $("#form-emp").removeClass("hidden");
    })
    $("#btn-admin").on("click", function(e) {
        $("#form-emp").addClass("hidden");
        $("#form-admin").removeClass("hidden");
    })
</script>

<?php
load_footer();
?>