<?php

$directory = './root/';
function buscar(){

    foreach (glob("root/h*") as $directory) {
        echo $directory;
    }

    foreach (glob("root/*/h*") as $directory) {
        echo $directory;
    }
    foreach (glob("root/*/*/h*") as $directory) {
        echo $directory;

    }
}

?>