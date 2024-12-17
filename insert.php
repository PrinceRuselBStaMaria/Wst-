<?php
include 'connection.php';

$name = $_POST['song'];
$artist = $_POST['artist'];

// File upload handling
if(isset($_FILES['coverImage'])) {
    $file = $_FILES['coverImage'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $uniqueFileName = uniqid() . '.' . $fileExt;
    $fileDestination = $uploadDir . $uniqueFileName;
    
    if($fileError === 0) {
        if(move_uploaded_file($fileTmpName, $fileDestination)) {
            if (isset($name) && isset($artist)){
                $sql = "INSERT INTO Song (name, artist, image_path) 
                        VALUES ('$name', '$artist', '$fileDestination')";
                                if ($conn->query($sql) === TRUE) {
                                    $uploadSuccess = true;
                                } else {
                                    $errorMessage = "Error: " . $conn->error;
                                }

            }
            
        }
        else {
            $errorMessage = "Error uploading file";
        } 
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stlye.css">
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
<div class="overlay">
    <button class="exitbut" href="index.php" onclick="window.location.href='index.php'">
        <img src="img/close.svg" alt="exit">
    </button>
    <div class="container">
        <div class="messconf">
            <div class="confirmation">
                <h1>
                <?php if($uploadSuccess): ?>
                            Song Successfully Added
                            <script>
                                setTimeout(function() {
                                    window.location.href = 'index.php';
                                }, 3000);
                            </script>
                        <?php else: ?>
                            <?php echo $errorMessage; ?>
                        <?php endif; ?>
                </h1>
            </div>
            <div class="confname" >
                <h1><?php echo htmlspecialchars($name); ?></h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>