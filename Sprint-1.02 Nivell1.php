<?php
//EXERCICI 1
echo "<h4>" . "Exercici 1" . "</h4>";
$integer = 2;
$double = 2.90;
$string = "Hello World";
$boolean = true;

echo "$integer, $double, $string, $boolean";

define("NOM","Enric Salvador");

echo "<h1>" . NOM . "</h1>";

//EXERCICI 2
echo "<h4>" . "Exercici 2" . "</h4>";
$variable1 = "Hello World";

echo $variable1 . "<br>";

echo strtoupper($variable1) . "<br>";

echo strlen($variable1) . "<br>";

echo strrev($variable1) . "<br>";

$variable2 = "Aquest és el curs de PHP";
echo "$variable1" . ", " . "$variable2" . "<br>";

//EXERCICI 3
echo "<h4>" . "Exercici 3" . "</h4>";
$x = 5;
$y = 3;
$n = 2.2;
$m = 1.4;

echo "Operacions amb X i Y" . "<br>";
echo $x . " " . $y . "<br>";
echo "Suma: " . ($x + $y) . "<br>";
echo "Resta: " . ($x - $y) . "<br>";
echo "Producte: " . ($x * $y) . "<br>";
echo "Mòdul: " . ($x / $y) . "<br>" . "<br>";
echo "Operacions amb N i M" . "<br>";
echo $n . " " . $m . "<br>";
echo "Suma: " . ($n + $m) . "<br>";
echo "Resta: " . ($n - $m) . "<br>";
echo "Producte: " . ($n * $m) . "<br>";
echo "Mòdul: " . ($n / $m) . "<br>" . "<br>";

echo "Doble de X: " . ($x * 2) . "<br>";
echo "Doble de Y: " . ($y * 2) . "<br>";
echo "Doble de N: " . ($n * 2) . "<br>";
echo "Doble de M: " . ($m * 2) . "<br>" . "<br>";

echo "Suma de totes les variables: " . ($x + $y + $n + $m) . "<br>" . "<br>";

echo "Producte de totes les variables: " . ($x * $y * $n * $m) . "<br>" . "<br>";

function Calcular(int|float $num1, int|float $num2, string $operador): mixed {
    switch($operador) {
        case "+":
            return $num1 + $num2;
        break;
        case "-":
            return $num1 + $num2;
        break;
        case "*":
            return $num1 * $num2;
        break;
        case "/":
            if ($num2 == 0) {
                return "No es pot dividir per 0";
            } else {
                return $num1 / $num2;
            }
        break;
        default:
            return "Operació no vàlida";
    }

}

echo "Resultat: " . Calcular(8,4,'+') . "<br>";

//EXERCICI 4
echo "<h4>" . "Exercici 4" . "</h4>";

function Comptar (int $limit = 10, int $interval = 1): void {
    for ($i = 0; $i <= $limit; $i += $interval) {
        echo $i.PHP_EOL;
    }
}

Comptar(20,3);

//EXERCICI 5
echo "<h4>" . "Exercici 5" . "</h4>";

function Grau ($nota) {
    $percentatge = $nota * 10;

    if ($percentatge >= 60) {
        return "Primera divisió";
    } else if ($percentatge >= 45) {
        return "Segona divisió";
    } else if ($percentatge >= 33) {
        return "Tercera divisó";
    } else if ($percentatge < 33) {
        return "Reprovar";
    } else {
        return "Introdueix una nota vàlida";
    }
}

echo Grau (6.2) . "<br>";

//EXERCICI 6
echo "<h4>" . "Exercici 6" . "</h4>";

function isBitten() {
    return rand(0, 1) ? "True" : "False";
}

echo "Charlie m'ha mossegat el dit? " . isBitten();
?>
