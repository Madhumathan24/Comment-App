<?php session_start();

                   include 'connectdb.php';
				   
				  echo '<table>';
				  echo '<tr>';
				  echo '<td><h2 > Comments</h2></td>';
				  echo '</tr>';
				  $count=0;
				  echo '</table>';
				   if (isset($_POST['filter'])){
                   $sql = 'SELECT * FROM comment WHERE email="'.$_GET['id'].'" ORDER BY id ASC';
				   }
				   else{
					     $sql = 'SELECT * FROM comment ORDER BY id DESC';
			
				   }
				   
                   foreach ($conn->query($sql) as $row) {
					   echo '<table>';
                             
							 echo '<div style="float: left;width: 18%;margin-top: 6px;padding:20px;">';
							 echo '<label style="font-family: Times New Roman;">'.$row['email'].'</label>' ;
							 echo '</div>';
							 echo '&nbsp;';
							  echo '&nbsp;';
                              echo '&nbsp;';
							  echo '&nbsp;';
							  echo '<div style="float:left;width: 70%;margin-top: 6px;padding-top:20px;">';
                              echo '<textarea type="text" style="padding:20px;width:80%;resize:none;" readonly >'. $row['comments'] .'</textarea>';
                              echo '</div>';
                             
							
							
                   }
                  
                  ?>
	
	<html>  <form method="post">
					 <div style="position: absolute;top: 14px; right:0; width: 15%;"><input type="Submit" name="filter" value="Filter" style=" background:white;padding: 10px 50px;border:2px solid black;border-radius: 8px;cursor: pointer;float: center;" onclick="filter()" /></div>


</form>

</html>