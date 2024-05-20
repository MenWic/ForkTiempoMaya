<?php
$for = mktime(0, 0, 0, 1, 1, 1720) / (24 * 60 * 60);
$fech = date("U", strtotime($fecha_consultar)) / (24 * 60 * 60);
$idd = $fech - $for;
$nn = $idd % 13;
$icon_width = "40px";  // Ajusta el tamaño según sea necesario
    $icon_color = "filter: invert(100%);";  // Filtro para cambiar el color a blanco

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
if($nn<0){
	$nn=12+$nn;
}
if($nn==12){
	return 1;
}else{

	return $iconos2[$nn+2].$nn+2;
}?>
