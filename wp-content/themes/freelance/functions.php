<?php
add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );
function remove_wps_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_action( 'back_button', 'wpse221640_back_button' );
function wpse221640_back_button()
{
    if ( wp_get_referer() )
    {
        $back_text = __( '&laquo; Back' );
        $button    = "\n<i id='my-back-button' class='fa fa-arrow-left' aria-hidden='true' onclick='javascript:history.back()'></i>";
        echo ( $button );
    }
}
