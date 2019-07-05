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
$y=$_POST['year'];
 

$sql = "DELETE FROM member WHERE mid='$id1' AND yea='$y'";



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