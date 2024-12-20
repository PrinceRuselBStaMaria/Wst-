<!-- Form.php -->
 
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
    <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="centered">
        <div>
        <p>New Song Entry</p>
        </div>
        <input type="text" name="song" placeholder="Insert Song" required>
        <input type="text" name="artist" placeholder="Insert Artist" required>
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
        <button type="submit" class="btn">Submit</button>
        </div>
        </div>
    </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>