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
$id1=$_POST['sid'];
$id2=$_POST['bid'];
$idt=$_POST['idate'];
$rdt=$_POST['rdate'];
 

$sql = "INSERT INTO issue VALUES('$id1','$id2','$idt','$rdt')";

if (mysqli_query($con,$sql)) 
{
    print "New record created successfully";
	
}
 else 
 {
    echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);
?> 