<?php

add_filter( 'dgwt/wcas/phrase/replace', function ( $to_replace ) {

    $to_replace = array(
        'and' => '',
        'the ' => '',
        'a'   => '',
        'or'  => '',
        'an'  => '',
    );
    
    return $to_replace;
    } );

?>