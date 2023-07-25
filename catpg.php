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
    <link rel="stylesheet" href="catpg.css">
    <title>category page</title>
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

    <!-- category bar -->
    <section id="catbar">
        <select id="category-opt" onchange="trigger()">
            <option value="business">Business</option>
            <option value="entertainment">Entertainment</option>
            <option value="general">General</option>
            <option value="health">Health</option>
            <option value="science">Science</option>
            <option value="sports">Sports</option>
            <option value="technology">Technology</option>
        </select>
    </section>

    <!-- content -->

    <section id="newscontainer">
        
    </section>

<script src="catpg.js"></script>
</body>
</html>