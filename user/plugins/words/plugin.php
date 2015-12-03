<?php
/*
Plugin Name: Words
Description:  Insert words form database
Version: 1.0
Author: Teodor Wójcik
*/
// hook our custom function into the 'random_keyword' filter
yourls_add_filter( 'random_keyword', 'insert_word' );

// Our silly custom function
function insert_word( $original_keyword ) {
    global $ydb;
    //$q='SELECT w1 FROM yourls_words LIMIT '.$original_keyword.',1';
    $new_keyword = $ydb->get_var("SELECT w FROM yourls_words WHERE id = $original_keyword");
//    //$lol = $ydb->query("SELECT w1 FROM yourls_words");
    //$new_keyword = mysql_result($lol,2);
    
    
    //echo $lol;
    //$new_keyword =SELECT `w1` FROM `yourls_words` WHERE `id` = $original_keyword;
    //    $new_keyword = $original_keyword . "ADBOR";

    // a filter function MUST return something once its arguments are processed
    return $new_keyword;
}