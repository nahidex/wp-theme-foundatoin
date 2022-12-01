<?php 

function _themename_sidebar_widgets() {
    register_sidebar( array(
        'id' => 'primary-sidebar',
        'name' => esc_html__('Primary Sidebar', '_themename'),
        'description' => esc_html__('This sidebar appears in the blog post page', '_themename'),
        'before_widget' => '<section id="%1$s" class="card %2$s"',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_ttile' => '</h5>'
    ));
}

$footer_layout = '3,3,3,3';
$columns = explode(',', $footer_layout);
$footer_bg = 'dark';
if ($footer_bg == 'light') {
    $widget_theme = 'c-footer-widget-dark'; 
} else {
    $widget_theme = 'c-footer-widget-light';
}


foreach($columns as $i => $column ) {
    register_sidebar(array(
        'id' => 'footer-sidebar-' . ($i + 1),
        'name' => sprintf(esc_html__('Footer Widget Column %s', '_themename'), $i + 1),
        'description' => esc_html__('Footer widgets', '_themename'),
        'before_widget' => '<section id="%1$s" class="card %2$s"',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_ttile' => '</h5>'
    ));
}

add_action('widgets_init', '_themename_sidebar_widgets');