

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESH-KHI | Fashion</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Seaweed+Script&display=swap" rel="stylesheet">
</head>
<body class="categoies">
      <!-- Header -->
            <?php
        // Include the data file
        include 'data.php';
        include 'comp.php';
        renderHeader();
        ?>
    <main>

            
<h6 class="new-title">Product Higlight</h6>
<conteiner class="slideerimg">
    <div class="custom-cont2">
        <div class="custom-image2">
            <?php foreach ($sliderImages as $image): ?>
                <img src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>">
            <?php endforeach; ?>
        </div>
    </div>
</conteiner>

<h6 class="new-title">New collection</h6>

<div class="product2-list">
            <?php foreach ($product3 as $product3): ?>
                <div class="product2" data-price="<?= $product3['price'] ?>">
                    <div class="img2">
                        <img src="<?= $product3['image'] ?>" alt="<?= $product3['name2'] ?>">
                    </div>
                    <div class="info2">
                        <h4><?= $product3['name2'] ?></h4>
                        <p>$<?= number_format($product3['price'], 2) ?></p>
                        </div>
                <button class="button-56" role="button" onclick="redirectToPayment()">Shop Now</button>
            </div>
            <?php endforeach; ?>
        </div>

</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
