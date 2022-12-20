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
<!-- <header>
    <h1>Toko Abi</h1>
</header> -->

<body>
    <header class="logo">
        <a href="home.php">
            <h1>Abi's Autoshop</h1>
        </a>
    </header>

    <nav class="navbar">
        <div class="nav-list">
            <ul>
                <li><a class="nav-button" href="home.php">Home</a></li>
                <li><a class="nav-button" href="catalog.php">Catalog</a></li>
                <li><a class="nav-button" href="about.php">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="product-container">
        <?php
        foreach ($productData as $data) {
        ?>
        <div class="product-card">
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
</body>

</html>