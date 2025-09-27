<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php ?>">
    <?php wp_head(); ?>
    <script>
        var WebUrlShort = '<?php echo get_bloginfo('url'); ?>';
        var URl_them = '<?php echo get_template_directory_uri(); ?>';
    </script>
</head>

<body <?php body_class(); ?>>

    <!------------------------------------FOR RESPONSIVE------------------------------------------------>
      <div class="top_header d-block d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <ul>
                            <li>Don’t wait to invest in your prayer</li>
                            <li>Limited Stock <span>30% OFF</span></li>
                            <li>(Ends Soon)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-lg-none d-md-block d-sm-block">
        <div class="header-responsive py-4">
            <div class="container">
                <div class="row">
                    <div class="col left d-flex align-items-center"><button data-bs-toggle="collapse" data-bs-target="#collapseExample">Menu <span class="navbar-toggler-icon"></span></button></div>
                    <div class="col middle">
                        <div class="header_topbar">
                            <a href="<?php echo get_bloginfo('url'); ?>"><img src="/wp-content/uploads/2025/09/Prayer-RUG.png" alt="Prayer-RUG" /></a>
                        </div>
                    </div>
                    <div class="col right d-flex align-items-center justify-content-end">
                        <div class="icons-div">
                        <a href=""><img src="/wp-content/uploads/2025/09/person_FILL0_wght300_GRAD0_opsz24-1-1.svg" alt="person"></a>
                        <a href="#"><img src="/wp-content/uploads/2025/09/favorite_FILL0_wght300_GRAD0_opsz24-1.svg" alt="heart"></a>
                        <a href="#"><img src="/wp-content/uploads/2025/09/shopping_bag_FILL0_wght300_GRAD0_opsz24-1.svg" alt="bag"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse response-menu-header ThemeColor1_BG" id="collapseExample">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu1',
                'menu_class' => 'top-menu-desk'
            ));
            ?>
        </div>
    </div>
    <!------------------------------------FOR DESKTOP------------------------------------------------>

    <div class="top_header d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <ul>
                            <li>Don’t wait to invest in your prayer</li>
                            <li>Limited Stock <span>30% OFF</span></li>
                            <li>(Ends Soon)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header1-cl d-none d-lg-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                    <div class="d-none d-lg-block">
                        <div class="header-menu-desk">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu1',
                                'menu_class' => 'top-menu-desk'
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="HeaderLogoDiv">
                    <div class="header_left ">
                        <a href="<?php echo get_bloginfo('url'); ?>"><img src="/wp-content/uploads/2025/09/Prayer-RUG.png" alt="Prayer-RUG" /></a>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center justify-content-end">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" id="">
                        <img class="search-icon" src="/wp-content/uploads/2025/09/search_FILL0_wght300_GRAD0_opsz24-1.svg" alt="search">
                    </div>
                    <div class="icons-div">
                        <a href=""><img src="/wp-content/uploads/2025/09/person_FILL0_wght300_GRAD0_opsz24-1-1.svg" alt="person"></a>
                        <a href="#"><img src="/wp-content/uploads/2025/09/favorite_FILL0_wght300_GRAD0_opsz24-1.svg" alt="heart"></a>
                        <a href="#"><img src="/wp-content/uploads/2025/09/shopping_bag_FILL0_wght300_GRAD0_opsz24-1.svg" alt="bag"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_front_page()) { ?>
        <div style="background: url('') no-repeat center top;">
        <?php } ?>
        <div class="clearfix"></div>
        <?php if (!is_front_page()) { ?>
            <div class="container">
                <div class="title-pad">
                    <h1 class="text-center m-o other_head">
                        <?php if (is_page($page)) { ?>
                            <?php the_title(); ?>
                        <?php } ?>
                        <?php if (is_single($post)) { ?>
                            <?php the_title(); ?>
                        <?php } ?>
                        <?php if (in_category($cat)) { ?>
                            <?php single_term_title() ?>
                        <?php } ?>
                    </h1>
                </div>
            </div>

        <?php } ?>
        </div>