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
                        <span class="icon-wrap"><i class="fas fa-map-marker-alt" aria-hidden="false"></i></span><span><?php echo $address; ?><span>
                    </li>
                <?php } ?>

                <?php if ($phone) { ?>
                    <li class="phone-number">
                        <span class="icon-wrap"><i class="fas fa-phone"></i></span><a href="tel:"><?php echo $phone; ?></a>
                    </li>
                <?php } ?>

                <?php if ($email) { ?>
                    <li class="email">
                        <span class="icon-wrap"><i class="fas fa-envelope"></i></span><a href="mailto:"><?php echo $email; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <?php dynamic_sidebar('footer_widget_area_1'); ?>
        <?php dynamic_sidebar('footer_widget_area_2'); ?>
        <?php dynamic_sidebar('footer_widget_area_3'); ?>
    </div>
</div>

<footer class="main-footer">
    <div class="container">
        <?php if (get_option('ust_copyright')) { ?>
            <div class="copy">
                <p><?php echo get_option('ust_copyright'); ?></p>
            </div>
        <?php } ?>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>



