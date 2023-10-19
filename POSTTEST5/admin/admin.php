<?php
require "../server.php";


$result = mysqli_query($conn, "select * from produk");

$produk = [];

while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <button class = "keluar" onclick="keluar()"><i class="fa-solid fa-right-from-bracket"></i></button>
    <div class="adminstyle" >
        <button class = "sty" onclick ="tambah();" >Tambah<i class="fa-solid fa-square-plus"></i></button>
    <table>
        <tr>
            <th>id</th>
            <th>gambar</th>
            <th>nama</th>
            <th>harga</th>
        </tr>
        <?php foreach($produk as $prd) : ?>
        <tr>
            <td> <?= $prd["id"] ?> </td>
            <td> <img src="img/<?= $prd["gambar"] ?>" alt="" width = "50px"> </td>
            <td> <?= $prd["nama"] ?> </td>
            <td> <?= $prd["harga"] ?> </td>
            <td><a href="update.php?id=<?=$prd["id"]; ?>"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="hapus.php?id=<?=$prd["id"]; ?>"><i class="fa-solid fa-trash" style="color: #f00000;"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <script>
        function tambah(){
            document.location.href = "tambah.php";

        }
        function keluar(){
            document.location.href = "../index.php";
        }
    </script>
</body>
</html>