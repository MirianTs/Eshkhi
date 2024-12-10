

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESH-KHI | Fashion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.scss">
</head>
<body class="homebody">
    <!-- Header -->
    
   <?php
include 'comp.php';
renderHeader();
include 'comp.php';
?>
   
    <main>
        <conteiner class="hi">
        <h7 class="new">New Fashion</h7>
</conteiner>
        <section class="hero">
            <div class="hero-content">
                <p style="color: #914545D8;">Welcome to ESHKHI – where style meets sophistication. Discover our curated collection of timeless pieces and latest trends designed to elevate your wardrobe. From chic essentials to bold statements, we offer something for every style. Explore and embrace fashion that celebrates your unique self.</p>
                <button class="button-56" role="button" onclick="window.location.href='shop.php';">Shop Now</button>
            </div>
        </section>

        
    </main>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

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
