<?php
    include "../connection.php";

    $nidn = $_POST['nidn'];

    // isi query delete
    $sql = "delete from dosen where nidn = '$nidn'";
    $result = $connect->query($sql);

    echo json_encode(array(
        "success" => $result
    ));
    
?>