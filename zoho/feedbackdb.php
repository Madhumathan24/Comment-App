<?php 
session_start(); 
include "connectdb.php";
if (isset($_POST['email']) && isset($_POST['feedback'])) {

    $uname = $_POST['email'];
    $feedback = $_POST['feedback'];  	 
$select = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {

   	$sql = "INSERT INTO comment(email,comments) VALUES ('".$uname."','".$feedback."')"; 
		if ($conn->query($sql) === TRUE) {
			echo("ok");
		   header("Location: feedback.php?submit=Feedback Submitted..");
		    exit();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}


else {
    header("Location: index.php?error=Email Id Not Yet Register ");
   exit();

}
	 	    
}
	$conn->close();


?>