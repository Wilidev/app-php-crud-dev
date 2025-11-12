$nombre = "Juan";
$edad = 25;
$activo = true;


define("PI", 3.1416);
echo PI;

$a = 10;
$b = 5;

// Aritméticos
$suma = $a + $b;
$resta = $a - $b;

// Comparación
$igual = ($a == $b); // false

// Lógicos
$esVerdadero = ($a > 0 && $b > 0); // true


$nota = 85;

if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}


// While
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

// For
for ($j = 0; $j < 5; $j++) {
    echo $j;
}

// Foreach
$colores = ["rojo", "verde", "azul"];
foreach ($colores as $color) {
    echo $color;
}


function saludar($nombre) {
    return "Hola, " . $nombre;
}

echo saludar("Carlos");




// Arreglo indexado
$frutas = ["manzana", "banana", "pera"];

// Arreglo asociativo
$persona = [
    "nombre" => "Ana",
    "edad" => 30
];

// Arreglo multidimensional
$usuarios = [
    ["nombre" => "Luis", "edad" => 20],
    ["nombre" => "Marta", "edad" => 25]
];