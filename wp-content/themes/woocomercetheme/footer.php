
<footer>

            <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'bottom_footer',
                            'menu_class' => 'bottom_footer'
                            
                        )
                        );?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <p style="float:left;padding-top: 10px;">
        <strong>Desarrollado por: Alejandro Aldrete</strong>
        <ul class="formas-pago">
            <li><img src="<?php bloginfo('template_directory');?>/images/bancaria.png"></li>
        </ul>
    </p>

        </div>
    </div>
</div>




</footer>
<?php wp_footer();?>

</body>
</html>