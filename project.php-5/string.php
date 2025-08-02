<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $reversed = strrev($string); 

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (in_array($char, ['a','e','i','o','u','A','E','I','O','U'])) {
            $vowelCount++;
        }
    }

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversed \n\n";
}

?>

