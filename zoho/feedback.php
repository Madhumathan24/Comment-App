<!DOCTYPE html>
<?php session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<style>
.error {

   background: #F2DEDE;

   color: #0c0101;

   padding: 10px;

   width: 95%;

   border-radius: 5px;

   margin: 20px auto;

}
.table {
			margin: auto;
			width: 100%; 
		}
		
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
 background:white;
  padding: 10px 50px;
  border:2px solid black;
  border-radius: 8px;
  cursor: pointer;
  float: center;
}
input[type=button] {
 background:white;
  padding: 10px 50px;
  border:2px solid black;
  border-radius: 8px;
  cursor: pointer;
  float: center;
}

.container {
  border-radius: 5px;

  padding: 10px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}    #outside { position:absolute; top:0; left:0; z-index:0; width:400px;
        height:400px }
    #inside  { position:absolute; top:100px; left:100px; z-index:1; 
        width:200px; height:200px; }



</style>
</head>
<body>
<?php if (isset($_GET['success'])) { ?>

            <p class="error"  id="eror" name="eror"><?php echo $_GET['success']; ?> </p>

        <?php } ?>

<?php if (isset($_GET['submit'])) { ?>

            <p class="error"  id="eror" name="eror"><?php echo $_GET['submit']; ?> </p>

        <?php } ?>
<p style="padding-right:10px;"><button style="float:right;" onclick="logout()"><img src="img/logout.png" style="width=10px;height:20px"/></button></p>
<div class="container">
  <form action="feedbackdb.php" method="post">
   <input type="hidden" id="email" name="email" placeholder="Email"  value="<?php echo($_SESSION['email']); ?>"></input>
		
    <label>What would you like to share with world ?</label>
    <div class="row">
      
      <div class="col-75">
        <textarea id="feedback" name="feedback"  style="height:150px;resize: none" required></textarea>
      </div>
	  <div class="col-25" style="padding-top:4%;">
         <center><input type="submit" value="Submit"/></center>
      </div>
    </div>
	<br>
	
<iframe src="iframe.php?id=<?php echo($_SESSION['email']); ?>" height="300" width="100%" style="border:1px solid black; display:block;" title="Iframe Example"></iframe>
   
    </div>
  </form>
</div>
<script >

const myTimeout = setTimeout(feedbacknotification, 2000);
function feedbacknotification() {

	document.getElementById('eror').style.display='none';
}

	

function logout(){
	
	window.location.href="index.php";
	
}
</script>
</body>
</html>
