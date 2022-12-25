<?php
include('function.php');

$productData = fetchProductData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <title>Product Catalog</title>
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
                <li><a id="current" class="nav-button" href="catalog.php">Catalog</a></li>
                <li><a class="nav-button" href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <?php
    if (is_array($productData)) {
    ?>
        <div class="product-container">
            <?php
            foreach ($productData as $data) {
            ?>
                <div class="product-card" onclick="location.href='detail-item.php?id=<?php echo $data['id']; ?>';">
                    <div class="product-image">
                        <img src="img/<?php echo $data['imgName']; ?>" alt="<?php echo $data['brand']; ?>">
                    </div>
                    <div class="product-info">
                        <div class="product-brand"><?php echo $data['brand']; ?></div>
                        <div class="product-year"><?php echo $data['year']; ?></div>
                        <div class="product-kilometer"><?php echo $data['kilometer']; ?></div>
                        <div class="product-short-desc"><?php echo shortenDesc($data['description']); ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="message-box">
            <span>
                Sorry, currently we have no car to sell.
            </span>
        </div>
    <?php } ?>
</body>

</html>