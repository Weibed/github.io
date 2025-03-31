<?php


// Clean up the characters in a string.
// Remove all punctuation.
// Convert all characters to lowercase.

function clean_string($string)  { 

$string = strip_tags($string); // strips any html tags out of your text box 
// Remove the special curly smart quotes.
//$string = remove_curly_quoted($string);
// Strip out punctuation.
$puncuation = array(".", "!", "?", ",", '""', "/", "(", ")", ";", ":");
$string = str_replace($puncuation, " ", $string);
$string = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $string)));
$string = stripslashes(($string));  // Strip out escape characters
$string = trim($string); // Removes whitespaces from the ends.
// turns into a string that is all lowercase
$string = strtolower($string);

return $string;
}
/*https://inteist.com/php-remove-curly-smart-quotes-from-string-data/
Here's a simple function that will remove curly quotes aka smart quotes
 from your strings.  Very useful if you enter data from MS Word files or
  other sources that may use weird unicode characters. Use it as an input
   cleaning step before saving the string data.*/

 
   function remove_curly_quotes($text) {
     // First, replace UTF-8 characters.
        $text = str_replace(array("\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9c",
         "\xe2\x80\x9d", "\xe2\x80\x93", "\xe2\x80\x94", "\xe2\x80\xa6"),
          array("'", "'", '"', '"', '-', '--',
        '...'), $text);
        // Next, replace their Windows-1252 equivalents.
         $text = str_replace(array(chr(145), chr(146), chr(147), chr(148), chr(150),
          chr(151), chr(133)), array("'", "'", '"', '"', '-', '--', '...'), $text);

    return $text;
}


?>