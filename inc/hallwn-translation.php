<?php

function hallwn_convert_numbers_to_arabic( $string ) {
    $arabic_numbers = array('۰', '۱', '۲', '۳', '٤', '۵', '٦', '۷', ' ۸ ', '۹', '.');
    $english_numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
    return str_replace($english_numbers, $arabic_numbers, $string);
}

add_filter( 'get_the_time', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'the_date', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'get_the_date', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'comments_number', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'get_comments_number', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'get_comment_date', 'hallwn_convert_numbers_to_arabic' );
add_filter( 'get_comment_time', 'hallwn_convert_numbers_to_arabic' );


function hallwn_wpse_convert_arabic_time( $the_time ) {
    if ( get_bloginfo( 'language' ) == 'ar' ) { 
        $the_time = hallwn_convert_numbers_to_arabic( $the_time );
    }
    return $the_time;
}

