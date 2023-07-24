<?php

$datamenu = array(  
    'home' => array('/'),
    'solutions' => array('corporate-university.php', 'digital-learning.php', 'knowledge-management.php', 'certified-workshop.php', 'learning-content-development.php'),
    'corporate' => array('board-of-directors.php','vision-mission.php', 'proven-methodology.php' ) ,
    'news' => array('news.php', 'news-single.php'),
    'event' => array('events.php','event-single.php')       
);

function activeClass ($menus)
{   
    // $currentReference = $_SERVER['REQUEST_URI'];
    //print_r($currentReference);
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    foreach ($menus as $key => $subArray) {
        if (in_array($page, $subArray) || strpos(implode('#', $subArray), $page) !== false) {
            return $key;
        }
    }
    return null;
}