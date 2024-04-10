<?php
include "../connection.php";
if(isset($_POST['cancel'])){
    header("Location:list.php");
}else{
    $uid = $_GET['updateid'];
    $sql= "SELECT * FROM `users` WHERE userID = $uid";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $username=$row['username'];
    $emailadd=$row['email'];
    $password=$row['password'];
    $role=$row['role'];

    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        $query = "UPDATE `users` SET userID = '$uid', username='$uname', email='$email', `password`='$pass', `role`='$role' WHERE userID=$uid";
        
        $result = mysqli_query($conn,$query);
        
        if ($result)
            header('location:list.php');
        else
            die(mysqli_error($con));
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add-style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="sub1">
                <i class="fa-solid fa-list"></i>
                 <h1 class="main-title">Task Management System</h1>
            </div>
            <div class="sub2">
                <div class="right">
                    <i class="fa-solid fa-user"></i>
                    <h1>Adminstrator</h1>
                </div>
                <div class="dropdown">
                   <i class="fa-solid fa-power-off"></i>
                    <a href="../landingpage/index.php" class="drop-button">Logout</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="title">
                <h2>Edit User</h2>
            </div>
            <div class="main-container">
                <div class="wrapper">
                    <form  method="POST" action=" <?php echo("edit-user.php?updateid={$_GET['updateid']}")?>">
                        <div class="row">     
                            <i class="fas fa-user"></i>
                            <input class="field" type="text" placeholder="UserName" name="uname" value="<?php if(isset($_GET['updateid'])){ 
                            echo $username;
                            } ?>">
                        </div>
                        <div class="row">
                        <i class="fa-solid fa-envelope"></i>
                            <input class="field" type="text" placeholder="Email" name="email" value="<?php if(isset($_GET['updateid'])){ 
                            echo $emailadd;
                            } ?>">
                        </div>
                        <div class="row">
                            <i class="fas fa-lock"></i> 
                            <input class="field" type="password" placeholder="New Password" name="pass" value="<?php if(isset($_GET['updateid'])){ 
                            echo $password;
                            } ?>">
                        </div>
                        <div class="row">
                            <i class="fas fa-lock"></i> 
                            <input class="field" type="text" placeholder="Role" name="role" value="<?php if(isset($_GET['updateid'])){ 
                            echo $role;
                            } ?>">
                        </div>
                        <div class="action">
                            <div class="row button">
                                <input type="submit" value="Save" name="submit">
                            </div>
                            <div class="row button">
                                <input type="submit" value="Cancel" name="cancel">
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="cover"></div>
    </div>
    </div>
      <div class="sidebar">
            <h1 class="side-title">ADMIN</h1>
            <div class="list-items">
                <div class="flex-icon">
                    <i class="fa-solid fa-gauge"></i>
                    <p><a href="admin.php" class="color-white">Dashboard</a></p>
                </div>
                <div class="flex-icon">
                   <i class="fa-solid fa-user-group"></i>
                    <p>Users</p>
                </div>
                <div class="sub-list">
                    <div class="flex-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                        <p><a href="add-new.php">Add New</a></p>
                    </div>
                    <div class="flex-icon">
                        <i class="fa-solid fa-chevron-right"></i>
                        <p><a href="list.php">List</a></p>
                   </div>
                </div>
            </div>
        </div>
</body>
</html>