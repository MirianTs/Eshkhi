
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESH-KHI | Fashion</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="shop">
    <!-- Header -->
    <?php
// Include the data file
include 'data.php';
include 'comp.php';
renderHeader();
?>
<main>




<conteiner class="slideerimg">
    <div class="custom-cont2">
        <div class="custom-image2">
            <?php foreach ($sliderImages as $image): ?>
                <img src="<?= $image['src']; ?>" alt="<?= $image['alt']; ?>">
            <?php endforeach; ?>
        </div>
    </div>
</conteiner>




<div class="product2-list">
        <?php foreach ($product2 as $product): ?>
            <div class="product2" data-price="<?= $product['price'] ?>">
                <div class="img2">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name2'] ?>">
                </div>
                <div class="info2">
                    <h4><?= $product['name2'] ?></h4>
                    <p>Size: <?= $product['size'] ?></p>
                    <p>$<?= number_format($product['price'], 2) ?></p>
                </div>
                <button class="button-56" role="button" onclick="redirectToPayment()">Shop Now</button>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- Footer -->
    <?php
        // Social media links
        $social_links = [
            "facebook" => "https://www.facebook.com/profile.php?id=61553879967388",
            "tiktok" => "https://www.tiktok.com/@sesilibrolashvili/video/7427901969458613505?is_from_webapp=1&sender_device=pc",
            "instagram" => "https://www.instagram.com/eshkhi_georgian_brand?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
        ];
        // Render footer
        setFooter($social_links);
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>