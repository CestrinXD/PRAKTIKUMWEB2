<?php

require "../server.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "delete from produk where id = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'admin.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'admin.php';
</script>
";

}
?>