<?php 


    echo "Flor de calculadora";
    require "funciones.php";


    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operacion = $_GET['operacion'];
  
    if($operacion === "sum") sumar($numero1,$numero2);
    if($operacion === "res") restar($numero1,$numero2);
    if($operacion === "mul") multiplicar($numero1,$numero2);
    if($operacion === "div") dividir($numero1,$numero2);
    if($operacion === "cuad") elevarAlCuadrado($numero1);


