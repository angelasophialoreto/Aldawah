<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Class", ["class-add"], true, []);
?>


<main class="d-flex flex-row flex-wrap gap-3 m-3">
    <form class="d-flex flex-column gap-2 card p-3" method="post">
        <div>
            <span class="fs-3">Class</span>
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text">Class name</span>
            <input type="text" class="form-control first" autofocus>
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
            <span class="input-group-text">Travel Allowance</span>
            <input type="text" class="form-control">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text">Medical Allowance</span>
            <input type="text" class="form-control">
        </div>
        <div class="input-group flex-nowrap">
            <span class="input-group-text">Washing Allowance</span>
            <input type="text" class="form-control">
        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success">Add Class</button>
        </div>
    </form>
    <div class="card flex-grow-1 p-3">
        <table id="dataTable" class="table table-hover">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Basic Pay</th>
                    <th>Salary</th>
                    <th>T_All</th>
                    <th>M_All</th>
                    <th>W_All</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Basic Class</td>
                    <td>10,000</td>
                    <td>12,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>Premium Class</td>
                    <td>10,000</td>
                    <td>12,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>


<?php
load_footer(["class-add"]);
?>