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
        $logo = 'fa-home';
        // $PageID = 'Client Questionare';
    break;
    
    case 'history.php':
        $title = "History of Piroshky";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#97D6E7;"';
        break;

    case 'employment.php':
         $title = "Join the team!";
         $logo = 'fa-pencil-square-o';
         $logo_color = ' style="color:#97D6E7;"';
         $PageID = 'Join the team!';
        break;
//change icon
        case 'locations.php':
            $title = "Locations";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            // $PageID = 'Flexbox Research';
           break;
//change icon
           case 'catering.php':
            $title = "Order Online";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            $PageID = 'Order Online';
           break;
//change icons
           case 'menu.php':
            $title = "Piroshky Menu";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            // $PageID = 'Shopping Cart Research';
           break;
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }


?>



