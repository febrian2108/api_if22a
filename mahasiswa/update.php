<?php
include "../connection.php";

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// isi query update
$sql = "UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat' WHERE npm = '$npm'";

$result = $connect->query($sql);
echo json_encode(
    array(
        "success" => $result
    )
);
?>