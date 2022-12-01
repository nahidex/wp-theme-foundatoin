<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-<?php echo is_active_sidebar('primary-sidebar')? '8' : '12'; ?> ">
            <?php get_template_part('loop', 'index');?>

            <?php
            //$comments = 4;
           // printf(_n('One Comment', '%s Comments', $comments, '_themename'), $comments);

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
        <?php if(is_active_sidebar('primary-sidebar')) {?>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>

 