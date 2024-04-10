    <?php 
    session_start();
    include "../connection.php";
        if(isset($_POST['email']) && isset($_POST['pswd'])){
            
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $email = validate($_POST['email']);
            $pass = validate($_POST['pswd']);

            if(empty($email) && empty($pass)){
                header("Location: index.php?error=Please Enter Your Email and Passowrd");
                exit();
            }else if(empty($email)){
                header("Location: index.php?error=Email is Required");
                exit();
            }else if(empty($pass)){
                header("Location: index.php?error=Password is Required");
                exit();
            }else{
                $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass'";
                $result = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                    if($row['email'] === $email && $row['password'] === $pass){

                        if($row['role'] === 'admin'){
                            header("Location: ../adminpanel/admin.php");
                        }else {
                            header("Location: ../userpanel/user.php");
                        }
                        
                    }else {
                    header("Location: index.php?error=Incorrect Email Or Password");
                    exit();
                    }

                }else {
                    header("Location: index.php?error=Incorrect Email Or Password");
                    exit();
                }
            }
            
        }else {
            header("Location: index.php");
            exit();
        }



    ?>