
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

    <div class="grid-wrapper">
     
      <aside>
        <h1>About Us - ESHKHI</h1>
        <h3>monochromatic</h3>
        <p style="color: #914545D8;">
        Welcome to ESHKHI – where style meets sophistication. Discover our curated collection of timeless pieces and latest trends designed to elevate your wardrobe. Explore and embrace fashion that celebrates your unique self.
        </p>
        <p href="#" class="button">Learn More</p>
      </aside>
      <div class="background"></div>
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
