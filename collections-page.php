<?php

/**
 * Template Name: collections */

?>
<?php get_header('collections');?>

<section class="background-image-section wow fadeIn" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="main-section">

<!--                <div id="owl-demo">-->
<!--                    <div class="item">-->
<!--                        <img src="--><?php //echo site_url(); ?><!--/wp-content/uploads/2018/02/q.png" alt="" />-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <img src="--><?php //echo site_url(); ?><!--/wp-content/uploads/2018/02/q.png" alt="" />-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <img src="--><?php //echo site_url(); ?><!--/wp-content/uploads/2018/02/q.png" alt="" />-->
<!--                    </div>-->
<!--                </div>-->

<!--                --><?php //echo do_shortcode('[as-slider]');?>
                <?php echo do_shortcode('[slick-slider dots="false" arrows="true" fade="true" speed="1500"]');?>


            </div>
            <div class="bigimage-text">
                <h5>REFLECTION ~ DEBUT COLLECTION</h5>
                <p>RESTLESS STREETWEAR'S FIRST COLLECTION FEATURING :</p>
                <ul>
                    <li>~ SEMI- TRANSPARENT WINDBREAKER</li>
                    <li>~ CUFF STRAP HOODIE</li>
                    <li>~ 'TAINTED LEGACY" T-SHIRT</li>
                </ul>

            </div>

            <div class="shop-box">
                <button>SHOP NOW</button>
            </div>
        </div>
    </div>
</section>


<section class="collections-section" id="collections-section">
    <div class="container-big no-padding">
        <div class="row">


                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 3
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>



                        <div class="col-md-4 col-sm-4 col-xs-12 col-item" id="item1">
                            <div class="collection-item-first">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(500,500) );?></a>

                            </div>

                            <div class="title-product-col">
                                <h4><a href="<?php the_permalink();?>">
                                        <?php the_title();?>

                                    </a>
                                </h4>
                            </div>
                        </div>

                     <?php   endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                    ?>



        </div>
    </div>
</section>


<?php get_footer(); ?>