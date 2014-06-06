<?php

/**
 * @author Paul Dolan
 * @copyright 2014
 */
//loops through a file
foreach (file($argv[1]) as $line) {
    $words = explode(" ", trim($line));
    array_pop($words);
    echo array_pop($words) . "\n";
}
