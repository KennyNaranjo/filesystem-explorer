<?php




$Vale = $_GET['searchquery'];

foreach (glob("root/$Vale") as $directory) {
    echo $directory;
}

foreach (glob("root/*/*") as $directory) {
    echo $directory;
}
foreach (glob("root/*/*/") as $directory) {
    echo $directory;

}


?>