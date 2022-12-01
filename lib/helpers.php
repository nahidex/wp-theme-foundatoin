<?php

function _themename_post_meta() {
    // Translator: %s Post Date
    printf(
        esc_html__('Posted on %s', '_themename'),
        '<a href="'.  esc_url(get_permalink()) . '">'.
        '<time datetime="' . esc_attr(get_the_date('c')) .'">'.
        esc_html(get_the_date()).
        '</time>'.
        '</a>'
    );
   
    // echo   '<time datetime="' . esc_attr(get_the_date('c')) .'">';
    // echo get_the_date('l, F j, Y'); 
    // echo esc_html(get_the_date());
    // echo '</time>';
    // echo '</a>';

    // translators: %s: Post Author
    printf(
        esc_html__(' By %s', '_themename'),
        '<a href="'. esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))).'">'.
        esc_html(get_the_author()) . '</a>'
    );
    // echo ' By <a href="'. esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))).'">';
    // echo esc_html(get_the_author()) . '</a>';
}

function _themename_readmore_link() {
    echo '<a href="'.  esc_url(get_permalink()) . '"title="'. the_title_attribute(['echo' => false]). '">';
    // translators: %s: Post Title
    printf(
        wp_kses(
            __('Read More  <span class="visually-hidden"> About %s </span>', '_themename'),
            [
                'span' => [
                    'class' => []
                ]
            ]
            ),
        get_the_title()
    );
    // echo ' Read More   <span class="u-screen-reader-text"> About' . the_title() .'</span>';
    echo '</a>';
}
