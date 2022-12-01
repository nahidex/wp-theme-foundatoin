<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
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
            
            <?php do_action('_themename_after_pagination') ?>

            <?php } else { ?>
                <p> <?php echo apply_filters('_themename_no_posts_text', esc_html__('Sorry, No posts matched your cirteria', '_themename')); ?> </p>
            <?php } ?>

            <?php
            $comments = 4;
            printf(_n('One Comment', '%s Comments', $comments, '_themename'), $comments);

            // _x('Post', 'verb', '_themename');
            // _ex('Post', 'boun', '_themename');

            // $city = 'london';
            // echo esc_html__('Your city is ', '_themename') . $city;

            // printf(
            //     // translator: %s is the city name
            //     esc_html__('Your city is %s', '_themename'), $city
            // );


            ?>
        </div>
        <aside class="col-sm-4">
            sidbar
        </aside>
    </div>
</div>

<?php get_footer(); ?>

 