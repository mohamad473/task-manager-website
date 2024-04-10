<!DOCTYPE html>
<html>
  <head>
    <title>Task Management System</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <h1>Task Management System</h1>
      <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />

        <div class="signup">
          <form method="POST" action="signup.php">
            <label for="chk" aria-hidden="true">Sign up</label>
            <?php if(isset($_GET['serror'])){ ?>
              <p class="error"><?php echo $_GET['serror'];?></p>
            <?php } ?>
            <input type="text" name="uname" placeholder="User name"/>
            <input type="email" name="email" placeholder="Email"/>
            <input
              type="password"
              name="pswd"
              placeholder="Password"
              
            />
            <button name="submit">Sign up</button>
          </form>
        </div>

        <div class="login">
          <form method="POST" action="login.php">
            <label for="chk" aria-hidden="true">Login</label>
            <?php if(isset($_GET['error'])){ ?>
              <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <input type="email" name="email" placeholder="Email"  />
            <input
              type="password"
              name="pswd"
              placeholder="Password"
            />
            <button>Login</button>
          </form>
        </div>
      </div>
      <p></p>
    </div>
    <div class="background"></div>
  </body>
</html>
