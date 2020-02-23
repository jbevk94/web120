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
        $title = "Web Dev Examples by Beverly James";
        $logo = 'fa-home';
        $PageID = 'Client Questionare';
    break;
    
    case 'aia.php':
        $title = "Beverly's Final Project Audience, Issues and Approach Research";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#97D6E7;"';
        break;

    case 'flowchart.php':
         $title = "Beverly's Flowchart Page";
         $logo = 'fa-pencil-square-o';
         $logo_color = ' style="color:#97D6E7;"';
         $PageID = 'Flowchart';
        break;
//change icon
        case 'flexbox.php':
            $title = "Flexbox Research";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            $PageID = 'Flexbox Research';
           break;
//change icon
           case 'galleries.php':
            $title = "Galleries Research";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            $PageID = 'Galleries Research';
           break;
//change icons
           case 'shoppingcarts.php':
            $title = "Shopping Cart Research";
            $logo = 'fa-pencil-square-o';
            $logo_color = ' style="color:#97D6E7;"';
            $PageID = 'Shopping Cart Research';
           break;
//change icons
case 'siteapp.php':
    $title = "Mobile vs App Research";
    $logo = 'fa-pencil-square-o';
    $logo_color = ' style="color:#97D6E7;"';
    $PageID = 'Mobile vs App Research';
   break;
 //change icons       
    case 'contactme.php':
        $title = "Beverly's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#97D6E7;"';
        $PageID = 'Contact Beverly';
    break;
    //change icons       
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#97D6E7;"';
        $PageID = 'Calendar';
    break;
    //change icons       
    case 'youtube.php':
        $title = "Youtube";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#97D6E7;"';
        $PageID = 'Youtube';
    break;
    //change icons       
    case 'map.php':
        $title = "Google Map";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#97D6E7;"';
        $PageID = 'Google Map';
    break;
    //change icons       
    case 'webcam.php':
        $title = "Galleries and Sliders";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#97D6E7;"';
        $PageID = 'Galleries and Sliders';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }


?>



