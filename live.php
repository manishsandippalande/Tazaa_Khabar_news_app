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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
    </nav>
    <section id="news-container">

        <section id="left">
            <div class="heading1"><span>WELCOME</span> <Span>TO</Span> <span>NEWS 26 INDIA</span></div>
        </section>
        <section id="right">
            <h5 class="h5">News Section</h5>
            <!-- <div id="news">
                <h4 id="headline"></h4>
                <div id="source"></div>
                <button id="url">Read More</button>
            </div> -->
        </section>

    </section>
    <script src="code.js"></script>
</body>
</html>