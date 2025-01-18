<?php
$conn = include "conexion/conexion.php";

if (isset($_GET['fecha'])) {
  $fecha_consultar = $_GET['fecha'];
} else {
  date_default_timezone_set('US/Central');
  $fecha_consultar = date("Y-m-d");
}

$nahual = include 'backend/buscar/conseguir_nahual_nombre.php';
$energia = include 'backend/buscar/conseguir_energia_numero.php';
$haab = include 'backend/buscar/conseguir_uinal_nombre.php';
$cuenta_larga = include 'backend/buscar/conseguir_fecha_cuenta_larga.php';
$cholquij = $nahual . " " . strval($energia);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include "blocks/bloquesCss.html" ?>
  <link rel="stylesheet" href="css/estilo.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="css/estiloAdmin.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="css/index.css?v=<?php echo (rand()); ?>" />
</head>

<body>

  <?php include "NavBar.php" ?>
  <div>
    <section id="inicio">
      <video src="./img/background.mp4" autoplay="true" muted="true" loop="true"></video>
      <div id="inicioContainer" class="inicio-container">
        <br><br><br><br><br>
        <h1><br><br>Tiempo Maya</h1><br><br>
        <img alt="" src="./img/logonew2.png" width=185" height="160"><br>
        <h4 style="color: whitesmoke;">Fecha actual</h4>
        <h5><?php echo isset($fecha_consultar) ? $fecha_consultar : ''; ?></h5><br>
        <h5 style="color: whitesmoke;font-size: 18px;">Calendario Haab<br><?php echo isset($haab) ? $haab : ''; ?></h5>
        <br>
        <h5 style="color: whitesmoke;font-size: 18px;">Calendario
          Cholquij<br><?php echo isset($cholquij) ? $cholquij : ''; ?></h5><br>
        <h5 style="color: whitesmoke;font-size: 18px;">Cuenta
          Larga<br><br><?php echo isset($cuenta_larga) ? $cuenta_larga : ''; ?></h5>
      </div>
    </section>
    <br><br><br><br>
    <section id="information">
      <div class="container">
        <div class="row about-container">
          <div class="section-header">
            <h3 class="section-title">Acerca de</h3><br>
            <p>La cultura maya se refiere a una civilización mesoamericana que destacó a lo largo de más de dos
              milenios en numerosos aspectos socioculturales como su escritura jeroglífica, uno de los pocos
              sistemas de escritura plenamente desarrollados del continente americano precolombino, su arte, la
              arquitectura, su mitología y sus notables sistemas de numeración, así como en astronomía y
              matemáticas. Se desarrolló en el sureste de México (en los estados de Yucatán, Campeche,
              Quintana Roo, Chiapas y Tabasco), prácticamente toda Guatemala y también en Belice, la parte
              occidental de Honduras y en El Salvador, abarcando más de 300,000 km. Esta aplicación permite
              difundir algunos de los conocimientos de la cultura Maya, como por ejemplo: los diferentes calendarios
              Mayas, el conteo del tiempo, los Nahuales y energías. </p>
            <p>Este proyecto tiene como fin despertar el
              interés acerca de la cultura maya y las herramientas que nos brindan nos ayudan a tener una mejor
              interacción con el usuario, así como puede llegar hacer un canal de comunicación y construcción del
              conocimiento con otros interesados. </p>
            
              <div class="foot">
              <img alt="" src="./img/logonew3.png" width="185" height="160">
              <a
                href="https://srlabs.a2hosted.com/rs-humhub/index.php?r=wiki%2Fpage%2Fview&title=Proyecto+Tiempo+Maya&cguid=03ab5d70-702f-4844-a654-5f47fd6a1f61">
                <img alt="" src="./img/srlabs.png" width="400" height="160">
              </a>
              <img alt="" src="./img/logonew3.png" width="185" height="160">
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>


  <?php include "blocks/bloquesJs1.html" ?>

</body>

</html>