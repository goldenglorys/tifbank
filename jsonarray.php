<?php
require ("dbcon.php");
$search= $_POST['input'];
$query = mysqli_query($con, "select * from transaction_details");
$data = mysqli_fetch_array($query,MYSQLI_ASSOC);
$show = json_encode($data);
if ($show) {echo "[".$show."]";}
?>
 