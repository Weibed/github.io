<!doctype html>
<html lang="en">

<head>
    <title>Lab 2</title>
    <meta charset="UTF-8">
    <link href="lab2.css" rel="stylesheet">
</head>

<body>
    <h1>Lab 2</h1>


    <table>
        <tr>
            <td>
                <?php
                $firstName = "David";
                $lastName = "Weibel";
                $fullName = $firstName . " " . $lastName;



                
                echo "My name is  " . $fullName . "<br /> \n";
                echo "<br />\n";
                echo "Your IP address is " . $_SERVER['REMOTE_ADDR'] . "<br />\n";
                
                ?>
            </td>
        </tr>



    </table>
    <table>
        <tr>
            <td>
                <?php
                define('PI', 3.14);
                $radius = 872;
                $circumference = 2 * PI * $radius;
                $area = PI * ($radius * $radius);

                
                echo "My input radius is " . $radius . " " . "meters. <br /> \n";
                echo "The calculated circumference is " . number_format($circumference, 1, '.', ',') . " meters <br /> \n";
                echo "The calculated area is " . number_format($area, 1, '.', ',') . " square meters <br />\n";
                echo "<br />\n";
                echo "The value of PI that I am using is " . PI . " .<br />\n";
                
                ?>
            </td>
        </tr>
    </table>


    


</body>

</html>