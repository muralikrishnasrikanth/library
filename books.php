<?php include "user.html";
$server="localhost";
$username="root";
$password="";
$dbname="library";
$con=new mysqli($server,$username,$password,$dbname);
if($con)
{
	print "connection established";
}
else
{
	print "connection not established";
}
$id=$_POST['id'];
$name=$_POST['bname'];
$prc=$_POST['price'];
$edi=$_POST['edi'];
$qua=$_POST['quant'];
//print "$id";
//print "$name";
//print "$prc";
//print "$edi";
//print "$qua";

$sql="INSERT INTO book VALUES('$id','$name','$prc','$edi','$qua')";

if(mysqli_query($con,$sql))
{
	print "sucessfully inserted";
}
else
{
	echo "Error: " . $sql . "<br>" . $con->error;
}

?>