<?php include "includes/header.php"?>


</section>
<!-- End left col -->
<!-- Change Image -->
<img src="images/ph.jfif" alt="assorted piroshkies" class="employ">

<!-- Start right col -->
<div class="form">

<?php
    

        include 'includes/index_include.php'; 
    
        $toAddress = "Jbevk94@gmail.com";  //place your/your client's email address here
        $toName = "Olga"; //place your client's name here
        $website = "Piroshky Bakery";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('employForm.php');#demonstrates multiple form elements
    ?>

</div>

<?php include "includes/footer.php"?>