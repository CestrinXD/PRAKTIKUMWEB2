<?php
session_start();

require "server.php";





if( isset($_POST['submit']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $result = mysqli_query($conn, "select * from account where username = '$username' and password = '$password'");

        if($row = mysqli_fetch_assoc($result)){
            if ($username == 'admin' && $password == '123') {
                echo "
                <script> 
        
                    window.location.href = './admin/admin.php';
                </script>
                ";
            }
    
            else if ($username == $row['username'] && $password == $row['password']) {
                
                echo "
                <script> 
        
                    window.location.href = './home.php';
                </script>
                ";
                exit();
            }
    
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

            Password
            </label><input type="password" placeholder="Password" name="password" required >
            
            <label for="">

            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
</body>
</html>

