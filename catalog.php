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
        <a href="home.php"><h1>Abi's Autoshop</h1></a>
    </header>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a class="active" href="catalog.php">Catalog</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>

    <div class="product-container">
        <!-- <table border="1">
        <tr>
            <td rowspan="2">makan bang</td>
            <td>makan babi</td>
        </tr>
        <tr>
            <td>tidur</td>
        </tr>
        </table> -->

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/porsche-911.webp" alt="porsche-911">
                </div>
                <div class="product-info">
                    <div class="product-brand">Porsche 911</div>
                    <div class="product-year">2022</div>
                    <div class="product-kilometer">NEW</div>
                    <div class="product-short-desc">Porsche 911 2022 model with the latest V12 eng...</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/the-new-range-rover.webp" alt="the-new-range-rover">
                </div>
                <div class="product-info">
                    <div class="product-brand">The New Range Rover</div>
                    <div class="product-year">2022</div>
                    <div class="product-kilometer">NEW</div>
                    <div class="product-short-desc">The New Range Rover 2022 Model with expandable ro...</div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/avanza.webp" alt="avanza">
                </div>
                <div class="product-info">
                    <div class="product-brand">Toyota Avanza</div>
                    <div class="product-year">2016</div>
                    <div class="product-kilometer">20.000</div>
                    <div class="product-short-desc">Avanza G 2016 Manual warna hitam KM ±20.000</div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>