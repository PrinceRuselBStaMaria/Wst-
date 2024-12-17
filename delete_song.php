<?php
include("connection.php");

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM Song WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        
        $response = array();
        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['success'] = false;
        }
        
        echo json_encode($response);
    }

    $stmt->close();
    $conn->close();

?>