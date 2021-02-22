<?php  
require 'dbcon.php';
$query = mysqli_query($con,"SELECT * from transaction_details where amount ='200'");
echo "<table class='table table-bordered' width=30%>";
echo "<thead class='card-header'><th class='text-center'>S/N</th><th class='text-center'>Name</th><th class='text-center'>Account</th><th class='text-center'>Action</th><th class='text-center'>Amount</th><th class='text-center'>Operator</th><th class='text-center'>Phone</th><th class='text-center'>Date</th><th class='text-center'>Time</th></thead>";
$no=0;
   while ($do=mysqli_fetch_array($query)) {
      $no++;
      echo "<tr class='card-body'><td>".$no."</td><td>".$do['account_name']."</td><td>".$do['account_number']."</td><td>".$do['action']."</td><td>".$do['amount']."</td><td>".$do['perform_by']."</td><td>".$do['phone_number']."</td><td>".$do['dates']."</td><td>".$do['clock']."</td></tr>";
   }
   echo "</table>";
?>