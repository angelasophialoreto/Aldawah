<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Salary", [], true, []);
?>


<main class="card gap-2 m-3 p-3 align-items-center">
    <div class="fs-3 align-self-start">Salary Report</div>
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
                    <span class="input-group-text">Select class</span>
                    <input type="text" class="form-control">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text">Select employee</span>
                    <input type="text" class="form-control">
                </div>
            </section>
        </div>
        <hr>    
        <div>
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Deduction</th>
                        <th>Allowance</th>
                        <th>Netpay</th>
                        <th>View detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>00:01</td>
                        <td>
                            <button class="btn btn-primary">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>


<?php
load_footer(["salary-report"]);
?>