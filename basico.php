<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Basico</title>
   
</head>
<body>
    <h1>PHP Basico</h1>
    <hr>
    <section>
        <h2>Varibles</h2>
        <?php
        $nombre = "Wiliam Dida 😂 <br>";
        echo $nombre;
        $edad  = 20;
        echo "Edad:" . $edad ."<br>";

        $profesor  = true;
        echo " es Profesor?:" . $profesor ."<br>";
       
        $talia  = 1.70;
        echo ":" .$talia ."<br>";
        ?>

        <h2>Constante</h2>
        <?php
        define("PI", 3.1416);
        echo" Valor de PI:" . PI . " <br>";
        ?>
    </section>
    <hr>
    <section>
        <h2>Control de flujo</h2>
        <?php
        $hora ="14:15";

        if($hora < "14:15"){
            echo " ya es hora 😂😂😂😂<br>";
        }else{
            echo "Estamos en clase <br>";
        }
        ?>
    </section>
    <section>
        <h2 class="" style="color: red;"></h2>
    </section>
</body>
</html> 