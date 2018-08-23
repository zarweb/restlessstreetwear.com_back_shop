<?php

/**
 * Template Name: contact */

?>
<?php
get_header('page');
?>
<section class="contact-section wow fadeIn" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="form-wrapper">
                <h3>Contact</h3>
                <div class="form-group">
                    <?php echo do_shortcode('[contact-form-7 id="340" title="Contact form 1"]')?>
                </div>
            </div>
        </div>

        <div class="row subscribe">
            <div class="col-md-12 title">
                NEWS LETTER
            </div>


            <div class="col-md-6 left">
               <h3>ENTER YOUR EMAIL: </h3>
                <p>
                    JOIN LIST TO RECEIVE INFORMATION REGARDING EXCLUSIVE COLLECTION PREVIEWS, SPECIAL EVENTS, AND UPDATES
                </p>
            </div>

            <div class="col-md-6 right">
                <?php echo do_shortcode('[contact-form-7 id="341" title="contact form 2"]')?>
            </div>
        </div>

    </div>
</section>

<footer>
    <div class="container wow fadeIn" data-wow-duration="1.5s">
        <div class="row">
            <div class="col-md-12">

                <ul class="list-inline">
<!--                     <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a> </li> -->
<!--                     <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a> </li> -->
                    <li class="list-inline-item"><a href="https://www.instagram.com/restless.phi" target="_blank"><i class="fab fa-instagram"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
