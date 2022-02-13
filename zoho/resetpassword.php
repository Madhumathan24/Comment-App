<!DOCTYPE html>
<?php session_start();
      //Put session start at the beginning of the file
?>
<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

     <form action="resetpassworddb.php" method="post">

        <h2>Reset The Password </h2>
		 <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
	
	    <input type="hidden" name="email" placeholder="Email"  value="<?php echo($_SESSION['email']); ?>"></input><br>
		
        <label>New Password</label>

        <input type="password" name="newpassword" placeholder="New Password"   required><br>

        <label>Conform Password</label>

        <input type="password" name="conformpassword" placeholder="Conform Password" required><br> 

        <button type="submit" > <img src="img/lock.png" style="float:left;height:18px">Change Password</button>

     </form> 
	 

</body>

</html>