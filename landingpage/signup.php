<?php declare(strict_types=1);
session_start();
include "../connection.php";
    if(isset( $_POST['email']) && isset($_POST['pswd'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }       

        $uname = validate($_POST['uname']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['pswd']);

        if((empty($uname) && empty($email) && empty($pass)) || (empty($email) && empty($pass)) || (empty($uname) && empty($email)) || (empty($uname) && empty($pass))){
             header("Location: index.php?serror=Please Fill All The Fields");
             exit();
        }else if(empty($email)){
            header("Location: index.php?serror=Email is Required");
             exit();
        }else if(empty($pass)){
            header("Location: index.php?serror=Password is Required");
            exit();
        }else if(empty($uname)){
            header("Location: index.php?serror=UserName is Required");
            exit();
        }else{
                $sql = "INSERT INTO `users`(username, email, password) VALUES('$uname', '$email', '$pass')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: ../userpanel/user.php");
                }
            }
        }else {
        header("Location: index.php");
        exit();
    }


?>