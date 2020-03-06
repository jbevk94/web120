<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Piroshky";
        $PageID = 'Home';
    break;
    
    // case 'history.php':
    //     $title = "History of Piroshky";     
    //     $PageID = 'History of Piroshky';
    //     break;

    case 'employment.php':
         $title = "Join the team!";
         $PageID = 'Join the team!';
        break;
//change icon
        case 'ct.php':
            $title = "Locations";
            $PageID = 'Come visit us';
           break;
           case 'cs.php':
            $title = "Locations";
            $PageID = 'Come visit us';
           break;
           case 'sp.php':
            $title = "Locations";
            $PageID = 'Come visit us';
           break;
           case 'pp.php':
            $title = "Locations";
            $PageID = 'Come visit us';
           break;
//change icon
           case 'catering.php':
            $title = "Order Online";
            $PageID = 'Order Online';
           break;
//change icons
           case 'menu.php':
            $title = "Piroshky Menu";
            $PageID = 'Menu';
           break;
    default:
        $title = THIS_PAGE;
        $PageID = 'Welcome';
   }


?>



