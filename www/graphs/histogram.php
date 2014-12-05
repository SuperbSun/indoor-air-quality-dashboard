<html>
  <head>
    <title>Histograms</title>
    <link rel="stylesheet" type="text/css" href="../html/stylesheet.css">
  </head>
  
  
  <body>
<?php
require_once ("Carbon/Carbon.php");
use Carbon\Carbon;
include '../globals.php';

$type = $_GET["type"];
$event_id = filter_input(INPUT_GET, 'event_id', FILTER_VALIDATE_INT);
$year  = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
$month = filter_input(INPUT_GET, 'month', FILTER_VALIDATE_INT);
$day_param = filter_input(INPUT_GET, 'day', FILTER_VALIDATE_INT);

$curr_date=Carbon::createFromDate($year,$month,$day_param);
$title=$_GET["name"];

  echo "<table border=0 width=100%>";
  echo "<tr><td>";
  if(strcmp($type,"day")==0) {
    echo "<h2>".$title." - ".$curr_date->format('l, F jS Y')."</h2>";
  } else {
    echo "<h2>".$title."</h2>";
  }
  echo "</td><td width='300' style='vertical-align:top'>";

  echo "<span style='padding:4px 10px 4px 10px;font-size:20px;font-weight:bold;color:#CC6666;vertical-align:top;'>";
  echo $sensor_name;  
  echo "</span>";
  echo "</td>";
  echo "<td align=right width=400>&nbsp;</td></tr>";
  echo "</table>";

mysqli_free_result($result);
?>
  </body>  
</html>
