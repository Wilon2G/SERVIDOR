<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styletemp.css">
</head>
<body>
<?php 

$temperaturas=array();
$temperaturas["Caja_1"]= array(1,1,1,2,3,2,1,2,3,3,3,2,1,3,4);
$temperaturas["Caja_2"]= array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
$temperaturas["Caja_3"]=array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
$temperaturas["Caja_4"]=array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
$temperaturas["Caja_5"]=array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);
foreach($temperaturas as $key => $value) {
    $sobrecalentado=false;
    print("<p>".$key."</p><div class=\"cajas\">");
    foreach($value as $k => $v) {
        if($v<=4){
            print("<div class=\"cajafria\">$v</div>");
        }
        else{
            print("<div class=\"cajacaliente\">$v</div>");
            $sobrecalentado=true;
        }
       
    }
    
print("</div>");
if($sobrecalentado) {
    print("<p>     ".$key." ha sobrecalentado</p><br>");

}
}
?>
    
</body>
</html>


