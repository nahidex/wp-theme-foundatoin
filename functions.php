<?php 
require_once "lib/helpers.php";
require_once "lib/enqueue-assets.php";

function after_pagination() {
    echo 'after pagination some codes';
}

function after_pagination2() {
    echo 'after pagination some codes more text';
}

add_action('_themename_after_pagination', 'after_pagination', 2);
add_action('_themename_after_pagination', 'after_pagination2', 1);
