<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$title = $atts['title'];
$subtitle = $atts['subtitle'];
?>

<section class="example-component full-width-section">
    <div class="container">
        <h2><?php echo $title ?></h2>

        <p><?php echo $subtitle ?></p>
    </div>
</section>