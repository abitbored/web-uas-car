<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Home</title>
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
                <li><a id="current" class="nav-button" href="home.php">Home</a></li>
                <li><a class="nav-button" href="catalog.php">Catalog</a></li>
                <li><a class="nav-button" href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="home">
        <h2>Buy your dream cars now!</h2>
        <button onclick="document.location='catalog.php'" class="button-home">Catalog</button>
    </div>

    <footer>
        <div class="footer">
            <a href="login-admin.php">Admin Login</a>
        </div>
    </footer>
</body>

</html>