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
            <h1 class="title">Add New User</h1>                
            <div class="main-container">
                <div class="wrapper">
                    <form  method="POST" action=" add-new-script.php">
                        <div class="row">     
                            <i class="fas fa-user"></i>
                            <input class="field" type="text" placeholder="UserName" name="uname" require>
                        </div>
                        <div class="row">
                        <i class="fa-solid fa-envelope"></i>
                            <input class="field" type="text" placeholder="Email" name="email" require>
                        </div>
                        <div class="row">
                            <i class="fas fa-lock"></i> 
                            <input class="field" type="password" placeholder="Password" name="pass" require>
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