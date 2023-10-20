<?php
require_once "template/connector.php";
?>

<?php
load_header("Aldawah | Admin", ["home"], true, ["hello"=>4, "whatt"=>"abcd"]);
?>


<main class="p-2 d-flex flex-column gap-2">
    <div class="d-flex flex-wrap gap-2 justify-content-center">
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                EMPLOYEE
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-empolyee">0</p>
            </div>
        </div>
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                ACTIVE
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-active">0</p>
            </div>
        </div>
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                DEACTIVE
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-deactive">0</p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap gap-2 justify-content-center">
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                LEAVE
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-leave">0</p>
            </div>
        </div>
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                APPROVED
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-approved">0</p>
            </div>
        </div>
        <div class="block-holder d-flex flex-coloumn card">
            <div class="block-header text-center fs-5 p-2" style="border-bottom: 1px solid rgba(0,0,0,0.3);">
                REJECTED
            </div>
            <div class="block-body fs-1 d-flex justify-content-center align-items-center">
                <p class="m-0 p-2" id="count-rejected">0</p>
            </div>
        </div>
    </div>
</main>


<?php
load_footer([]);
?>