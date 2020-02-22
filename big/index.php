<?php include "includes/header.php"?>

<!-- END Header Includes here -->
<!-- START LEFT COL -->


</section>
<!-- END LEFT COL -->
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/index_include.php'; #site keys & code here
    
        $toAddress = "Jbevk94@gmail.com";  //place your/your client's email address here
        $toName = "Olga"; //place your client's name here
        $website = "Piroshky Bakery";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
	?>
<!-- START RIGHT COL -->
<aside>
<h3>Basic Website Design Cycle </h3>
</p>
 
</aside>
<!-- END RIGHT COL -->


<?php include "includes/footer.php"?>

