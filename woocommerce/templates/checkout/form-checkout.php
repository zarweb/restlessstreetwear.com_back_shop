<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
    <div class="col2-set">
        <?php if ( $checkout->get_checkout_fields() ) : ?>
            <div class="form-group col-md-6 col-sm-6">

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <?php do_action( 'woocommerce_checkout_billing' ); ?>

                <?php do_action( 'woocommerce_checkout_shipping' ); ?>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
            </div>
        <?php endif; ?>
        <div class="col-md-6">
            <h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

            <div id="order_review" class="woocommerce-checkout-review-order">
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
        </div>
    </div>
</form>

<?php
// ...
?>