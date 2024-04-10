<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list-style11.css">
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
                <h1>Users List</h1>
            </div>
            <div class="list">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../connection.php";
                            $sql ="SELECT * FROM `users` WHERE role = 'user'";
                            $result = mysqli_query($conn, $sql);
                            $count_user = mysqli_num_rows($result);
                            $i = 1; 
                            
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>
                                        <td>{$i}</td>
                                        <td>{$row['username']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['role']}</td>
                                        <td>
                                            <div class="."buttons".">
                                                <a href="."edit-user.php?updateid={$row['userID']}".">Edit</a>
                                                <a href="."delete-user.php?deleteid={$row['userID']}".">Delete</a>
                                            </div>
                                        </td>
                                        </tr>";
                                        $i++;
                                }
                            
                        ?>

                    </tbody>
                </table>
            </div>
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