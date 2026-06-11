<?php

/*** Child Theme Function  ***/
function weiboo_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_template_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action('wp_enqueue_scripts', 'weiboo_theme_enqueue_scripts', 11);

// GTM HEAD
function gtm_head() { ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K7F5PLD2');</script>
<!-- End Google Tag Manager -->

<?php }
add_action('wp_head', 'gtm_head');



// GTM BODY
function gtm_body() { ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7F5PLD2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php }
add_action( 'wp_body_open', 'gtm_body' );

// Quitar intervalo de precios por diegol.top
function diegol_variacion_precio_formato( $price, $product ) {
    // Precio Normal
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    // Precio Rebajado
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    if ( $price !== $saleprice ) {
        $price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
    }
    
    return $price;
}
add_filter( 'woocommerce_variable_sale_price_html', 'diegol_variacion_precio_formato', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'diegol_variacion_precio_formato', 10, 2 );