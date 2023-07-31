<?php

$datamenu = array(  
    'home' => array('/'),
    'solutions' => array('solutions'),
    'corporate' => array('about' ) ,
    'news' => array('news'),
    'clients' => array('clients'),
    'event' => array('events')       
);

include 'datapage.php';

function activeClass ($menus)
{   
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    foreach ($menus as $key => $subArray) {
        if (in_array($uriSegments[1], $subArray)) {
            return $key;
        }
    }
    return null;
}

function activePage ($menus)
{   
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    foreach ($menus as $key => $value) {
        if ($uriSegments[2]== $value) {
            return $key;
        }
    }
    return null;
}