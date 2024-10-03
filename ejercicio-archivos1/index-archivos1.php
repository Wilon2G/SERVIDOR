<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>
<body>
    <?php
    include(__DIR__."/functions.php");
    if (isset($_FILES["imagen"])&&isset($_POST['imgname'])) {
        uploadImg("imagen",$_POST['imgname']);
    }
    else {
    print("<h1>Escoja una imagen</h1>");
    print ("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"POST\" ENCTYPE=\"multipart/form-data\">");
    
    print("<input type='file' name='imagen'/><br><br>");
    print("<label>Nombre: </label><input type='text' name='imgname'/><br><br>");
    print("<input type=\"submit\" name=\"submit\" value=\"Procesar imagen\">");
    print ("</form>");
    print("");

    print("<h1>Busque una imagen</h1>");
    print ("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"POST\" ");
    print("<label>Nombre: </label><input type='text' name='imgname'/><br><br>");
    print("<input type=\"submit\" name=\"submit\" value=\"Buscar Imagen\">");
    print ("</form>");


    }


    ?>
    
</body>
</html>