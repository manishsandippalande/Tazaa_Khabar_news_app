<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        #navbar{
    position: sticky;
    top: 0;
    background-color: rgb(254, 195, 77);

}
.navbot {
  gap: 3vh;
  display: flex;
  padding: 0.5vh;
  align-items: center;
  justify-content: space-evenly;
  background-color: rgba(0, 0, 0, 0.428);
}
.navbot a {
  color: rgb(0, 0, 0);
  text-decoration: none;
  font-size: 1.1rem;
  font-weight: 400;
}
.navbot a:hover {
  color: rgb(13, 0, 255);
}
.navtop {
  font-size: 2.9rem;
  font-weight: 600;
  padding: 2vh;
  text-align: center;
}




body{
    background-color: black;
}



/* live red */
#live {
  display: flex;
  gap: 6px;
  align-items: center;
}
.red {
  width: 1vh;
  height: 1vh;
  background-color: black;
  border-radius: 360px;
  animation: live 1s alternate-reverse infinite;
}
@keyframes live {
  to {
    background-color: red;
  }
}

        #main {
            width: 100%;
            height: 80vh;
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #profile {
            background-color: aqua;
            display: block;
            margin: auto;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 4vh 10vh;
        }
        .name{
            font-size: 1.6rem;
            font-weight: 600;
        }
        .email{
            font-size: 1.3rem;
            font-weight: 600;
        }
        .num{
            font-size: 1.1rem;
        }
    </style>

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
    <section id="main">
        <div id="profile">
            <div class="email">
                Welcome! <?php echo $_SESSION['username']; ?>
            </div>
            <div class="num">
                <?php

                if (!isset($_SESSION['counter'])) {
                    $_SESSION['counter'] = 1;
                } else {
                    $_SESSION['counter']++;
                }
                echo ("Page Views: " . $_SESSION['counter']);
                ?>
            </div>


        </div>
    </section>
</body>

</html>