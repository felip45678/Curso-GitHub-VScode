<?php
/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva) {
    return $precio * (1 + $iva / 100);
}
/**
 * Calcula el mayor de dos números jjjj.
 * @param int $num1 primer número.
 * @param int $num2 segundo número.
 * @return float Mayor de los dos números.
 */
function mayorFelipe($num1,$num2) {
    if($num1>$num2){
        return $num1;
    }else{
        return $num2
    }
}
?>