<?php

/**
 * Template Name: bag */

?>

<?php get_header('page')?>
<section class="bag-section wow fadeIn" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <?php echo do_shortcode('[woocommerce_cart]')?>
        </div>
    </div>
</section>
