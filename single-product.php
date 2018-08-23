
<?php get_header( 'collections' ); ?>


<section class="collections-section wow fadeIn" data-wow-duration="2s">
    <div class="container-big no-padding">
        <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>

    <?php wc_get_template_part( 'content', 'single-product' ); ?>


  

    <?php endwhile; // end of the loop. ?>
            <div
    </div>
    </div>
</section>



<?php get_footer( 'page' );