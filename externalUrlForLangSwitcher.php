<?php 
/**
*Plugin Name: External URL for Lang Switcher
*Description: Adds the ability to link a specific language to an external URL used with WPML
*Version: 0.0.1 Beta
**/


// add your desire language code line 9
//add your desired url line 10
function edit_wpml_lang( $url = '', $language = '' ) {
  
    if( $language['language_code'] == 'ja' ) {
        return 'http://www.github.com';
    } else {
        return $url;
    }
      
}
add_filter( 'WPML_filter_link', 'edit_wpml_lang', 10, 2 );

?>