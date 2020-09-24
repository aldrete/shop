<!DOCTYPE html>
<html>
<head>
    <title></title>

    <?php wp_head();?>
</head>
<body <?php body_class('test');?>>


<header>
    <div class="container">
        <div class="row responsive-menu">
                <a href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-fluid logo">
                </a>
                <?php echo do_shortcode('[wcas-search-form]'); ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu'
                            
                        )
                        );?>
            </div>
        </div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'categorias',
                            'menu_class' => 'categorias'
                            
                        )
                        );?>

</header>