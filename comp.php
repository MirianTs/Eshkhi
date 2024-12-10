<?php

// Header function
if (!function_exists('renderHeader')) {
    function renderHeader() {
        echo '
        <header>
            <nav>
                <ul>
                    <li><img src="image/shearch.png" alt="Search Icon"></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><img src="image/ESHKHI.png" alt="ESH-KHI Logo"></li>
                    <li><a href="categories.php">Categories</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><img src="image/shopping-bag (1) 1.png" alt="Shopping Bag"></li>
                </ul>
            </nav>
        </header>
        ';
    }
}

// Footer function
if (!function_exists('setFooter')) {
    function setFooter($social_links) {
        echo '<footer>';
            echo '<div class="footer-container">';
                echo '<p>&copy; 2024 ESHKHI Fashion</p>';
                echo '<div class="rounded-social-buttons">';
                    foreach ($social_links as $platform => $url) {
                        echo '<a class="social-button ' . $platform . '" href="' . $url . '" target="_blank">';
                        echo '<i class="fab fa-' . $platform . '"></i>';
                        echo '</a>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</footer>';
    }
}
?>

