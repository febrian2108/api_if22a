<?php
    include "../connection.php";

    $sql = "SELECT * FROM dosen";

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $dosen = array();
        while ($row = $result->fetch_assoc()) {
            $dosen[] = $row;
        }

        echo json_encode(array(
            "success" => true,
            "dosen"=> $dosen,
        ));
    } else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>