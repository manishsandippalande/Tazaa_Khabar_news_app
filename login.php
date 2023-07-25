<?php

$host = "localhost";
$username = "root";
$password = "manish123";
$db = "Tazaa_Khabar";


$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["username"];
    $upass = $_POST["password"];
    // Prepare and execute a query to get the user's hashed password from the database
    $sql = "SELECT email, pass FROM tazaa_khabar WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uemail);
    $stmt->execute();
    $stmt->bind_result($uemail, $stored_pass);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if (password_verify($upass, $stored_pass)) {
        // Password is correct, set session variables and redirect to dashboard/homepage
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uemail;
        header("Location: index.php");
        $error = "chal naa bhau";

    } else {
        // Password is incorrect, show an error message
        $error = "Invalid username or password.";
    }
}

?>

<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="login.css">
     <title>Document</title>
     <style>
        #btns{
            border-radius: 20px;
            background-color: gray;
            width: min-content;
            display: flex;
            padding: 4px 8px;
            /* position: absolute; */
            margin: 2px 5px;
        }
        #reg-btn{
            border-radius: 20px;
            background-color: wheat;
            width: 100%;
            padding: 4px 8px;
            font-size: 1.3rem;
            outline: none;
            border: none;
            text-align: center;
            background-color: yellow;
        } 
     </style>
 </head>

 <body>
    <section id="btns">
        <a href="register.php">
        <button id="reg-btn">
            REGISTER
        </button>
        </a>
    </section>
     <section id="loginpg-container">
        <div id="warning"><?php echo ($error); ?></div>
         <div class="loginpg">
             <div id="title">LOGIN</div>
             <div id="loginform">
                 <form method="POST" id="login" enctype="multipart/form-data">
                     <div class="inp-email">
                         <input type="email" placeholder="Enter Your Email" name="username" id="inp-email" required>
                     </div>
                     <div class="inp-pass">
                         <input type="password"  placeholder="Password" name="password" id="inp-pass" required>
                     </div>
                     <div class="inp-btn">
                         <button type="submit" id="inp-btn">LOGIN</button>
                     </div>
                 </form>
             </div>
         </div>
     </section>
 </body>

 </html>