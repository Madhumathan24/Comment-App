<?php 

session_start(); 

include "connectdb.php";

if (isset($_POST['email']) && isset($_POST['secret'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['email']);

    $secret = validate($_POST['secret']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($secret)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE email='$uname' AND secret='$secret'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['secret'] === $secret) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];



                header("Location: resetpassword.php");

                exit();

            }else{

                header("Location: index.php?error=Incorrect User name or Secret");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorrect User name or Secret");

            exit();

        }

    }

}else{

    header("Location: secret.php");

    exit();

}
?>