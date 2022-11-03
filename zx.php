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
$customer_id=$_POST["id"];
$sc_number=$_POST["scnum"];
$name=$_POST["fn"];
$address=$_POST["adr"];
$phone=$_POST["ph"];
$branch_id=$_POST["bid"];
$demand_id=$_POST["did"];
$status=$_POST["sts"];
$sql="UPDATE customer SET customer_id=$customer_id, sc_number='$sc_number',name='$name',address='$address',phone=$phone,branch_id=$branch_id,deamand_id=$demand_id,status=$status WHERE customer_id=$customer_id;";
if(mysqli_query($con,$sql))
{
    echo "<script>window.location.href= 'uc.php'</script>";
}
?>