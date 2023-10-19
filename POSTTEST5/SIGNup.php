<?php
session_start();

require "server.php";



    if( isset($_POST['submit']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO account VALUES ('','$username', '$email', '$number', '$password', 'user')";

        $result = mysqli_query($conn, $sql );
        if( $result ){
            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }else{
            echo "<script>alert('Data Gagal Ditambahkan');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
    <style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type=number] {
  -moz-appearance: textfield;
}   
    </style>
</head>
<body>
    <section class="border">
        <h1>LOGIN</h1>
        <form action="" method="post" >
            <label for="">
            Username
            </label>
            <input type="text" placeholder="Username" name="username" required>
            <label for="">
            Email
            </label>
            <input type="email" placeholder="Email" name="email" required>

            <label for="">
            Phone Number
            </label><input type="number" placeholder="Phone Number" name="number" required>

            <label for="">
            Password
            </label><input type="password" placeholder="Password" name="password" required >
            
            <label for="">
            Confirm Pass
            </label>
            <input type="password" placeholder="Confirm Password" name="Cpassword" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
</body>
</html>

