<?php
require "../server.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "select * from produk where id = '$id'");

$produk = [];

while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row;
}

$produk = $produk[0];


if ( isset($_POST["tambah"]) ){
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.',$gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if ( move_uploaded_file($tmp,'img/' . $gambar_baru) ){

        $result = mysqli_query($conn, "update produk set gambar = '$gambar_baru' ,nama ='$nama' , harga = '$harga' where id = '$id' " );
    
        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Diupdate!');
                    document.location.href = 'admin.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                alert('Data Gagal Diupdate!');
                document.location.href = 'tambah.php';
                </script>
            ";
        }

    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Document</title>

</head>
<body>

    <div class="updatestyle">
<form action="" method="post" enctype="multipart/form-data">
    
    <table>
        <tr>
            <td><label for="">nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" value= "<?=$produk["nama"]?>"> <br></td>

        </tr>
        <tr>


        <td><label for="">harga</label></td>
        <td>:</td>
        <td><input type="text" name="harga" value="<?=$produk["harga"]?>"> <br></td>
        </tr>

        <tr>

        <td><label for="">gambar</label></td>
        <td>:</td>
        <td><input type="file" name="gambar"> <br></td>
        </tr>
        
        <?= $produk["gambar"] ?>
        <br>

    </table>
        <button type="submit" name="tambah" >Update</button>



    </form>
    </div>
</body>
</html>