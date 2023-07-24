<?php

$datamenu = array(  
    'home' => array('/'),
    'solutions' => array('solutions'),
    'corporate' => array('about' ) ,
    'news' => array('news'),
    'clients' => array('clients'),
    'event' => array('events')       
);

function activeClass ($menus)
{   
    // $currentReference = $_SERVER['REQUEST_URI'];
    //print_r($currentReference);
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    // $link = $_SERVER['PHP_SELF'];
    // $link_array = explode('/',$link);
    // $page = end($link_array);
    // print_r($uriSegments[1]);
    foreach ($menus as $key => $subArray) {
        if (in_array($uriSegments[1], $subArray)) {
            return $key;
        }
    }
    return null;
}