<form action="get" role="search" action="<?php echo esc_url( home_url('/' )) ?>" >
<span class="visually-hidden"><?php echo esc_html_x('Search for:', 'label', '_themename'); ?></span>
    <input class="form-control me-2" name="s" type="search" 
        placeholder="<?php echo esc_attr_x('Search & help', 'placehodler', '_themename') ?>" aria-label="Search" 
        value="<?php echo esc_attr(get_search_query()); ?>">
    <button class="btn btn-outline-light" type="submit">
        <span class="visually-hidden"><?php echo esc_html_x('Search', 'submit button', '_themename'); ?></span>
        <i class="fas fa-search"></i>
    </button>
</form>
   