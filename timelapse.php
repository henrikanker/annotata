<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stiler/style.css">
    <style> /* bakgrunnsbilde */
        body{
            background-image: url('Bilder/bakgrunn.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
	.grid-container { /* Gir hver sin grid for sortering i nettsiden  */
	    display: grid;
	    grid-template-columns: auto auto auto auto;
	    padding: 40px;
	    gap: 10px
	}
	.grid-item { 
	    width: 100%
	}
	.nav{ /* Navigeringsbaren */ 
	    display: grid;
	    grid-template-columns: auto auto;
	    gap: 10px;
	    justify-content: center;
        }
    </style>   
    <title>Annotata</title>
</head>
<body>
    <div class="main-head">Annotata!</div>
        <nav class="nav">
	    <button class="nav-item" role="button"><a href="app.html">Forside</a></button>
            <button class="nav-item" role="button"><a class="aktiv" href="timelapse.html">Timelapse</a>
        </nav>
<div class="grid-container">
<?php // Lager en liste med alle filene i timelapse mappen og legger de inn etter hverandre i nettsiden 
$dir    = './timelapse';
$video_files = [];

foreach(glob($dir.'/*.*') as $file) {
    $file_parts = pathinfo($file);
    if ($file_parts['extension'] == "mp4"){
        $video_files[] = $file;
    }
}

foreach($video_files as $video_file) {
    echo "<video controls class='grid-item'>";
    echo "<source src=". $video_file ." type='video/mp4'>";
    echo "</video>";
}

?>
</div>
</body>
</html>