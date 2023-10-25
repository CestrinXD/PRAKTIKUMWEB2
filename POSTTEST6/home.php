<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Tommy Candra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <p id="current-time">
                    Hari ini <?php date_default_timezone_set("Asia/Makassar"); echo date("h:i:sa, l, d M Y");?>
                </p>
                <li><a href="link ig"><i class="fa-brands fa-instagram"></i></i></a></li>
                <li><a href="link wa"><i class="fa-brands fa-whatsapp"></i></i></a></li>
                <li><a href=""><i class="bi bi-brightness-high-fill" id="toggledark"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">CESTRIN PHONE SHOP</a></h1>
            <ul>
                <li class="active"><a href="index.html">HOME</a></li>
                <li><a href="handphone.html">PRODUCT</a></li>
                <li><a href="kontak.html">CONTACT</a></li>
                <li><a href="profil.php">
                    <i class="bi bi-person-circle"></i> 
                    <!-- <p><?php echo $_SESSION['username']?></p> -->
                </a>
                
 
                
                </li>
            </ul>
        </div>
    </header>






    <section class="banner">
        <h2>WELCOME TO MY SHOP</h2>
    </section>

    <section class="about shop">
		<div class="container">
			<h3>ABOUT MY SHOP</h3>
            <br/>
            <br/>
			<p> <br><strong>Website resmi Online Store CESTRIN PHONE SHOP</strong>
                <strong>✉️Email : Cestrinxd@gmail.com</strong><br/>
                <br>CESTRIN PHONE SHOP adalah Outlet modern penyedia produk telekomunikasi bergaransi resmi dengan beragam koleksi handphone SAMSUNG, OPPO, VIVO, REALME, XIAOMI,
                 IPHONE tersedia di CESTRIN PHONE SHOP.Outlet resmi tersebar di seluruh indonesia.</p>
		</div>
	</section>


    <!--service-->
    <section class="service">
        <div class="container">
            <h3>SERVICE</h3>
        <div class="box">
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-mobile"></i></div>
                <h4>MOBILE APP</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-brands fa-dev"></i></i></div>
                <h4>WEB DEV</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-regular fa-edit"></i></i></div>
                <h4>DESIGN</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fa-solid fa-info"></i></i></div>
                <h4>HELP</h4>
            </div>
        </div>
        </div>
    </section>
    <footer>
		<div class="container">
			<small> Copyright &copy; 2021 - CestrinShop, All Rights Reserved.</small>
		</div>
	</footer>
    <script src="javascript.js" defer></script>
</body>
</html>