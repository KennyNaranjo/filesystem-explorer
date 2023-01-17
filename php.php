<?php


 $name=$_FILES["upload"]["name"];


 $content = $_FILES["upload"]["tmp_name"];



       if(move_uploaded_file($content,"root/documents/".$name)){
           header("location: index.php");
           
       }else{
            echo"error";
       }



?>