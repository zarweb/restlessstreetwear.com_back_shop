<?php get_header('page'); wp_reset_query();?>


<section class="page-section  wow fadeIn" data-wow-duration="2s">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3><?php the_title();?></h3>
            </div>
            <div class="col-md-12">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>



<?php get_footer('page');?>
