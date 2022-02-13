<?php

$sname= "localhost";

$root= "root";

$password = "";

$db_name = "zoho";

$conn = mysqli_connect($sname, $root, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

?>