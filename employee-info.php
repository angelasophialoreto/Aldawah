<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Employee", ["emp-info"], true, []);
?>


<main class="m-3 p-3 card">
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
                <td><a class="emp-link-view" href="#">E-0001</a></td>
                <td>Delacruz</td>
                <td>Juan</td>
                <td>Noypi</td>
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
                    <button onclick="emp_edit('E-0001')" class="btn btn-success">Edit</button>
                    <button onclick="emp_delete('E-0001')" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td><a class="emp-link-view" href="#">E-0002</a></td>
                <td>Loreto</td>
                <td>Angela Sophia</td>
                <td>M</td>
                <td class="d-flex flex-wrap gap-2 justify-content-center">
                    <button onclick="emp_edit('E-0002')" class="btn btn-success">Edit</button>
                    <button onclick="emp_delete('E-0002')" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</main>


<?php
load_footer(["emp-info"]);
?>