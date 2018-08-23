<?php

/**
 * Template Name: about */

?>
<?php get_header('page');wp_reset_query(); ?>

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-about-box">
                  <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</section>

