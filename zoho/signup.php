<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

     <form action="signupdb.php" method="post">

        <h2>Sign Up</h2><br> <br>
		

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
		
	<center>	<label>Already have an account ?</label> <a href="index.php">Sign In</a> <br> <br> </center>
<br>
        <label>Email</label>

        <input type="text" name="email" placeholder="Email" style=" padding: 10px;"  required><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" style=" padding: 10px;" required><br>
		
		<label>Secret</label>

        <input type="password" name="secret" placeholder="Secret" style=" padding: 10px;" required> <br>

        <button type="submit" > <img src="img/lock.png" style="float:left;height:18px">Sign Up</button>
<p style="font-size:13px;text-align:center;">By clicking the "Sign Up" button, you are creating an account ,and you agree to the Terms of Use.</p>
     </form> 
	 

</body>

</html>