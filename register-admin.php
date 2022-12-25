<?php

require('function.php');

if (isset($_POST['submit'])) {
    register($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Admin Register</title>
</head>
<!-- <header>
    <h1>Toko Abi</h1>
</header> -->

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

    <div class="register-content">
        <h2>Admin Register</h2>
        <div class="register-form-container">
            <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
                <input type="text" class="form-input" name="username" required placeholder="Username">
                <input type="text" class="form-input" name="name" required placeholder="Admin Name">
                <input type="password" class="form-input" name="password" required placeholder="Password">
                <input type="password" class="form-input" name="password-confirm" required placeholder="Re-enter Password">
                <input type="submit" class="form-submit" name="submit" value="Register">
            </form>
        </div>
    </div>
</body>

</html>