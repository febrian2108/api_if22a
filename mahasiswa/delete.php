<?php
    include "../connection.php";

    $npm = $_POST['npm'];

    // isi query delete
    $sql = "delete from mahasiswa where npm = '$npm'";
    $result = $connect->query($sql);

    echo json_encode(array(
        "success" => $result
    ));
    
?>