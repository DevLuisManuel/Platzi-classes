<?php

class Practice
{
    /*
        Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.
        Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.
        Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.
        Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.
    */
    private string $store = 'undefined';
    private string $asterisk = '*';

    public function Age(int $age = null): string
    {
        if (!is_null($age)) {
            if ($age < 5) {
                $this->store = 'lower';
            }
            if ($age >= 5 && $age <= 7) {
                $this->store = 'medium';
            }
            if ($age > 7) {
                $this->store = 'hight';
            }
        }

        return match ($this->store) {
            'lower' => "El estudiante con $age años tendrá sus juguetes en la parte inferior de la bodega.",
            'medium' => "El estudiante con $age años tendrá sus juguetes en la parte media de la bodega.",
            'hight' => "En estudiante con $age años tendrá sus juguetes en la parte alta de la bodega.",
            default => "Al no tener registrada su edad sus juguetes se guardaran en el almacen de al lado"
        };
    }

    public function Tree(int $cant): void
    {
        for ($i = 0; $i < ($cant / 2); $i++) {
            echo "$this->asterisk \n";
            $this->asterisk .= '*';
        }
    }
}

$test = new Practice();
echo $test->Age();
echo "\n";
$test->Tree(10);
