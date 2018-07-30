<div class="pre-footer pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
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
                                <span class="icon-wrap"><i class="fas fa-phone"></i></span><a href="tel:<?php echo ust_phone_filter($phone); ?>"><?php echo $phone; ?></a>
                            </li>
                        <?php } ?>

                        <?php if ($email) { ?>
                            <li class="email">
                                <span class="icon-wrap"><i class="fas fa-envelope"></i></span><a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <?php dynamic_sidebar('footer_widget_area_1'); ?>
            </div>

            <div class="col-lg-3 col-sm-6">
                <?php dynamic_sidebar('footer_widget_area_2'); ?>
            </div>

            <div class="col-lg-3 col-sm-6">
                <?php dynamic_sidebar('footer_widget_area_3'); ?>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <?php if (get_option('ust_copyright')) { ?>
                <div class="col-12 copy pt-3 pb-3">
                    <p><?php echo get_option('ust_copyright'); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>



