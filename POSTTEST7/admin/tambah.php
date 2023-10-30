<?php
require "../server.php";

if ( isset($_POST["tambah"]) ){
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.',$gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if ( move_uploaded_file($tmp,'img/' . $gambar_baru) ){

        $result = mysqli_query($conn, "insert into produk values ('', '$gambar_baru', '$nama', '$harga')");
    
        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkan!');
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
    <div class="tambah">


        <form action="" method="post" enctype="multipart/form-data">
        <table>
        
        <tr>
            <td><label for="">nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>    
        <tr>   
            <td><label for="">harga</label></td>
            <td>:</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>    
            <td><label for="">gambar</label></td>
            <td>:</td>
            <td><input type="file" name="gambar" required></td>
        </tr>  
        <button type="submit" name="tambah" >Tambah</button>
            
        </form>
    </div>
    </body>
    </html>