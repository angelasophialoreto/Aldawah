<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah", [], true, []);
?>


<main class="m-1 card p-3 d-flex flex-column gap-2">
    <div id="myheader" class="p-3">
        <button class="btn btn-outline-secondary">Add Employee</button>
        <button class="btn btn-outline-secondary">Employee Details</button>
        <button class="btn btn-outline-secondary">Add Class</button>
    </div>
    <form method="post" class="card p-3 align-self-center d-flex flex-column gap-2">
        <input type="hidden" name="id" value="E-0001">
        <div class="d-flex justify-content-around align-items-center gap-2" style="border-bottom: 1px solid rgba(0,0,0,0.6);">
            <span class="fs-3">Employee Information</span>
        </div>
        <div id="form-1" class="d-flex flex-column justidy-content-center align-items-center gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Last name</span>
                <input type="text" class="form-control first" autofocus>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">First name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Middle name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Gender</span>
                <select name="" class="form-select">
                    <option value="N" selected disabled>-- Select Gender --</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="N">Preferred not to say</option>
                </select>
            </div>
        </div>
        <div id="form-2" class="d-flex flex-column justidy-content-center align-items-center gap-2 hidden">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Phone number</span>
                <input type="text" class="form-control first" placeholder="09xxxxxxxxx">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Email</span>
                <input type="text" class="form-control" placeholder="example@email.com">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Civil staus</span>
                <input type="text" class="form-control" placeholder="Single">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Birthday</span>
                <input type="date" class="form-control">
                <span class="input-group-text">Age: 0</span>
            </div>
        </div>
        <div id="form-3" class="d-flex flex-column justidy-content-center align-items-center gap-2 hidden">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">TIN</span>
                <input type="text" class="form-control first" placeholder="Number">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">PAGIBIG</span>
                <input type="text" class="form-control" placeholder="Number">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">SSS</span>
                <input type="text" class="form-control" placeholder="Number">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Phil Health</span>
                <input type="text" class="form-control" placeholder="Number">
            </div>
        </div>
        <div id="form-4" class="d-flex flex-column justidy-content-center align-items-center gap-2 hidden">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Position</span>
                <input type="text" class="form-control first">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Basic rate</span>
                <input type="text" class="form-control">
            </div>
        </div>
        <div id="form-5" class="d-flex flex-column justidy-content-center align-items-center gap-2 hidden">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Unit No.</span>
                <input type="text" class="form-control first">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Street</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Barangay</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">City</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">ZIP code</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Province</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">District</span>
                <input type="text" class="form-control">
            </div>
        </div>
        <div id="buttons" class="align-self-end d-flex flex-row-reverse justify-content-end gap-2">
            <button type="button" id="form-next" class="btn btn-outline-primary">Next</button>
            <button type="button" id="form-prev" class="btn btn-outline-primary hidden">Previous</button>
        </div>
    </form>
</main>


<?php
load_footer(["emp-add"]);
?>