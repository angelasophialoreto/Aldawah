<?php
require_once "config.php";

$Controller = [
    "user/login" => function (Array $post_restult) {
        QUERY::escape_str_all($post_restult);

        
    }
];