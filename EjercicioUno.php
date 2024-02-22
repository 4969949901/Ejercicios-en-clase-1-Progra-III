<?php
//Alumna:Helen Acevedo Tobar Carne:0909-21-1802
//Tarea 1: Ejercicios

//Sección de funciones

// Función para generar y mostrar la tabla de multiplicar de la tabla de 4 y 6
function tablaMultiplicar($nume) {
    echo "Tabla de multiplicar del $nume:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$nume x $i = " . ($nume * $i) . "<br>";
    }
}

// Función para calcular el factorial de un número.
function factorial($nume) {
    $resultado = 1;
    for ($i = 2; $i <= $nume; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Función para ver que numero es primo
function esPrimo($nume) {
    if ($nume <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nume); $i++) {
        if ($nume % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para ver si un número es par
function esPar($nume) {
    return $nume % 2 == 0;
}

#Declaracion de las variables seteadas para realizar los ejercicios y llamado de funciones.

// Variables para seteado
$variable1 = 5;   //calcular el factorial y mostrarlo por pantalla
$variable2 = 17;  //mostrar por pantalla si el numero es PRIMO o NO
$variable3 = 8;  //mostrar por pantalla si el numero es par
$variable4 = 7;   //mostrar la tabla de multiplicar


echo "=======================================";echo "<br>";
echo "Ejercicio 01: Tablas de multiplicar: ";echo "<br>";echo "<br>";
// Ejercicio 1: Tablas de multiplicar del 4 y del 6
tablaMultiplicar(4);
echo "<br>";
tablaMultiplicar(6);
echo "<br><br>";

echo "=======================================";echo "<br>";
echo "Ejercicio 02: Calculo de factorial con variable seteada: ";echo "<br>";echo "<br>";
// Ejercicio 2: Calcular factorial
echo " La Factorial de $variable1 es : " . factorial($variable1) . "<br><br>";


echo "=======================================";echo "<br>";
echo "Ejercicio 03: ver si un numero es primo o no mediante una variable seteada";echo "<br>";echo "<br>";
// Ejercicio 3: Ver si un número es primo o no
if (esPrimo($variable2)) {
    echo "$variable2 es un numero primo.<br><br>";
} else {
    echo "$variable2 no es un numero primo.<br><br>";
}


echo "=======================================";echo "<br>";
echo "Ejercicio 04: ver si un numero es par con una variable seteada: ";echo "<br>";echo "<br>";
// Ejercicio 4: Ver si un número es par
if (esPar($variable3)) {
    echo "$variable3 es un numero  par.<br><br>";
} else {
    echo "$variable3 no es un numero par.<br><br>";
}



echo "=======================================";echo "<br>";
echo "Ejercicio 05: Tabla de multiplicar por medio de una variable seteada: ";echo "<br>";echo "<br>";
// Ejercicio 5: Mostrar tabla de multiplicar de un número dado
tablaMultiplicar($variable4);

echo "=======================================";echo "<br>";
echo "FIN -THE END- BOOM ";echo "<br>";echo "<br>";
?>