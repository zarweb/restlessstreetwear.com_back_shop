$( document ).ready(function() {


    // OWL SLIDER
    $("#owl-demo").owlCarousel({

        autoPlay: false,
        dots: false,
        navigation:true,
        navigationText: ["<i class='fa fa-angle-up'></i>","<i class='fa fa-angle-down'></i>"],
        items: 1,
        pagination: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    //------------------------- BACKGROIND IMAGE LOADING
    $( ".enter" ).on( "click", function() {
        $('.relativ-box').fadeOut(100);
        $('.hidden-box').fadeIn(800);
        location.replace('https://restlessstreetwear.com/collections/');

    });

    $('#logo').on( "click", function() {
        $('.relativ-box').fadeOut(100);
        $('.hidden-box').fadeIn(800);
        location.replace('https://restlessstreetwear.com/collections/');
    });

    $(document).keypress(function(e) {
        if(e.which == 13) {
            $('.relativ-box').fadeOut(100);
            $('.hidden-box').fadeIn(800);
            location.replace('https://restlessstreetwear.com/collections/');
        }
    });

    // if ($('#menu-item-131').is(':hover')) {
    //     alert();
    //     $(".widget.woocommerce.widget_shopping_cart").toggleClass("active");
    //     $(".widget.woocommerce.widget_shopping_cart").show();
    // }
    // else {
    //     $(".widget.woocommerce.widget_shopping_cart").hide();
    // }


    $('#menu-item-131').mouseover(function() {
        $(".widget.woocommerce.widget_shopping_cart").toggleClass("active");
        $(".widget.woocommerce.widget_shopping_cart").show();
    });


    $('.widget.woocommerce.widget_shopping_cart').mouseover(function() {
        $(".widget.woocommerce.widget_shopping_cart").show();
    });


    $('#menu-item-131').mouseleave(function() {
        $(".widget.woocommerce.widget_shopping_cart").toggleClass("active");
        $(".widget.woocommerce.widget_shopping_cart").hide();
    });


    $('.widget.woocommerce.widget_shopping_cart').mouseleave(function() {
        $(".widget.woocommerce.widget_shopping_cart").hide();
    });



    // });
    // //  ------------------------  COLLECTIONS PAGE
    // var item1 = $('#item1');
    // var item2 = $('#item2');
    // var item3 = $('#item3');
    //
    // $(".col-item").click(function() {
    //
    //     switch ($(this).attr("id")) {
    //         case 'item1':
    //             item2.fadeOut(1000);
    //             item3.fadeOut(1000);
    //             $('.collection-item-first').hide();
    //             $('.img').removeClass('col-md-4');
    //             $('.img').addClass('col-md-12');
    //             $('.hidden-details').show();
    //             $('#item1').removeAttr('id');
    //
    //             setTimeout(
    //                 function()
    //                 {
    //                     item1.removeClass('col-md-4 col-sm-4 col-xs-12');
    //                     item1.addClass('col-md-12 col-sm-12 col-xs-12 text-center one');
    //                     $('.img').removeClass('col-md-12');
    //                     $('.img').addClass('col-md-4');
    //                     $('.text-right').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.price-box').fadeIn(1000);
    //
    //                 }, 1000);
    //
    //
    //                 break;
    //         case 'item2':
    //             item1.fadeOut(1000);
    //             item3.fadeOut(1000);
    //             $('.collection-item-first').hide();
    //             $('.img').removeClass('col-md-4');
    //             $('.img').addClass('col-md-12');
    //             $('.hidden-details').show();
    //             $('#item2').removeAttr('id');
    //             // $('.hidden-details.img').fadeIn(1000);
    //
    //             setTimeout(
    //                 function()
    //                 {
    //                     item2.removeClass('col-md-4 col-sm-4 col-xs-12');
    //                     item2.addClass('col-md-12 col-sm-12 col-xs-12 text-center one');
    //                     $('.img').removeClass('col-md-12');
    //                     $('.img').addClass('col-md-4');
    //                     $('.text-right').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.price-box').fadeIn(1000);
    //
    //                 }, 1000);
    //             break;
    //         case 'item3':
    //             item1.fadeOut(1000);
    //             item2.fadeOut(1000);
    //             $('.collection-item-first').hide();
    //             $('.img').removeClass('col-md-4');
    //             $('.img').addClass('col-md-12');
    //             $('.hidden-details').show();
    //             $('#item3').removeAttr('id');
    //
    //             setTimeout(
    //                 function()
    //                 {
    //                     item3.removeClass('col-md-4 col-sm-4 col-xs-12');
    //                     item3.addClass('col-md-12 col-sm-12 col-xs-12 text-center one');
    //                     $('.img').removeClass('col-md-12');
    //                     $('.img').addClass('col-md-4');
    //                     $('.text-right').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.text-left').fadeIn(1000);
    //                     $('.price-box').fadeIn(1000);
    //
    //                 }, 1000);
    //             break;
    //     }
    //
    // });

        $('.video-box').css('display', 'show!important');
        $( ".enter" ).on( "click", function() {
            $('.video-box').fadeOut(500);
        });

        $(document).keypress(function(e) {
            if(e.which == 13) {
                $('.video-box').fadeOut(500);
            }
        });

        // FULL MENU
        $('.collapsed').on('click', function () {

            $('#close-menu').addClass('close');
            $('#close-menu').show();

            $('.close').on('click', function() {
                $('#navbar9').removeClass('in');
                $('#close-menu').removeClass('close');
                $('#close-menu').hide();
            });


        });

        // ANIMATION WOW
        new WOW().init();



    //    Collection Background hide
    $( ".shop-box button" ).on( "click", function() {
        $( ".background-image-section" ).css('cursor', 'pointer').fadeOut();

        setTimeout(function(){
            $( "#collections-section" ).fadeIn(1000);
        }, 500);
    });

    $('.main-section img').on( "click", function() {
        $( ".background-image-section" ).css('cursor', 'pointer').fadeOut();

        setTimeout(function(){
            $( "#collections-section" ).fadeIn(1000);
        }, 500);
    });

    // BAG IN MENU
    //
    // if($(window).width() < 767) {
    //     $('#menu-item-131').appendTo('.hiden-menu');
    // }
    // else {
    //     $('#menu-item-131').appendTo('#menu-main-left');
    // }




    // if($(window).width() > 768) {
    //
    // }



});

