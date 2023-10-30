<?php
session_start();
require 'server.php';
$name = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM account WHERE username='$name'");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="profil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<section>
        <a href="home.php"><i class="bi bi-arrow-left-circle-fill"></i></a>
        <?php while($row = mysqli_fetch_assoc($result)):?>
        <div class="top">
            <h3>Personal Data</h3>
        </div>
            <div class="isi">
                <p>username</p>
                <div><?php echo $row['username']; ?></div>
           
            </div>
            <div class="isi">
                <p>Email</p>
                <div><?php echo $row['email']; ?></div>
           
            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div><?php echo $row['number']; ?></div>
           
            </div>
            <div class="isi">
                <p>Password</p>
                <div><?php echo $row['password']; ?></div>
            
            </div>
        <?php endwhile ?>
    </section>
</body>
</html>

