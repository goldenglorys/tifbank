<?php
require 'dbcon.php';
$resultSet=mysqli_query($con,"select * from customer_tb");
echo "<table class='table table-bordered' width=30%>";
echo "<thead class='card-header'><th class='text-center'>S/N</th><th class='text-center'>Name</th><th class='text-center'>Gender</th><th class='text-center'>Mobile</th><th class='text-center'>Full-Details</th></thead>";
$i=0;
while ($row=mysqli_fetch_array($resultSet)) {
$id=$row['customer_id'];
  $i++;
  echo "<tr class='card-body'><td class='text-center'>".$i."</td><td class='text-center'>".$row['firstname']." ".$row['lastname']."</td><td class='text-center'>".$row['gender']."</td><td class='text-center'>".$row['phone_number']."</td><td class='text-center'><button class='btn' style='background-color:#009470'><a href='more.php?id=$id' class='text-light'>More</button></td></tr>";
}
echo "</table>";
?>