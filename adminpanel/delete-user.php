<?php
 include "../connection.php";
 if(isset($_GET['deleteid'])){
        $uid=$_GET['deleteid'];
        $sql="DELETE FROM users WHERE userID='$uid'";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:list.php');
        }else{
            die(mysqli_error($con));
        }
}

    ?> 