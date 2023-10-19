<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah", [], true, []);
?>


<main>
    <div class="card p-3 m-3">
        <table id="dataTable" class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>Frist Name</th>
                    <th>Middle Name</th>
                    <!-- <th>Gender</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>SSS Number</th>
                    <th>Phil Health</th>
                    <th>Position</th>
                    <th>Basic Rate</th>
                    <th>City</th>
                    <th>Barangay</th>
                    <th>District</th> -->
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>000001</td>
                    <td>Delacruz</td>
                    <td>Juan</td>
                    <td>Ewan</td>
                    <!-- <td>M</td>
                    <td>21</td>
                    <td>09968882221</td>
                    <td>0001-0002-0003-0004</td>
                    <td>0001-0002-0003-0004</td>
                    <td>Manager</td>
                    <td>10%</td>
                    <td>Mandaluyong</td>
                    <td>Old-Zaniga</td>
                    <td>Ewan</td> -->
                    <td class="d-flex flex-wrap gap-2 justify-content-center">
                        <button onclick="emp_edit('000001')" class="btn btn-success">Edit</button>
                        <button onclick="emp_delete('000001')" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>000002</td>
                    <td>Loreto</td>
                    <td>Sophia</td>
                    <td>?</td>
                    <td class="d-flex flex-wrap gap-2 justify-content-center">
                        <button onclick="emp_edit('000002')" class="btn btn-success">Edit</button>
                        <button onclick="emp_delete('000002')" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>


<?php
load_footer(["emp-info"]);
?>