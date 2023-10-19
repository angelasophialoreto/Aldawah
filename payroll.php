<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah", ["payroll"], true, []);
?>


<main class="d-flex flex-wrap gap-2 justify-content-center">
    <div class="card p-3">
        <section class="d-flex justify-content-between gap-2">
            Salary: <span class="fw-bold" id="salary_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            No. of Working days: <span class="fw-bold" id="working-days_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Salary per Day: <span class="fw-bold" id="salary-per-day_value">00.00</span>
        </section>
        <section class="spacer"></section>
        <section class="d-flex justify-content-between gap-2">
            Overtime: <span class="fw-bold" id="overtime_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Regular OT(HR/s): <span class="fw-bold" id="reg-ot_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Total amount of OT: <span class="fw-bold" id="total-ot_value">00.00</span>
        </section>
        <section class="spacer"></section>
        <section class="d-flex justify-content-between gap-2">
            Deductions: <span class="fw-bold" id="deductions_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Late: <span class="fw-bold" id="late_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Total amount of Late: <span class="fw-bold" id="total-late_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Absent: <span class="fw-bold" id="absent_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Benefit (SSS, PhilHealth, etc.): <span class="fw-bold" id="benefit_value">00.00</span>
        </section>
        <section class="d-flex justify-content-between gap-2">
            Total deductions: <span class="fw-bold" id="total-deductions_value">00.00</span>
        </section>
        <section class="spacer"></section>
        <section class="d-flex justify-content-between gap-2">
            Total Salary: <span class="fw-bold" id="total-salary_value">00.00</span>
        </section>
    </div>
    <div class="card p-3">
        <table id="dataTable" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0000001</td>
                    <td>Delacruz</td>
                    <td>Juan</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>0000002</td>
                    <td>Loreto</td>
                    <td>Sophia</td>
                    <td>10%</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>


<?php
load_footer(["payroll"]);
?>