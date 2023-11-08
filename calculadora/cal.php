<?php

class Calcular {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2) {
        if ($num2 == 0) {
            return "Error: No se puede dividir por cero";
        }
        return $num1 / $num2;
    }
}

// Uso de la calculadora
$calculadora = new Calcular();
$num1 = 15;
$num2 = 5;

echo "Suma: " . $calculadora->sumar($num1, $num2) . "<br>";
echo "Resta: " . $calculadora->restar($num1, $num2) . "<br>";
echo "Multiplicación: " . $calculadora->multiplicar($num1, $num2) . "<br>";
echo "División: " . $calculadora->dividir($num1, $num2) . "<br>";