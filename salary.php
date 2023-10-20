<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Salary", [], true, []);
?>


<main class="d-flex flex-column card m-3 p-3">
    <div class="fs-3">
        Salary
    </div>
    <div class="d-flex flex-wrap gap-2 justify-content-around">
        <section class="d-flex flex-column gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Month</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Class</span>
                <input type="text" class="form-control">
            </div>
        </section>
        <section class="d-flex flex-column gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Current year</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Select Employee</span>
                <input type="text" class="form-control">
            </div>
        </section>
    </div>
    <hr>
    <div class="d-flex flex-wrap gap-2 justify-content-around">
        <section class="d-flex flex-column gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Employee Name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Basic pay</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Salary</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Total leave</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Approve leave</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Leave deduction</span>
                <input type="text" class="form-control">
            </div>
        </section>
        <section class="d-flex flex-column gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Account No.</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Travel allowance</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Medical allowance</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Washing allowance</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">DA</span>
                <input type="text" class="form-control">
                <span class="input-group-text">% 100</span>
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">HR</span>
                <input type="text" class="form-control">
                <span class="input-group-text">% 250</span>
            </div>
            <div class="d-flex flex-row-reverse">
                <button onclick="goto_page('salary-reciept')" class="btn btn-primary">Generate</button>
            </div>
        </section>
    </div>
</main>


<?php
load_footer([]);
?>