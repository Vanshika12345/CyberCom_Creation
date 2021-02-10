<?php

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
//not giving names
$browser = get_browser(null,true);
echo $browser['browser'];
echo "<br>";
print_r($browser);

?>