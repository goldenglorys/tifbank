<?php
require 'dbcon.php';
$staffsResultSet=mysqli_query($con,"select * from bank_staffs_tb");
echo "<table class='table table-bordered' width=30%>";
echo "<thead class='card-header'><th class='text-center'>S/N</th><th class='text-center'>Name</th><th class='text-center'>Gender</th><th class='text-center'>Email</th><th class='text-center'>Full-Details</th></thead>";
$si=0;
while ($srow=mysqli_fetch_array($staffsResultSet)) {
$sid=$srow['customer_id'];
  $si++;
  echo "<tr class='card-body'><td class='text-center'>".$si."</td><td class='text-center'>".$srow['firstname']." ".$srow['lastname']."</td><td class='text-center'>".$srow['gender']."</td><td class='text-center'>".$srow['email']."</td><td class='text-center'><button class='btn' style='background-color:#009470'><a href='more.php?id=$id' class='text-light'>More</button></td></tr>";
}
echo "</table>";
?>