<?php get_header(); ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title() ?></a>
        </h2>
        <div>
            <?php _themename_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>

        <?php _themename_readmore_link() ?>

    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <p> <?php esc_html_e('Sorry, No posts matched your cirteria', '_themename') ?> </p>
<?php } ?>

<?php
$comments = 4;
printf(_n('One Comment', '%s Comments', $comments, '_themename'), $comments);

// _x('Post', 'verb', '_themename');
// _ex('Post', 'boun', '_themename');

$city = 'london';
echo esc_html__('Your city is ', '_themename') . $city;

printf(
    // translator: %s is the city name
    esc_html__('Your city is %s', '_themename'), $city
);


?>

<?php get_footer(); ?>

 