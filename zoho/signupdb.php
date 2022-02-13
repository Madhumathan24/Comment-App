<?php 

session_start(); 

include "connectdb.php";

if (isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['secret'])) {
function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    $uname = validate($_POST['email']);

    $pass = validate($_POST['password']);
	
	 $secret = validate($_POST['secret']);
    
	 
$stmt = $conn->prepare("SELECT * FROM user WHERE email=?");

$select = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
  header("Location: index.php?error=Email Id Already Exist ");
   exit();
}


else {
  
	$sql = "INSERT INTO user(email,password,secret) VALUES ('".$uname."','".$pass."','".$secret."')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
			   $_SESSION['email'] = $uname;
		   header("Location: feedback.php?success=Successfully Register and Logged In ");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
	 
	 
    
	    
	}


	$conn->close();


?>