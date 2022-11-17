<?php
$dir    = './videos';
$video_files = [];

foreach(glob($dir.'/*.*') as $file) {
    $file_parts = pathinfo($file);
    if ($file_parts['extension'] == "mp4"){
        $video_files[] = $file;
    }
}

foreach($video_files as $video_file) {
    echo "<video autoplay>";
    echo "<source src=". $video_file ." type='video/mp4'>";
    echo "</video><br/>";
}

?>