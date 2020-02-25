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
  <h1><i class="logo fa <?=$logo?> "> <a href="index.php"></i> Piroshky Piroshky</a></h1>
  <nav id='cssmenu'>
    <ul>
      <li><a class="selected" href="index.php"><span>Home</a></li>
      <li><a href="history.php"><span>History</span></a></li>
      <li><a href="menu.php"><span>Menu</span></a></li>
      <li><a href="#"><span>Locations</span></a>
        <ul>
           <li><a href="pp.php"><span> Pike Place</span></a></li>
           <li><a href="cs.php"><span>Century Square</span></a></li>
           <li><a href="ct.php"><span> Columbia Tower</span></a></li>
           <li><a href="sp.php"><span> South Park</span></a></li>
        </ul>
     </li>
     <li><a href="catering.php"><span> Catering</span></a></li>
     <li><a href="employment.php"><span> Employment</span></a></li>
    </ul>
  </nav>
</header>

<section class="home">
<h3 class="pageID"><?=$PageID?></h3>
 