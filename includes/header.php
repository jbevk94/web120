<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title>Beverly James - Web 120 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>
<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><i class="logo fa fa-home " <?=$logo?><?=$logo_color?>>Beverly James <a href="index.php"></i> SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>

