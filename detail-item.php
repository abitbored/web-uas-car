<?php
include('function.php');

$id = $_GET['id'];

$productData = fetch("select * from product where id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
    <title><?php echo $productData['brand']; ?></title>
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

    <div class="detail-container">
        <div class="detail-image">
            <img src="img/<?php echo $productData['imgName']; ?>" alt="<?php echo $productData['brand']; ?>">
        </div>
        <div class="details">
            <div class="detail-title">
                <h2><?php echo $productData['brand']; ?></h2>
            </div>
            <div class="detail-info">
                <span>
                    Uploaded at:
                </span>
                <span class="main">
                    <?php echo $productData['dateUploaded']; ?>
                </span>
                <br>
                <span>
                    Year:
                </span>
                <span class="main">
                    <?php echo $productData['year']; ?>
                </span>
                <br>
                <span>
                    Kilometer:
                </span>
                <span class="main">
                    <?php echo $productData['kilometer']; ?>
                </span>
            </div>
            <div class="detail-description">
                <pre><?php echo $productData['description']; ?></pre>
            </div>
        </div>
    </div>

    <div class="contact-container">
        <h3>Whatsapp below for further information, pricing, or buying:</h3>
        <div class="contact-image">
            <a href="https://wa.me/+6281276378827">
                <img src="img/wa.png" alt="whatsapp">
            </a>
        </div>
    </div>
</body>

</html>