<?php
$deleteDirectory = $_REQUEST["delete-folder"];
$root = './root/trash/'. $deleteDirectory;

rmdir('./root/'. $deleteDirectory);






?>