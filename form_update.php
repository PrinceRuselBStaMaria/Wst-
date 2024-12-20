<?php
include 'connection.php';

if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM Song WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $song = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlye.css">
    <title>Insert Song</title>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
<div class="overlay" >
<button class="exitbut" href="index.php" onclick="window.location.href='index.php'">
    <img src="img/close.svg" alt="exit">
</button>
    <div class="container">
    <form action="update_song.php" method="POST" enctype="multipart/form-data">
        <div class="centered">
        <div>
        <p>Edit Song Entry</p>
        </div>
        <input type="hidden" name="id" value="<?php echo $song['id']; ?>">
        <input type="text" name="song" value="<?php echo $song['name']; ?>" required>
        <input type="text" name="artist" value="<?php echo $song['artist']; ?>" required>
        <div class="containerForupload">
        <div class="folder">
            <div class="front-side">
            <div class="tip"></div>
            <div class="cover"></div>
            </div>
            <div class="back-side cover"></div>
        </div>
        <label class="custom-file-upload">
        <input type="file" name="coverImage" id="coverImage" accept="image/*">
            Upload image
        </label>
        <div id="fileName"></div>
        </div>  
        <div>
        <button type="submit" class="btn">Update</button>
        </div>
        </div>
    </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>