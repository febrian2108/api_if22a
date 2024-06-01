<?php
include "../connection.php";

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

// isi query update
$sql = "UPDATE dosen SET nama = '$nama', alamat = '$alamat', prodi = '$prodi' WHERE nidn = '$nidn'";

$result = $connect->query($sql);
echo json_encode(
    array(
        "success" => $result
    )
);
?>