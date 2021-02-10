 <?php

date_default_timezone_set('Asia/Kolkata');

$time = time();

//formatting current time
$current_time = date('d-m-Y h:i:sa',$time);

//added 1 year to current year
$time_modified = date('d-m-Y h:i:sa',strtotime('+1 year'));
echo "The current time is ".$current_time;
echo "<br>";
echo 'Modified time '.$time_modified;

echo "<br>";
/*$time_modified = date('d-m-Y h:i:sa',$current_time + 1*20);

echo ''.$time_modified;*/
 ?>