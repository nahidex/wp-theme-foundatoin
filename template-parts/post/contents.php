<article <?php post_class('c-post') ?> >
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
</article>