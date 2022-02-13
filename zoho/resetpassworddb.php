<?php 

session_start(); 

include "connectdb.php";

if (isset($_POST['newpassword']) && isset($_POST['conformpassword']) ) {
function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    $newpass = validate($_POST['newpassword']);

    $conformpass = validate($_POST['conformpassword']);
	$email = validate($_POST['email']);
	if($newpass === $conformpass ){
     
	    $sql = "UPDATE user set password ='".$conformpass."'  WHERE email= '".$email."'"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		   header("Location: index.php?error=Password Reset Successfully");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else{
		  header("Location: resetpassword.php?error=New password and conform password not Same");
	}
}


	$conn->close();


?>