<?php


 $name=$_FILES["upload"]["name"];


 $content = $_FILES["upload"]["tmp_name"];



       if(move_uploaded_file($content,"root/documents/".$name)){
           echo "saved";
       }else{
            echo"error";
       }



?>