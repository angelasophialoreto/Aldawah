<?php
require_once "constants.php";
function load_footer(array $js = []) {?>

<footer class="d-flex flex-wrap justify-content-around gap-5">
    <div class="d-flex flex-column gap-2">
        <img id="logo-img-footer" src="<?= base_url("assets/images/logo.png") ?>" alt="" srcset="">
        <p class="fw-bold fs-5">
            About Us
        </p>
        <span>
            Intent to provide our farmers and fellow Filipinos with high-quality products and services. 💚
        </span>
        <span>
            <a target="_blank" style="color:white; text-decoration: none; " href="https://www.google.com/maps/dir/14.5943103,121.0220416/13.8855942,122.2581634/@14.256995,120.3092974,8z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0?entry=ttu">
                <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                303 Yumul St. Brgy. Gomez (Poblacion), Lopez, Philippines
            </a>

        </span>
        <span>
            <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
            0906 807 3272
        </span>
        <span>
            <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
            aldawahcoop@gmail.com
        </span>
    </div>
    <div class="d-flex flex-column gap-2 align-self-center">
        <p class="fw-bold fs-5">
            Contact us on our Social Media
        </p>
        <span class="d-flex flex-row-reverse gap-4">
            <a class="fs-3" target="_blank" style="color:white;" href="https://www.facebook.com/aldawahcoop/">
                <i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i>
            </a>
            <a class="fs-3" target="_blank" style="color:white;" href="https://twitter.com/aldawahfarm">
                <i class="fa-brands fa-square-x-twitter" style="color: #ffffff;"></i>
            </a>
            <a class="fs-3" target="_blank" style="color:white;" href="https://www.youtube.com/@aldawahproducerscooperative">
                <i class="fa-brands fa-square-youtube" style="color: #ffffff;"></i>  
            </a>
        </span>
        
    </div>
</footer>

<!-- BOOTSTRAP -->
<script src="<?= base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>

<!-- FONTAWESOME -->
<script src="<?= base_url("assets/fontawesome/js/all.min.js") ?>"></script>

<!-- DATATABLE -->
<script src="<?= base_url("assets/datatable/js/dataTables.dataTables.min.js") ?>"></script>

<!-- CUSTOM JS -->
<?php foreach ($js as $j) { ?>
<script src="<?= base_url("assets/js/{$j}.js") ?>"></script>
<?php } ?>

</body>

</html>


<?php } ?>