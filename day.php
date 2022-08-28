<?php
require 'services/connection.php';
/*$sql="select * from attendance";
$res = $conn->query($sql);
while($row=$res->fetch_assoc())
{
    $date = $row['created_at'];
    $unixTimestamp = strtotime($date);
    $dayOfWeek = date("l", $unixTimestamp);
}
echo $dayOfWeek;*/
echo date("Y/m/d");
?>