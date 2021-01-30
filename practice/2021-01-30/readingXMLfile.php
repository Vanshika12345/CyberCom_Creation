<?php

$xml = simplexml_load_file('example.xml');

echo $xml->person[1]->name." ";
echo $xml->person[1]->age;
echo "<br><br>";
//It changed the value of index 1 but not in the file
//$xml->person[1]->name = 'vanshika';  

//or
echo "<br>";
foreach ($xml->person as $persons) {
	echo ' Name : '.$persons->name.' Age : '.$persons->age."<br>";
	foreach ($persons->marks as $marks) {
		echo $marks->sub_name.' :'.$marks->mark."<br>";
	}
}
?>