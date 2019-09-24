<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
?>
<?php
//Creating Function
function TimeAgo ($oldTime, $newTime) {
$timeCalc = strtotime($newTime) - strtotime($oldTime);
if ($timeCalc >= (60*60*24*30*12*2)){
	$timeCalc = intval($timeCalc/60/60/24/30/12) . " years ago";
	}else if ($timeCalc >= (60*60*24*30*12)){
		$timeCalc = intval($timeCalc/60/60/24/30/12) . " year ago";
	}else if ($timeCalc >= (60*60*24*30*2)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " months ago";
	}else if ($timeCalc >= (60*60*24*30)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " month ago";
	}else if ($timeCalc >= (60*60*24*2)){
		$timeCalc = intval($timeCalc/60/60/24) . " days ago";
	}else if ($timeCalc >= (60*60*24)){
		$timeCalc = " Yesterday";
	}else if ($timeCalc >= (60*60*2)){
		$timeCalc = intval($timeCalc/60/60) . " hours ago";
	}else if ($timeCalc >= (60*60)){
		$timeCalc = intval($timeCalc/60/60) . " hour ago";
	}else if ($timeCalc >= 60*2){
		$timeCalc = intval($timeCalc/60) . " minutes ago";
	}else if ($timeCalc >= 60){
		$timeCalc = intval($timeCalc/60) . " minute ago";
	}else if ($timeCalc > 0){
		$timeCalc .= " seconds ago";
	}
return $timeCalc;
}
 
//Connecting Database
@$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
	die("Database Connection Failed" . mysql_error());
	}
$select_db = mysql_select_db('register');
if (!$select_db){
	die("Database Selection Failed" . mysql_error());
	}
$query_time="Select * from time_table where id=1";
$result_time = mysql_query($query_time);
$row_time = mysql_fetch_array($result_time);
$date = $row_time['trn_date'];
 
echo "Posted on ". TimeAgo($date, date("Y-m-d H:i:s"));
?>
<br /><br />
Source: <a href="https://www.allphptricks.com/">https://www.allphptricks.com/</a>