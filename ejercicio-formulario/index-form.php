<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    print("<div class=\"opciones\">");
    if (!isset($_GET["state"])) {
       print("<form  action=\"" . $_SERVER['PHP_SELF'] . "?state=1\" method=\"POST\">
        <input type=\"text\" name=\"nombre\" maxlength=\"30\" minlength=\"1\" required >
        <br>
        <input type=\"checkbox\" value=\"Tenis\" name=\"deporte[]\">Tenis</input>
        <input type=\"checkbox\" value=\"Fútbol\" name=\"deporte[]\">Fútbol</input>
        <input type=\"checkbox\" value=\"Ciclismo\" name=\"deporte[]\">Ciclismo</input>
        <input type=\"checkbox\" value=\"Natación\" name=\"deporte[]\">Natación</input>
        <input type=\"submit\" value=\"Procesar\">
        </form>");
    }
    else{

        $dep=$_POST["deporte"];
       
        print("<h1>Practica los siguientes deportes:</h1>");
        print("<ul>");
        foreach($dep as $k=>$v){
            print("<li>".$v."</li>");
            
        }
        print("</ul>");
    }

    
    print("</div>");
    ?>
    
</body>
</html>