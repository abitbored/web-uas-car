<?php

require('function.php');

if (isset($_POST['submit'])) {
    login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Admin Login</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="home.php" class="logo">
                <span>AbibaCars</span>
            </a>
        </div>

        <nav class="navbar">
            <ul>
                <li><a class="nav-button" href="home.php">Home</a></li>
                <li><a class="nav-button" href="catalog.php">Catalog</a></li>
                <li><a class="nav-button" href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Admin Login</h2>
        <div class="form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <!-- <label class="form-label">Username</label> -->
                <input type="text" class="form-input" name="username" placeholder="Username"><br>
                <!-- <label class="form-label">Password</label> -->
                <input type="password" class="form-input" name="password" placeholder="Password"><br>
                <input type="submit" class="form-submit" name="submit" value="Login">
            </form>
            <a href="register-admin.php"><button class="form-submit">Register</button></a>
        </div>
    </div>
</body>

</html>