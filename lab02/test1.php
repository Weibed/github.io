<!doctype html>
<html lang ="en">
    <head>
        <title>
            Lecture 2 Testing
        </title>
    </head>
    <body>
        <p> Lecture 2 Testing </p>

        <!-- This is an HTML comment  --> 


        <?php 
        // This is a comment
        /* This is also a comment that can spany many lines if need be. */

        echo("Hello World!<br />\n");
        echo("This is line2<br />\n");
        echo("This is line3<br />\n");

        //echo('This is line4 using single quotes<br />' . "\n");
        //echo(This is line5 using single quotes<br /> . "\n");

        ?>

       <p> Displaying image outside of PHP </p>
       <img src="phpLogo.png" alt="PHP Logo" />

       <?php
       /*
       echo("<!-- Start of PHP script -->\n");
       echo("<p>Displaying image inside of PHP</p>\n");
       echo('<img src="phpLogo.png" alt="PHP Logo" />' . "\n");
       echo("<img src=\"phpLogo.png\" alt=\"PHP Logo\" />\n");
       echo("<!-- END of PHP script -->\n");
       */

       ?>

       <p> Demonstration of variables </p>

        <?php
        $firstName = "John";
        $lastName = "Doe";
        $fullName = $firstName . " " . $lastName;
        echo "The full name is  " . $fullName . "<br /> \n";
        ?>

        <p> Demonstration of variables holding numbers </p>

        <?php
        $a = 5.75;
        $b = 6.875;

        $result = $a * $b;
        echo "Result = $result <br /> \n";
        echo "Two decimal places.<br /> \n";
        echo "Result = " . number_format($result, 2) . "<br />\n" ;

        echo "<br />\n";
        echo "Your IP address is " . $_SERVER['REMOTE_ADDR'] . "<br />\n";


        define('MN_SALES_TAX_RATE', '.06875');
        $widgetPrice = 45.99;
        $priceWithTax = $widgetPrice + $widgetPrice * MN_SALES_TAX_RATE; 

        echo "Widget Price = $widgetPrice <br />\n";
        echo "Price with Tax = $" . number_format($priceWithTax, 2) . "<br />\n";

        ?>


Version 1.00.13
        

    </body>
</html>
    