<?php include "includes/header.php"?>

<!-- END Header Includes here -->
<!-- START LEFT COL -->



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
    </section>
<!-- START RIGHT COL -->
<aside class = "cycle">
<h3>Basic Website Design Cycle </h3>
<p>Here are 3 tools I use to create websites.</p>
<p><a href="https://www.justinmind.com/blog/website-wireframe-design-guide/">Wireframes - </a>  This is helpful in the design process because it helps define the website's layout. </p>
 
<p><a href="https://www.lucidchart.com/pages/templates/flowchart/website-flowchart-template">Flowcharts -</a>  This is increadibly helpful when it comes to creating the structure of a website.</p>

<p><a href="https://wpamelia.com/website-design-questionnaire/">Client Questionnaire - </a> This is probably my favorite tool because it allows me to personalize the website to ensure my client's happiness.</p>

</aside>
<!-- END RIGHT COL -->


<?php include "includes/footer.php"?>

