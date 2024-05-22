<?php

class Prestamo{
    public $id;
    public $monto_prestamo;
    public $tasa_interes;
    public $fecha_inicio;
    public $plazo_mes;
    public $estado_prestamo;
    public $id_cliente;

    function parseArray($obj){
        $this->id = $obj["id_prestamo"];
        $this->monto_prestamo = $obj["monto_prestamo"]; 
        $this->tasa_interes = $obj["tasa_interes"]; 
        $this->fecha_inicio = $obj["fecha_inicio"]; 
        $this->plazo_mes = $obj["plazo_mes"]; 
        $this->estado_prestamo = $obj["estado_prestamo"];
        $this->id_cliente = $obj["id_cliente"];
    }
    function calcularAmortizacion($prestamo) 
    {
        /* cuota = (p * (r/12))/((1-(1 + (r/12)))^-n)
        donde 
        p es el monto del prestamo
        r es la tasa de interes anual
        n es el numero de pagos*/
        $tasa_interes = $prestamo["tasa_interes"] / 100;

        // Calculamos la cuota mensual
        $cuota_mensual = ($prestamo["monto_prestamo"] * $tasa_interes / 12) / (1 - pow((1 + ($tasa_interes / 12)), -$prestamo["plazo_mes"]));

        $amortizacion = [];
        $saldo_pendiente = $prestamo["monto_prestamo"];
        $fecha_actual = new DateTime($prestamo["fecha_inicio"]);

        for ($i = 1; $i <= $prestamo["plazo_mes"]; $i++) {
            $interes = $saldo_pendiente * $tasa_interes / 12;
            $capital = $cuota_mensual - $interes;
            $saldo_pendiente -= $capital;

            // Añadimos los datos al array de amortización
            $amortizacion[] = [
                'fecha' => $fecha_actual->format('Y-m-d'),
                'periodo' => $i,
                'interes' => round($interes, 2),
                'amortizacion' => round($capital, 2),
                'cuota' => round($cuota_mensual, 2),
                'capital_pendiente' => round($saldo_pendiente, 2)
            ];

            // Avanzamos al siguiente mes
            $fecha_actual->modify('+1 month');
        }

        return $amortizacion;
    }
}