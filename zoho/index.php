<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

     <form action="logindb.php" method="post">

        <h2>Sign In</h2><br> <br>
		

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
		
	<center>	<label>Dont have an account ?</label> <a href="signup.php">Sign Up</a> <br> <br> </center>
<br>
        <label>Email</label>

        <input type="text" name="email" placeholder="Email"   required><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password" required><br> 
 <a href="forgot.php" style="float:right;">Forgot your password? </a> <br> <br>
        <button type="submit" > <img src="img/lock.png" style="float:left;height:18px">Sign In</button>

     </form> 
	 

</body>

</html>