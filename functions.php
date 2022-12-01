<?php 
require_once "lib/helpers.php";
require_once "lib/enqueue-assets.php";
require_once "lib/sidebars.php";

function after_pagination() {
    echo 'after pagination some codes';
}

function after_pagination2() {
    echo 'after pagination some codes more text';
}

add_action('_themename_after_pagination', 'after_pagination', 2);
add_action('_themename_after_pagination', 'after_pagination2', 1);


// add_action('save_post', 'function_to_add', 10, 2); //10 priority default, two arguments
// function function_to_add($post_id, $post) {

// }

// add_action('wp_head', 'function_to_add');

// function function_to_add() {
//     echo '<style>body{background-color: red }</style>';
// }

add_action('pre_get_posts', 'function_to_add', 10, 1);

function function_to_add($query) {
    if($query->is_main_query()) {
        $query->set('posts_per_page', 2);
    }
}

// remove_action('pre_get_posts', 'function_to_add', 10, 1);


// filters

function no_posts_text($text) {
    return $text . ' filtered text';
}


add_filter('_themename_no_posts_text', 'no_posts_text');

function fitler_title($title) {
    return 'Filterd: ' . $title;
}

add_filter('the_title', 'fitler_title');