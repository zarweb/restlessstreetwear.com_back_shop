
        <nav class="navbar" id="myNav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar9">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button id="close-menu">X</button>
            </div>

            <div class="brand-centered">

                <div class="hiden-menu">
                    <a href="<?php echo wc_get_cart_url(); ?>">BAG</a>
                </div>


                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/img/grey_moon.png" alt="logo" />
                </a>
            </div>

            <div id="navbar9" class="navbar-collapse collapse no-padding">
                <div class="overlay-content">



                    <?php wp_nav_menu(array(
                        'theme_location'  => 'menu-left',
                        'menu_class' => 'nav navbar-nav navbar-left',
                        'container' => '',
                    )); ?>


                    <?php wp_nav_menu(array(
                        'theme_location'  => 'menu-right',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'container' => '',
                    )); ?>



                </div>
            </div>
        </nav>
