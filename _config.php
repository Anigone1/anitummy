<?php 

$conn = new mysqli("ekg0wcwwkgogw0g40sgw84so", "mariadb", "pjBkA7h0UCvT6Jq7A0kHJbC0CfkKfmCUHcCtOApySSaNAJmPg8dPLeaURf4ccyrE", "mairadb_anitummy");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    
}

$websiteTitle = "AniPaca";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "2";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_";

// all the api you need

$api = "https://api.anigone.com/api/v2/hianime"; //https://github.com/ghoshRitesh12/aniwatch-api
$zpi = "https://zpi-two.vercel.app/api"; //https://github.com/PacaHat/zen-api
$proxy = "https://m3u8-proxy-cors-dusky.vercel.app/cors?url="; //https://github.com/shashstormer/m3u8_proxy-cors


$banner = $websiteUrl . "/public/images/banner.png";

