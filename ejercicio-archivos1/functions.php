<?php
function uploadImg($s,$imgname){

    if (isset($_FILES[$s])) {
        print("Name: ".$_FILES[$s]['name']);
        print("<br>");
        print("Temp Name: ".$_FILES[$s]['tmp_name']);
        print("<br>");
        print("Size: ".$_FILES[$s]['size']);
        print("<br>");
        print("Type: ".pathinfo(str_replace('/','.', $_FILES[$s]['type']))['extension']);
        if (is_uploaded_file($_FILES[$s]['tmp_name'])) {
            $dirname="img";
            $ext= pathinfo(str_replace('/','.', $_FILES[$s]['type']))['extension'];
            
            if (is_dir($dirname)) {
                $uniqueId=date('Y-m-d');
                $fullName=$dirname."/".$uniqueId."-".$imgname.'.'.$ext;
                move_uploaded_file ($_FILES[$s]['tmp_name'],$fullName);
                print("<p>Imagen subida con nombre: ".$fullName."</p>");
            
        }
        }
        
    }
    else {
        print("Error en la funcion uploadImg");
    }
}
?>