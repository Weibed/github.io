<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deconstructed Results</title>
    <meta charset="UTF-8">
    <link href="lab.css" rel="stylesheet">
</head>

<body >
    <h1>Deconstructed Results</h1>
    <p> Results of your submitted form! </p>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Load in utility function.
    require_once("utilities.php");
    // Print the hidden message passed from the previous page.
    $hdnName = $_POST['hdnName'];
    echo ("My hidden data is " . $hdnName . "<br /><br />\n");


    // Get the paragraph of text. 
    $txtParagraph = $_POST['txtParagraph'];
    echo ("<!--" . $txtParagraph . "-->");
    echo ("<br /><br />\n");

    if (isset($_POST['chkWordAlphaSort'])) {
        echo ("<p>Word alphabetical sort</p>\n");

       $string = clean_string($txtParagraph);

        echo ($string);
        echo ("<br /><br />\n");

        // Convert to an array and sort. 
        $txtArray = explode(" ", $string);
        //print_r($txtArray) . "<br />\n";

        $sortDirection = $_POST['radWordAlphaSortDirection'];
        echo ("<!-- " . $sortDirection . "-->\n");
        if($sortDirection != "descending") {
            sort($txtArray);
        } else {
            rsort($txtArray);
        }
        
        
        //print_r($txtArray) . "<br />\n";
        $txtString = implode(", ", $txtArray);

        echo ($txtString . "<br /><br />\n");
    }
    if (isset($_POST['chkCharacterCount'])) {
        echo ("<p>Character Count</p>\n");

        $string = clean_string($txtParagraph);
        

        echo ($string);
        echo ("<br /><br />\n");

        // Count the frequency of the charactrs in a string. 

        $alphbetArray = count_chars($string);
        //print_r($alphbetArray);
        echo("<pre>\n");
        for ($i = 97; $i<= 122; $i++) {
            echo chr($i) . "  " . $alphbetArray[$i] . "\n";
        }

        echo("</pre>\n");

    }   
         // PHP script to display in frequency all the words in the submitted paragraph

        if (isset($_POST['chkWordFreqSort'])) {
            echo ("<p>Word Frequency Sort</p>\n");
    
            $string = clean_string($txtParagraph);

             // Convert to an array and count. 
             $txtArray = explode(" ", $string);
             $txtArray = array_count_values($txtArray);
             // Sort the array. 
             $sortDirection = $_POST['radWordFreqSortDirection'];
            echo ("<!-- " . $sortDirection . "-->\n");
            if($sortDirection != "descending") {
                asort($txtArray);
            } else {
                arsort($txtArray);
            }
             //arsort($txtArray);
             print_r($txtArray) ;
             
    }


    ?>
    <small><br /><br />Version 1.00.18</small>
</body>

</html>