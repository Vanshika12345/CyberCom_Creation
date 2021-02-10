<?php

$string = 'This is a string .';

echo "Words count is ".str_word_count($string)."<br>";

//word count in form of array, starting with 0 
echo "Words count in array form ";
$array = str_word_count($string,1); // returns the array with index 0,1,2....
print_r($array); 
echo "<br>";

// word count in form of associative array with their starting index as index
echo "Words count with their count as index";
$array = str_word_count($string,2); //return the array index based on position of word
print_r($array); 
echo "<br>";

//word count in form of associative array starting with index 0 giving index to (.)
echo "Words count with their starting index as index and symbols too .";
$array = str_word_count($string,2,'.'); //specifying the third argument counts . as an word and gives it an index
print_r($array); 
echo "<br>";


echo "Length of the string ".strlen($string);
echo "<br>";

//randomly shuffling of string
echo "Shufflement of string (always different output): ".str_shuffle($string);
echo "<br>";

echo "Reversing the string : ".strrev($string);
echo "<br>";

echo "Substring Function : ";
echo substr($string, 0,5)."<br>";


$string2 = 'This is a string ';
echo "Similarity between two string in no. of characters : ";
echo similar_text($string, $string2)."<br>"; //returns the no of matching characters between two strings
$similar_texts = similar_text($string, $string2,$result);
echo "Similarity between two string in percentage : ".$result."<br>"; 

//
$trim_string = "   This is a string. This string has two sentences ";
echo $trim_string."<br>";
echo trim($trim_string)."<br>";

$quotedString = "This string is 'quoted' string";
$slashedString = addslashes($quotedString); //add slashes as escape character is present in the string
echo "String with slashes : ".$slashedString;
echo "<br>";

echo "String without slashes : "; //removes the slashes from the string
echo stripslashes($slashedString);

?>