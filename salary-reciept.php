<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Salary", [], true, []);
?>


<main class="d-flex flex-column gap-4 card p-3 m-3">
    <div class="fs-3">
        Salary Reciept
    </div>    
    <div class="d-flex flex-wrap justify-content-around gap-2">
        <section class="card p-3 gap-2 shadow">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Name</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Class</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Bank</span>
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
        </section>
        <section class="card p-3 gap-2 shadow">
            <span class="d-flex gap-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Allowance</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Deduction</span>
                    <input type="text" class="form-control">
                </div>
            </span>
            <hr>
            <div class="d-flex flex-wrap justify-content-between gap-5">
                <section class="d-flex flex-column gap-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Travel</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Medical</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Washing</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Total</span>
                        <input type="text" class="form-control">
                    </div>
                    
                </section>
                <section class="d-flex flex-column gap-2">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">HR</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">DA</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Leave</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Total</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text">Netpay</span>
                        <input type="text" class="form-control">
                    </div>
                </section>
            </div>
        </section>
    </div>
    <div class="d-flex justify-content-around gap-2">
        <span class="d-flex gap-2">
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Month</span>
                <input type="text" class="form-control">
            </div>
            <div class="input-group flex-nowrap">
                <span class="input-group-text">Year</span>
                <input type="text" class="form-control">
            </div>
        </span>
        <span>
            <div class="input-group flex-nowrap flex-shrink-1">
                <span class="input-group-text">Date</span>
                <input type="text" class="form-control">
            </div>  
        </span>
    </div>
</main>


<?php
load_footer([]);
?>