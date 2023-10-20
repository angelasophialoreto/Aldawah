<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Salary", [], true, []);
?>


<main class="card gap-2 m-3 p-3 align-items-center">
    <div class="fs-3 align-self-start">Salary Report (Reciept)</div>
    <div class="">
        <div class="d-flex flex-column">
            <!-- <section class="d-flex justify-content-around gap-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Year</span>
                    <input type="text" class="form-control">
                </div>
            </section> -->
            <section class="d-flex justify-content-around gap-2">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Name</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Bank No.</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Class</span>
                    <input type="text" class="form-control">
                </div>
            </section>
        </div>
        <hr>    
        <div>
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Salary</th>
                        <th>T_All</th>
                        <th>M_All</th>
                        <th>W_All</th>
                        <th>Leave</th>
                        <th>L_Dedu</th>
                        <th>DA</th>
                        <th>HR</th>
                        <th>Netpay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>


<?php
load_footer(["salary-report-reciept"]);
?>