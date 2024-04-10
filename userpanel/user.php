<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="head">
        <nav>
             <div class="sub1">
                <i class="fa-solid fa-list"></i>
                 <h1 class="main-title">Task Management System</h1>
            </div>
             <div class="sub2">
                <div class="right">
                    <i class="fa-solid fa-user"></i>
                    <h1>User</h1>
                </div>
                <div class="dropdown">
                   <i class="fa-solid fa-power-off"></i>
                    <a href="../landingpage/index.php" class="drop-button">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    <main class="container">
        <header>
            <h1>Task Manager</h1>
        </header>
        <div>
            <form  id="task-form">
                <input type="text" id="task-input" placeholder="Enter a task...">
                <button type="submit">Add Task</button>
            </form>
            <ul id="task-list">
                
            </ul>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>