<?php

function isPalindrome($kata)
{
    $reverse = strrev($kata);
    return strtolower($kata) == strtolower($reverse);
}

$kata1 = "Malam";
$kata2 = "Hahi";
echo "$kata1 " . (isPalindrome($kata1) ? "adalah " : "bukan ") . "Palindrome\n";
echo "$kata2 " . (isPalindrome($kata2) ? "adalah " : "bukan ") . "Palindrome";