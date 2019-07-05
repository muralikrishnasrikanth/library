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
$id1=$_POST['id'];
 

$sql = "DELETE FROM book WHERE bid='$id1'";



if (mysqli_query($con,$sql)) 
{
    print " record deleted successfully";
	
}
 else 
 {
    echo "<br>";
	
	echo "a book is issued to the member". $id1." so cannot be deleted from member record directly";
}

mysqli_close($con);
?> 