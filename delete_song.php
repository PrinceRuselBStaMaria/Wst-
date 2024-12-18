<?php
include("connection.php");

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $selectSql = 'SELECT image_path FROM Song WHERE id = ?';
        $stmt = $conn->prepare($selectSql);
        $stmt->bind_param("i", $id);   
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $image_path = $row["image_path"];
        
        $deleteSql = "DELETE FROM Song WHERE id = ?";
        $stmt = $conn->prepare($deleteSql);
        $stmt->bind_param("i", $id);
        
        $response = array();
        if ($stmt->execute()) {
            if (file_exists($image_path)) {
                unlink($image_path);
            }else{
                echo "Delete failed";
                $response['success'] = false;
            }
            $response['success'] = true;
        } else {
            $response['success'] = false;
        }
        
        echo json_encode($response);
        $stmt->close();
    }
    $conn->close();

?>