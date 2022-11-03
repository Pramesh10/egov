<?php 
$server="localhost";
$user="root";
$password="";
$db="nea_bill"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
 echo("connected");
}
$bill_id=$_POST['bill_id'];
$b_month = $_POST['b_month'];
$b_year= $_POST['b_year'];
$current=$_POST['current_reading'];
$previous = $_POST['previous_reading'];
//$unit = $_POST['unit_consumed'];
//$rate = $_POST['rate'];
//$subtotal= $_POST['subtotal'];
$previous_due = $_POST['previous_due'];
//$total=$_POST['total'];
$ispaid=$_POST['ispaid'];
$cusid = $_POST['customer_id'];
$unit_consumed=$current-$previous;
$rate=10;
$subtotal=10*$unit_consumed;
$total=$subtotal+$previous_due;
$cmd = "UPDATE `current_bill` SET `b_month`='".$b_month."',`b_year`='".$b_year."',`current_reading`='".$current."',`previous_reading`='".$previous."',`unit_consumed`='".$unit_consumed."',`rate`='".$rate."',`subtotal`='".$subtotal."',`previous_due`='".$previous_due."',`total`='".$total."',`ispaid`='".$ispaid."',`customer_id`='".$cusid."' WHERE `bill_id`='".$bill_id."';";
if(mysqli_query($con,$cmd))
{
    echo "<script>location.href='ub.php'</script>";
}
?>