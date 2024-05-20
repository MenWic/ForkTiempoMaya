<?php
$fecha1 = new DateTime("01-01-2001");
$fecha2 = new DateTime($fecha_consultar);
$fecha_actual = strtotime(date("d-m-Y H:i:00", $fecha1->getTimestamp()));
$fecha_entrada = strtotime($fecha_consultar);
$diff = $fecha1->diff($fecha2);
$dias = $diff->days;
$reversa = false;
if ($fecha_actual > $fecha_entrada) {
    $reversa = true;
}

$number_4 = 0;
if ($dias > 7200) {
    $number_4 = floor($dias / 7200);
    $number_3 = floor(($dias % 7200) / 360);
    $number_2 = floor((($dias % 7200) % 360) / 20);
    $number_1 = (($dias % 7200) % 360) % 20;
} else {
    $number_3 = floor($dias / 360);
    $number_2 = floor(($dias % 360) / 20);
    $number_1 = ($dias % 360) % 20;
}

if ($reversa) {
    $number_1 *= -1;
    $number_2 *= -1;
    $number_3 *= -1;
    $number_4 *= -1;
}

$number1 = 8 + $number_1;
$pivot = 0;
if ($number1 > 19) {
    $number1 = $number1 - 20;
    $pivot = 1;
} elseif ($number1 < 0) {
    $number1 = 20+ $number1;
    $pivot = -1;
}

$number2 = 15 + $number_2 + $pivot; 
$pivot=0;
if ($number2 > 17) {
    $number2 = $number2 - 18;
    $pivot = 1;
} elseif ($number2 < 0) {
    $number2 = 18 + $number2;
    $pivot = -1;
}
$number3 = 7 + $number_3 + $pivot;
$pivot=0;
if ($number3 > 19) {
    $number3 = $number3 - 20;
    $pivot = 1;
} elseif ($number3 < 0) {
    $number3 = 20 + $number3;
    $pivot = -1;
}
$number4 = 19 + $number_4+$pivot;
$pivot=0;
if ($number4 > 19) {
    $number4 = $number4 - 20;
    $pivot = 1;
} elseif ($number4 < 0) {
    $number4 = 20 + $number4;
    $pivot = -1;
}
$number5=12+$pivot;
$icon_width = "40px";  // Ajusta el tamaño según sea necesario
    $icon_color = "filter: invert(100%);";  // Filtro para cambiar el color a blanco

    $iconos = [
        'baktun' => '<img src="img/Baktun.png" alt="Baktun Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        'katun' => '<img src="img/Katun.png" alt="Katun Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        'tun' => '<img src="img/Tun.png" alt="Tun Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        'uinal' => '<img src="img/Uinal.png" alt="Uinal Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        'kin' => '<img src="img/Kin.png" alt="Kin Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">'
    ];

    $iconos2 = [
        '0' => '<img src="img/numbers/0.png" alt="Número 1 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '1' => '<img src="img/numbers/1.png" alt="Número 1 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '2' => '<img src="img/numbers/2.png" alt="Número 2 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '3' => '<img src="img/numbers/3.png" alt="Número 3 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '4' => '<img src="img/numbers/4.png" alt="Número 4 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '5' => '<img src="img/numbers/5.png" alt="Número 5 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '6' => '<img src="img/numbers/6.png" alt="Número 6 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '7' => '<img src="img/numbers/7.png" alt="Número 7 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '8' => '<img src="img/numbers/8.png" alt="Número 8 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '9' => '<img src="img/numbers/9.png" alt="Número 9 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '10' => '<img src="img/numbers/10.png" alt="Número 10 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '11' => '<img src="img/numbers/11.png" alt="Número 11 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '12' => '<img src="img/numbers/12.png" alt="Número 12 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '13' => '<img src="img/numbers/13.png" alt="Número 13 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '14' => '<img src="img/numbers/14.png" alt="Número 14 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '15' => '<img src="img/numbers/15.png" alt="Número 15 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '16' => '<img src="img/numbers/16.png" alt="Número 16 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '17' => '<img src="img/numbers/17.png" alt="Número 17 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '18' => '<img src="img/numbers/18.png" alt="Número 18 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">',
        '19' => '<img src="img/numbers/19.png" alt="Número 19 Icon" style="width: ' . $icon_width . '; ' . $icon_color . '">'
    ];
    $cuenta_larga_con_iconos =$iconos['baktun'] ."". $iconos2[$number5] . "Baktun" ."<br>".
    $iconos['katun']." ".$iconos2[$number4] . "Katun". "<br> " .
    $iconos['tun']." ".$iconos2[$number3] . "Tun ". " <br>" .
    $iconos['uinal']." ".$iconos2[$number2] . "Uinal". " <br>" .
    $iconos['kin']. " ".$iconos2[$number1] . "Kin";
    
//return strval($number5).".".strval($number4)."..".strval($number3).".".strval($number2).".".strval($number1);
return $cuenta_larga_con_iconos;
?>