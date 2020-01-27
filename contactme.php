<?php include "includes/header.php";?>
	 <header><h3>I'm excited to learn more about your project! Let's get started.</h3></header>
   <aside>
   <p>My office hours are 8 - 4 Sunday through Thursday. I am based in Seattle, Washington.</p>
<img src="images/fall.jpg" class="desktop" alt="fall" />
</aside>
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
    <?php include "includes/footer.php";?>