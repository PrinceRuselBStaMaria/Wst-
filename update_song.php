<?php
include 'connection.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['song'];
    $artist = $_POST['artist'];
    
    if(isset($_FILES['coverImage']) && $_FILES['coverImage']['error'] === 0) {
        $file = $_FILES['coverImage'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        
        $uploadDir = 'uploads/';
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $uniqueFileName = uniqid() . '.' . $fileExt;
        $fileDestination = $uploadDir . $uniqueFileName;
        
        if(move_uploaded_file($fileTmpName, $fileDestination)) {
            $sql = "UPDATE Song SET name=?, artist=?, image_path=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $name, $artist, $fileDestination, $id);
        }
    } else {
        $sql = "UPDATE Song SET name=?, artist=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $artist, $id);
    }
    
    if($stmt->execute()) {
        header("Location: index.php");
        exit();
    }
}
?>