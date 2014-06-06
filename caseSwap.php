<?php

/**
 * @author Paul Dolan
 * @copyright 2014
 * @name caseSwap.php
 */

//retrieve the contents of a file and store as a string in a variable
$fileContents = file_get_contents($argv[1]);

//store the length of the string
$len = strlen($fileContents);

//loop through the string
for ($i = 0; $i < $len; $i++) {
    
    //store each character from the string to a variable
    //check to make sure it is actually a letter
    //if it is a lower case character, convert it to uppercase using strtoupper()
    //otherwise convert the character to uppercase
    $char = $fileContents[$i];
    if ($char >= 'a' && $char <= 'z') {
        $char = strtoupper($char);
    } else if ($char >= 'A' && $char <= 'Z') {
        $char = strtolower($char);
    }
    echo $char;
}
