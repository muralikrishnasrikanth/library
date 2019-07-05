<?php include "user.html";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con) {
    print "connection established";
}else{
	print "connection failed";
}
$id1=$_POST['idm'];
$id2=$_POST['idb'];
 

$sql = "DELETE FROM issue WHERE mid='$id1' AND bid='$id2'";



if (mysqli_query($con,$sql)) 
{
    print " record deleted successfully";
	
}
 else 
 {
    echo "<br>";
	
	echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);
?> 