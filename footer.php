<div class="pre-footer">
    <div class="container">
        <div class="widget-area contact-block">
            <?php
            $address = get_option('ust_address');
            $phone = get_option('ust_phone_number');
            $email = get_option('ust_email');
            $copyright = get_option('ust_copyright');
            ?>
            <h4 class="widget-area-title">Contact Us</h4>

            <ul class="contacts-list">
                <?php if ($address) { ?>
                    <li class="address">
                        <i class="fa fa-map-marker" aria-hidden="false"></i><span><?php echo $address; ?><span>
                    </li>
                <?php } ?>

                <?php if ($phone) { ?>
                    <li class="phone-number">
                        <i class="fa fa-phone"></i><a href="tel:"><?php echo $phone; ?></a>
                    </li>
                <?php } ?>

                <?php if ($email) { ?>
                    <li class="email">
                        <i class="fa fa-envelope"></i><a href="mailto:"><?php echo $email; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="widget-area info-block">
            <h4 class="widget-area-title">Information</h4>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'container_class' => 'footer-nav',
                'container' => 'nav',
            )); ?>
        </div>

        <?php dynamic_sidebar('footer_widget_area'); ?>
    </div>
</div>

<footer class="main-footer">
    <div class="container">
        <?php if ($copyright) { ?>
            <div class="copy">
                <p><?php echo $copyright; ?></p>
            </div>
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>



