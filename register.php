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
    $cpass = $_POST["cpassword"];
    $sql = "SELECT * FROM tazaa_khabar WHERE email = '$uemail'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);


    if ($upass == $cpass && $num == 0) {
        $hashpass = password_hash($cpass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `tazaa_khabar` (`email`, `pass`) VALUES ('$uemail', '$hashpass')";
        header("Location: login.php");
        if ($conn->query($sql) !== TRUE) {
            die("Error: " . $conn->error);
        }
    } else {
        $error = "You had already registered with same username";
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
        #login-btn{
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
    <a href="login.php">
        <button id="login-btn">
            LOGIN
        </button>
    </a>
    </section>
    <section id="loginpg-container">
        <div id="warning"><?php echo $error ?></div>
        <div class="loginpg">
            <div id="title">SIGN UP</div>
            <div id="loginform">
                <form method="POST" id="login" enctype="multipart/form-data">
                
                    <div class="inp-email">
                        <input type="email" placeholder="Enter Your Email" name="username" id="inp-email" required>
                    </div>
                    <div class="inp-pass">
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" name="password" id="inp-pass" required>
                    </div>
                    <div class="inp-pass">
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" name="cpassword" id="inp-cpass" required>
                    </div>
                    <div id="red"></div>
                    <div class="inp-btn">
                        <button type="submit" id="inp-btn">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>