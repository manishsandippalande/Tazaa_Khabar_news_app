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
    <link rel="stylesheet" href="index.css">
    <title>CricAttack</title>
</head>

<body>
    <nav id="navbar">
        <div class="navtop">NEWS 26 INDIA</div>
        <div class="navbot">
            <a href="index.php" id="home">Home</a>
            <a href="live.php" id="live"><div class="red"></div>Live</a>
            <a id="searchbtn" href="searchpg.php">Search</a>
            <a href="dashboard.php" id="home">Dashboard</a>
            <a id="logout-btn" href="logout.php">Logout</ph>
            <a href="catpg.php" id="home">News By Topic</a>
            <a href="#home" id="home">News Papers PDF</a>
        </div>
    </nav>
    
    <section id="home">
        <section id="news-container">

        
            
                <!-- <div id="news">
                    <h4 id="headline"></h4>
                    <div id="source"></div>
                    <button id="url">Read More</button>
                </div> -->
            
    
        </section>
    </section>

    
    <script src="index.js"></script>
</body>

</html>