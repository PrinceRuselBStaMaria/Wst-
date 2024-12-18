<!DOCTYPE html>
<?php
    include 'connection.php';
    $result = $conn->query("SELECT * FROM Song");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="stlye.css">
    <title>Song</title>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="img/bg.mp4" type="video/mp4">
    </video>
    <div class="overlay">
        <div class="container">
            <div class="leftside">
                <img class="puso top" src="img/lilacheart.png" alt="design">
                <div class="leftcont">
                    <div class="leftimg">
                        <img src="img/cover.jpg" alt="cover">
                    </div>
                    <div class="lefttext">
                        <h1>Title</h1>
                        <p>artist</p>
                    </div>
                </div>
                <img class="puso bottom" src="img/lilacheart copy.png" alt="design">
            </div>
            <div class="rightside">
                <div class="title">
                    <h1>Top<br>Songs</h1>
                </div>
                <div class="listofsong">
                    <table>
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>
                                        <div class='songImg'>
                                            <img src='" . 
                                            (!empty($row['image_path']) ? $row['image_path'] : 'img/cover.jpg') . 
                                            "' alt='Album Cover'>
                                        </div>
                                    </td>";
                                echo "<td>
                                        <div class='song-info'>
                                            <div class='SongName'>{$row['name']}</div>
                                            <div class='Artist'>{$row['artist']}</div>
                                        </div>
                                     </td>";
                                echo "<td>
                                        <div class='tableButton'>
                                            <button class='tbbutn' id='deleteButn' data-id='{$row['id']}'>
                                                <img src='img/delete-bin-2-fill.svg' alt='Delete'>
                                            </button>
                                            <button class='tbbutn' id='editButn' data-id='{$row['id']}'>
                                                <img src='img/edit-2-fill.svg' alt='Edit'>
                                            </button>
                                            <button class='tbbutn' id='zoomButn' 
                                                data-image='{$row['image_path']}' 
                                                data-title='{$row['name']}' 
                                                data-artist='{$row['artist']}'>
                                                <img src='img/zoom.svg' alt='expand'>
                                            </button>
                                        </div>
                                      </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
                
                
            <button class="starbut" onclick="window.location.href='form.php'">
                Add Song
                <div class="star-1">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-2">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-3">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-4">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-5">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-6">
                    <svg
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 784.11 815.53"
                    style="
                        shape-rendering: geometricPrecision;
                        text-rendering: geometricPrecision;
                        image-rendering: optimizeQuality;
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    "
                    version="1.1"
                    xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        class="fil0"
                        ></path>
                    </g>
                    </svg>
                </div>
                </button>


            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>