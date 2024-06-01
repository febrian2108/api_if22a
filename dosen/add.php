<?php
include "../connection.php";

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

// isi query untuk cek data dosen by nidn

$sql1 = "SELECT * FROM dosen WHERE nidn = '$nidn'";

$check = $connect->query($sql1);
$reason = "";
$success = true;

if ($check->num_rows > 0) {
    $success = false;
    $reason = "nidn sudah ada";
} else {
    //query untuk insert data
    $sql2 = "INSERT INTO dosen VALUES ('$nidn', '$nama','$alamat', '$prodi')";

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
