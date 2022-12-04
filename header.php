<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <!-- ============= COMPONENT ============== -->
    
   

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" role="navigation" aria-label="<?php esc_html_e('Main Navigation', '_themename'); ?>" >
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"> <?php esc_html(bloginfo('name')); ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <?php  wp_nav_menu(array( 
                    'theme_location' => 'main-menu',
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'menu_class'        => 'navbar-nav',
                    )); ?>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Hover me </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"> Menu Item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Menu Item 2</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#"> Second Level <span
                                        class="float-end custom-toggle-arrow">&#187</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Second Level Item 1</a></li>
                                    <li><a class="dropdown-item" href="#">Second Level Item 2</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="#"> Third Level <span
                                                class="float-end custom-toggle-arrow">&#187</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Third Level Item 1</a></li>
                                            <li><a class="dropdown-item" href="#">Third Level Item 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega menu </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu One</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Two</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Three</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Four</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>


                </ul>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <form class="d-flex" role="search"><?php get_search_form(true) ?></form>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                </ul>
            </div>
            <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
    </nav>


    <div id="content">