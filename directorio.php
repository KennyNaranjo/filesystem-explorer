<?php

$nameDirectory = $_REQUEST["name-directory"];
$root = './root'. $nameDirectory;
$documents = './root/documents/'. $nameDirectory;
$images = './root/images/new';
$audio = './root/audio/new';
$video = './root/video/new';
$trash = './root/trash/new';

if (!file_exists($root)){
    mkdir($root, 0777, true);
    echo "is done";
}

?>