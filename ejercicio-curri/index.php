<!-- Nombre, movil, deportes, idiomas, sexo, edad, apellidos, fecha de nacimiento (calendar) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="style-curri-form.css">

</head>

<body>
    <?php
    if (!isset($_POST["state"])) {
        print ("<div class=\"opciones\"><form  action=\"http://pruebas/ejercicio-curri/main.php \" method=\"POST\">
    <h3>Nombre:<h3>
     <input type=\"text\" name=\"nombre\" maxlength=\"30\" minlength=\"1\" required >
     <br><br>
     <h3>Apellidos:<h3>
     <input type=\"text\" name=\"apellidos\" maxlength=\"30\" minlength=\"1\" required >
     <br><br>
      <h3>Correo Electrónico:<h3>
     <input type=\"email\" name=\"correo\" maxlength=\"30\" minlength=\"1\" required >
     <br><br>
     <h3>Teléfono de contacto:<h3>
     <input type=\"tel\" name=\"tlfn\" maxlength=\"30\" minlength=\"1\" required >
     <br><br>
     <h3>Deportes:<h3>
     <input type=\"checkbox\" value=\"Tenis\" name=\"deporte[]\" >Tenis</input>
     <input type=\"checkbox\" value=\"Fútbol\" name=\"deporte[]\" >Fútbol</input>
     <input type=\"checkbox\" value=\"Ciclismo\" name=\"deporte[]\">Ciclismo</input>
     <input type=\"checkbox\" value=\"Natación\" name=\"deporte[]\">Natación</input>
     <input type=\"checkbox\" value=\"Ninguno\" name=\"deporte[]\">Ninguno de los anteriores</input>
     <br><br>
     <h3>Nacionalidad:<h3>
     <select name=\"nacionalidad\" >
     <option value=\"Español\">Español</option>
     <option value=\"Inglés\">Inglés</option>
     <option value=\"Alemán\">Alemán</option>
     <option value=\"Francés\">Francés</option>
    </select>
     <br><br>
     <h3>Idiomas:<h3>
     <select name=\"idioma[]\" multiple>
     <option value=\"Inglés\">Inglés</option>
     <option value=\"Español\">Español</option>
     <option value=\"Alemán\">Alemán</option>
     <option value=\"Francés\">Francés</option>
    </select>
    <br><br>
    <h3>Del 0 al 100 indique su nivel de inglés:<h3>
     <input id=\"nvl\" type=\"range\" name=\"nvling\"
     min=\"0\" max=\"100\" value=\"0\">
     <p id=\"nivel\">0</p>
     <script>
  addEventListener('load',inicio,false);

  function inicio()
  {
    document.getElementById('nvl').addEventListener('change',cambioNivel,false);
  }

  function cambioNivel()
  {    
    document.getElementById('nivel').innerHTML=document.getElementById('nvl').value;
  }
</script> 
    <br>
     <h3>Sexo:<h3>
     <input type=\"radio\" value=\"M\" name=\"sexo\">M</input>
     <input type=\"radio\" value=\"H\" name=\"sexo\">H</input>
     <input type=\"radio\" value=\"---\" name=\"sexo\">Prefiero no decirlo</input>
     <br><br>
     <h3>Fecha de nacimiento:<h3>
     <input type=\"date\" value=\"\" name=\"fechan\" max=\"".date('Y-m-d')."\">
     <br><br>
     
     <input type=\"submit\" value=\"Generar cv\">
     </form></div>");
    }


    ?>

</body>

</html>