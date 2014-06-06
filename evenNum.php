<?php

/**
 * @author Paul Dolan
 * @copyright 2014
 * @name evenNum.php
 * 
 * Write a program which checks input numbers and determines whether a number is even or not.
 */

//text file containing: 701 4123 2936. These are the test values.
$file = "testfile.txt";

//gets the contents of the file as a string and then splits it using \n delimiter
$contents = explode("\n",file_get_contents($file));

//iterate through each line in the file
foreach($contents as $val){
    
    //use modulus to check if number is even
    if($val % 2){
        echo "<p>0</p>";
    }
    else {
        echo "<p>1</p>";
    }
}
