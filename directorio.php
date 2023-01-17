<?php

$nameDirectory = $_REQUEST["crear-carpeta"];
$root = './root/'. $nameDirectory;
$documents = './root/documents/'. $nameDirectory;
$images = './root/images/new';
$audio = './root/audio/new';
$video = './root/video/new';
$trash = './root/trash/new';


if (!file_exists($root)){
    mkdir($root, 0777, true);
    header("location: index.php");
}


if (!file_exists($root)) {
    die("The file $root does not exist.");
}

$f = @fopen($root, 'a+');
if ($f) {
    
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}


?>