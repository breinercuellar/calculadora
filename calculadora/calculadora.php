
<?php
class Calcular
{
    private $resultado;

    public function __construct()
    {
        $this->resultado = 0;
    }

    public function sumar($numeros)
    {
        foreach ($numeros as $numero) {
            $this->resultado += $numero;
        }
    }

    public function restar($numeros)
    {
        $this->resultado = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            $this->resultado -= $numeros[$i];
        }
    }

    public function multiplicar($numeros)
    {
        $this->resultado = 1;
        foreach ($numeros as $numero) {
            $this->resultado *= $numero;
        }
    }

    public function dividir($numeros)
    {
        $this->resultado = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] != 0) {
                $this->resultado /= $numeros[$i];
            } else {
                echo "Error: División por cero no permitida.";
                return;
            }
        }
    }

    public function obtenerResultado()
    {
        return $this->resultado;
    }
}


$calculadora = new Calcular();
$numeros = array(5, 5, 5);

$calculadora->sumar($numeros);
echo "Suma: " . $calculadora->obtenerResultado() . "<br>";

$calculadora->restar($numeros);
echo "Resta: " . $calculadora->obtenerResultado() . "<br>";

$calculadora->multiplicar($numeros);
echo "Multiplicación: " . $calculadora->obtenerResultado() . "<br>";

$calculadora->dividir($numeros);
echo "División: " . $calculadora->obtenerResultado();
?>