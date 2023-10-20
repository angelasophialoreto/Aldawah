<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Employee", ["home"], true, []);
?>


<main class="container p-2 d-flex flex-column gap-2">
    <div class="row gap-2" style="margin: 0 1rem;">
        <div class="p-0 col block-holder d-flex flex-coloumn card">
            <div class="block-header fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">Welcome</div>
            <div class="block-body p-3">
                Welcome to payroll...
            </div>
        </div>
        <div class="p-0 col-3 block-holder d-flex flex-coloumn card">
            <div class="block-header fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">Links</div>
            <div class="block-body p-3">
    
            </div>
        </div>
        <div class="p-0 col-3 block-holder d-flex flex-coloumn card">
            <div class="block-header fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">Pay</div>
            <div class="block-body p-3">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            01/01/2023
                        </tr>
                    </tbody>
                </table>
                <button style="white-space: nowrap;" class="btn btn-outline-secondary m-3">View More</button>
            </div>
        </div>
    </div>
    <div class="row gap-2" style="margin: 0 1rem;">
        <div class="p-0 col block-holder d-flex flex-coloumn card">
            <div class="block-header fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">My Profile</div>
            <div class="block-body d-flex flex-column p-3">
                <div class="profile d-flex align-items-center gap-2">
                    <div class="shadow" id="profile-image" style=" background-color: white; width: 60px; height: 60px; border-radius: 100px;"></div>
                    <div class="" id="profile-info">
                        <div class="" id="fullname">Loreto, Angela Sophia</div>
                        <div class="" style="font-size: small; color: rgba(0,0,0,0.6);" id="role">Manager</div>
                    </div>
                </div>
                <button style="white-space: nowrap;" class="btn btn-outline-secondary mb-3 mt-3 align-self-end">View More</button>
            </div>
        </div>
        <div class="p-0 col-3 block-holder d-flex flex-coloumn card">
            <div class="block-header fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">Task</div>
            <div class="block-body p-3">
                <div>- Wadhwani</div>
            </div>
        </div>
        <div class="p-0 col">

        </div>
    </div>
</main>


<?php
load_footer([]);
?>