<?php 
session_start();
include "../connection.php";

    if(isset($_POST['cancel'])){
        header("Location: list.php");
    }else if(isset( $_POST['email']) && (isset($_POST['pass']) && isset($_POST['uname']))){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST['uname']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['pass']);

        $sql = "INSERT INTO `users`(username, email, password) VALUES('$uname', '$email', '$pass')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: list.php");
        }
            
        
    }else {
        header("Location: admin.php");
        exit();
    }

?>