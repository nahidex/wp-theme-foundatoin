<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <?php the_archive_title('<h1>', '</h1>'); ?>
                <?php the_archive_description('<p>', '</p>'); ?>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-<?php echo is_active_sidebar('primary-sidebar')? '8' : '12'; ?> ">
            
            <?php get_template_part('loop', 'archive' );?>

        </div>
        <?php if(is_active_sidebar('primary-sidebar')) {?>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>

 