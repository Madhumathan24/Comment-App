<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

     <form action="forgotdb.php" method="post">

        <h2>Forgot Password</h2><br> <br>
		

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
		

        <label>Email</label>

        <input type="text" name="email" placeholder="Email"   required><br>

        <label>Secret</label>

        <input type="password" name="secret" placeholder="Password" required><br> 
 


<div style="position: relative;">
  <div style=" position: absolute;top: -5px;right: 9px;font-size: 10px;"> <img src="img/thunders.png" style="background-color: #f3ea08;float:left;height:13px;width:99%"></div>
  <button type="submit" style=" width: 100%;height: auto;"> <img src="img/lock.png" style="float:left;height:18px">Sign In</button>
  
</div>
     

     </form> 


</body>

</html>