<?php

$actualFolder = $_GET["actualFolderName"];

unlink($actualFolder);

echo json_encode($actualFolder);


$deleteDirectory = $_REQUEST["delete-folder"];
$root = './root/trash/'. $deleteDirectory;



rmdir('./root/'. $deleteDirectory);


 //unlink('./root/'. $deleteFile);
?>