<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>



<?php wp_head(); wp_reset_query(); ?>
</head>
<body <?php body_class(); ?>>



<div class="relativ-box">
    <?php   $args = array( 'post_type' => 'acme_video', 'posts_per_page' => 1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
<!--    <iframe-->
<!--        height="315"-->
<!---->
<!--        src="https://www.youtube.com/embed/zVG2fiYbYQc?rel=0&loop=1modestbranding=1&autohide=1&showinfo=0&controls=0&autoplay=1"-->
<!--        frameborder="0"-->
<!--        allow="encrypted-media"-->
<!--        allowfullscreen >-->
<!--    </iframe>-->

    <?php the_content();?>
   <?php endwhile; ?>
    <div class="abs-box">
        <article>
            <div class="logo-top">
                <a class="navbar-brand"  id="logo">
                    <p><?php echo get_post_meta($post->ID, 'Name', true); ?></p>

<!--                   RESTLESS STREETWEAR <strong><img src="--><?php //bloginfo('template_url'); ?><!--/img/rr.png" /> 2018</strong>-->

                </a>
            </div>
            <div class="moon">
                <img src="<?php bloginfo('template_url'); ?>/img/moon.png" alt="moon" />
            </div>
            <button type="button" class="enter">ENTER</button>


        </article>
    </div>
</div>

<div class="hidden-box">
    <header class="header">
        <div class="container no-padding">


            <?php get_template_part( 'menu' );?>

        </div>
    </header>