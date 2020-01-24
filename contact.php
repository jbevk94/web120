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
	<header role="banner">
  <h1><a href="index.php"><i class="logo fa fa-pencil"></i> Beverly's SCC WEB120 Portal</a></h1>
		<h2 class="masthead">Let's Connect
    </h2>
		<nav>
            <ul class="topnav" id="myTopnav">
              <li><a href="index.php" >Welcome</a></li>
              <li><a href="big/index.php">Big</a></li>
              <li><a href="aia.php">AIA</a></li>
              <li><a href="flowchart.php">Flowchart/Layout</a></li>
              <li><a href="fp/index.php">Final Project</a></li>
              <li><a href="contact.php" class="selected">Contact Beverly</a></li>
              <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        
          </nav>
	</header>
    <main role="main">
	 <header><h3>I'm excited to learn more about your project! Let's get started.</h3></header>
    
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Jbevk94@gmail.com";  //place your/your client's email address here
        $toName = "Olga"; //place your client's name here
        $website = "Piroshky Bakery";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </main>
    <footer>
      <small>&copy;<?=date('Y')?>Beverly James, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
</body>
</html>
