<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="searchpg.css">
    <link rel="shortcut icon" href="#">
    <style>
        
    </style>
    <title>News 26 India</title>
</head>

<body>
    <nav id="navbar">
        <div class="navtop">
            NEWS 26 INDIA
        </div>
        <div class="navbot">
            <a href="index.php" id="home">Home</a>
            <a href="live.php" id="live">
                <div class="red"></div>
                Live
            </a>
            <a id="s-page" href="searchpg.php">Search</a>
            <a href="dashboard.php" id="dashbt">Dashboard</a>
            <a href="logout.php" id="logbt">Logout</a>
            <a href="catpg.php" id="categorybt">News By Topic</a>
            <a href="#download" id="pdf">News Papers PDF</a>
        </div>
        <div class="search-container">
            <input type="search" id="search">
            <button  id="searchbtn">
                Search
            </button>
        </div>
    </nav>

    <!-- search content -->
    <section id="search-content">
        <!-- <div id="search-container">

            <div class="s-poster">
                <img src="poster1.png" alt="" id="s-poster">
            </div>
            <div class="s-right">
                <div id="s-headline">
                    A man has drowned in dranage line and after 6 months he became superhero
                </div>
                <div id="s-source">
                    YouTube
                </div>
                <div id="s-description">
                    A man has drowned in dranage line and after 6 months he became superhero A man has drowned in dranage line and after 6 months he became superhero A man has drowned in dranage line and after 6 months he became superhero
                </div>
                <div class="s-url">
                    <button id="s-url">View More</button>
                </div>
            </div>
            
        </div> -->
    </section>
    <script src="search.js"></script>
</body>

</html>