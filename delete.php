<?php

$actualFolder = $_GET["actualFolderName"];

unlink($actualFolder);

echo json_encode($actualFolder);


 //unlink('./root/'. $deleteFile);
?>