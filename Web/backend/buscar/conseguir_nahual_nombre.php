<?php
$formato = mktime(0, 0, 0, 1, 1, 1720) / (24 * 60 * 60);
$fecha = date("U", strtotime($fecha_consultar)) / (24 * 60 * 60);
$id = $fecha - $formato;
$nahual = $id % 20;
if ($nahual < 0) {
	$nahual = 19 + $nahual;
}
$icon_width = "40px";  // Ajusta el tamaño según sea necesario
    $icon_color = "filter: invert(100%);";  // Filtro para cambiar el color a blanco

$Query = $conn->query("SELECT nombre,imagen FROM nahual WHERE idweb=".$nahual." ;");
$row = mysqli_fetch_assoc($Query);
$query = $row['nombre'];
$ruta = $row['imagen'];
$ruta2 = substr($ruta, 3);
$imagen = '<img src="'.$ruta2.'" alt="" style="width: ' . $icon_width . '; ' . $icon_color . '">';

return $imagen.$query;
?>
