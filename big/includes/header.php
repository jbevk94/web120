<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
 
</head>
<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><i class="logo fa <?=$logo?> ">Beverly James <a href="index.php"></i> Web Dev Examples</a></h1>
  <nav id='cssmenu'>
    <ul>
  
    <li><a class="selected" href="../../web120/index.php"><span><i class="fa fa-fw fa-home"></i>Welcome</a></li>
<!-- <li><a href="big/index.php">Big</a></li> -->

<li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>

<li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
<!-- <li><a href="aia.php">AIA</a><i class="fas fa-users"></i></li> -->

<li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
     
     <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
     
     <li><a href="webcam.php"><span><i class="fas fa-camera-retro"></i> Webcam</span></a></li>

      
    </ul>
  </nav>
</header>

<section class="home">
<h3 class="pageID"><?=$PageID?></h3>
 