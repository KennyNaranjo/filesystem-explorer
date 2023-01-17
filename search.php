<?php




$Vale = $_GET['searchquery'];

foreach (glob("root/$Vale") as $directory) {
    echo $directory;
}

foreach (glob("root//h") as $directory) {
    echo $directory;
}
foreach (glob("root///h") as $directory) {
    echo $directory;

}


?>