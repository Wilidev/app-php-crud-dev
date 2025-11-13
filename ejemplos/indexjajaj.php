
<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>

</head>

<body style="background-image: url('gol.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <h2 style="text-align: center;">TRABAJO</h2>
    <section style="margin-left:10%">
        <h2  style="color: black;">Variables y Constantes</h2>
        <?php
        $nombre = "Dida";
        $edad = 19;
        $es_estudiante = true;
        echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años " . "<br>";

        define("PI", 3.14159);
        echo "El valor de PI es: " . PI . "<br>";
        ?>
    </section>
    <hr>
    <section style="margin-left:10%;">
        <h2 style="color: black;">Operadores</h2>
        <?php
        $a = 100;
        $b = 2;

        echo "la suma: " . ($a + $b) . "<br>";
        echo "la resta: " . ($a - $b) . "<br>";
        echo "la multiplicación: " . ($a * $b) . "<br>";
        echo "la división: " . ($a / $b) . "<br>";
        echo "Módulo: " . ($a % $b) . "<br>";
        ?>
    </section>
    <hr>
    <section style="margin-left:10%;">
        <h2 style="color: black;">Control de Flujo</h2>
        <?php
        $nota = 40;

        // If-elseif-else
        if ($nota >= 90) {
            echo "Senior"."<br>";
        } elseif ($nota >= 70) {
            echo "Semi-senior"."<br>";
        } else {
            echo "Junior"."<br>";
        }

        $hora ="13:15";
        if($hora < "13:15"){
            echo "No estamos en clase <br>";
        }else{
            echo "Estamos en clase <br>";
        }

        $dia = "martes";
        switch ($dia) {
            case "Lunes":
                echo "hoy es lunes"."<br>";
                break;
            case "Jueves":
                echo "Hoy es jueves"."<br>";
                break;
            default:
                echo "Otro dia de la semana"."<br>";
                break;
        }
        
        ?>
    </section>
    <hr>
    <section style="margin-left:10%;">
        <h2 style="color: black;">Bucles</h2>
        <?php
        echo "Bucle for:"."<br>";   
        for ($i = 0; $i < 5; $i++) {
            echo "Número: " . $i . "<br>";
        }

        echo "Bucle while:"."<br>";
        $z = 0;
        while ($z < 5) {
            echo "Iteración: " . $z . "<br>";
            $z++;
        }

        ?>
    </section>
    <hr>
    <section style="margin-left:10%;">
        <h2 style="color: black;">Funciones</h2>
        <?php
        function saludar($persona)
        {
            echo "Buenos dias , " . $persona . "<br>";
        }
        saludar("Carlos");
        saludar("María");

        function sumar($x, $y)
        {
            $resultado = $x + $y;
            return $resultado;
        }

        $total = sumar(5, 3);
        echo "La suma de 5 y 3 es: " . $total . "<br>";
        ?>
    </section>
    <hr>
    <section style="margin-left:10%;">
        <h2 style="color: black;">Arreglos</h2>
        <?php 
        $deporte = array(
            "a"=>"boxeo",
            "b"=>"futbol",
            "c"=>"tenis"
        );
        $nombres = array(
            1 => "pepe",
            2 => "pluto",
            3 => "kico"
        );
        $edades = array(
            "x" => 35,
            "y" => 28,
            "z" => 42
        );

        echo "El es ". $nombres[2] . " , tiene " . $edades['y'] . " años y practica ". $deporte['a']."<br>";

        ?>
    </section>
</body>

</html>