<?php 

// Database Connection
$conn = new mysqli(
    "ekg0wcwwkgogw0g40sgw84so", // Hostname
    "mariadb", // Username
    "pjBkA7h0UCvT6Jq7A0kHJbC0CfkKfmCUHcCtOApySSaNAJmPg8dPLeaURf4ccyrE", // Password
    "mairadb_anitummy" // Database Name
);

// Check connection
if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Database connection failed. Please check logs.");
}

// Detect protocol (HTTP or HTTPS) and define website URL correctly
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = $protocol . "://" . $_SERVER['HTTP_HOST'];

// Website details
$websiteTitle = "AniPaca";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "example@gmail.com"; // Replace with actual email

// Version and social media links
$version = "2";
$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_";

// API endpoints
$api = "https://api.anigone.com/api/v2/hianime"; // API source
$zpi = "https://zpi-two.vercel.app/api"; // Zen API
$proxy = "https://m3u8-proxy-cors-dusky.vercel.app/cors?url="; // M3U8 Proxy

// Website banner
$banner = $websiteUrl . "/public/images/banner.png";

// Debugging: Uncomment to check if URL is correct
// echo "Website URL: " . $websiteUrl;
// exit();
?>
