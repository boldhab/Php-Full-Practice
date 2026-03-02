<?php
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";

// Concatenation
$thirdString = $firstString;
$thirdString .= $secondString;

echo $thirdString . "<br>";

echo "Lowercase: " . strtolower($thirdString) . "<br>";
echo "Uppercase: " . strtoupper($thirdString) . "<br>";
echo "First letter: " . ucfirst($thirdString) . "<br>";
echo "Each word: " . ucwords($thirdString) . "<br>";
echo "Length: " . strlen($thirdString) . "<br>";
echo "Word count: " . str_word_count($thirdString) . "<br>";
echo "Trim: " . $firstString . trim($secondString) . "<br>";
echo "Replace: " . str_replace("quick", "super-fast", $thirdString);
 

?>