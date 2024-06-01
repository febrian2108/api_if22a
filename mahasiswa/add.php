<?php
include "../connection.php";

$npm        = $_POST['npm'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];

// isi query untuk cek data mahasiswa by npm

$sql1 = "SELECT * FROM mahasiswa WHERE npm = '$npm'";

$check = $connect->query($sql1);
$reason = "";
$success = true;

if ($check->num_rows > 0) {
    $success = false;
    $reason = "npm sudah ada";
} else {
    //query untuk insert data
    $sql2 = "INSERT INTO mahasiswa VALUES ('$npm', '$nama','$alamat')";

    $result = $connect->query($sql2);

    if (!$result) {
        $success = false;
        $reason = "Gagal add Mahasiswa";
    }
}

echo json_encode(
    array(
        "success" => $success,
        "reason" => $reason
    )
);
