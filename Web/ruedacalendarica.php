<?php session_start(); ?>
<?php
function calcularTzolkin($fecha) {
    // Implementar la lógica para calcular el día Tzolk'in
    $tzolkin_signos = ["B’atz’", "Be’e", "Aj", "I’x", "Tz’ikin", "Ajmaq’", "No’j", "Tijax", "Kawoq’", "Ajpu’", "Imox", "Iq’", "Aq’ab’al", "K’at", "Kan", "Kame", "Kej", "Q’anil", "Toj", "Tz’i’"];
    $tzolkin_numeros = range(1, 13);
    
    $dias = (strtotime($fecha) - strtotime('0000-01-01')) / 86400;
    $signo = $tzolkin_signos[$dias % 20];
    $numero = $tzolkin_numeros[$dias % 13];
    
    return "$numero $signo";
}

function calcularHaab($fecha) {
    // Implementar la lógica para calcular el día Haab'
    $haab_meses = ["Pop", "Wo'", "Sip", "Sotz'", "Sek", "Xul", "Yaxk'in", "Mol", "Ch'en", "Yax", "Sak'", "Keh", "Mak", "K'ank'in", "Muwan", "Pax", "K'ayab'", "Kumk'u", "Wayeb'"];
    
    $dias = (strtotime($fecha) - strtotime('0000-01-01')) / 86400;
    $mes = $haab_meses[intval(($dias % 365) / 20)];
    $dia = ($dias % 20) + 1;
    
    return "$dia $mes";
}

// Ejemplo de uso
$fecha = '2024-05-19';
$tzolkin = calcularTzolkin($fecha);
$haab = calcularHaab($fecha);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rueda Calendarica</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include "blocks/bloquesCss.html" ?>
    <link rel="stylesheet" href="css/estilo.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="css/rueda.css?v=<?php echo (rand()); ?>" />
</head>

<body>

    <?php include "NavBar.php" ?>
    <div>
        <section id="inicio">
            <video src="./img/background.mp4" autoplay="true" muted="true" loop="true"></video>
            <div id="inicioContainer" class="inicio-container">
                
            <div class="calendario">
        <div class="tzolkin-circulo" id="tzolkinCircle">
        <div>^
            <h6><strong><br>Rueda Calendarica</strong></h6>
        <div id="currentSymbol">
        <label id="currentTzolkin"></label>
        <label id="currentNumero"></label>
    </div>
</div>
            <?php
            for ($i = 0; $i < 20; $i++) {
                $tzolkin_signos = ["batz", "e", "aj", "ix", "tzikin", "ajmaq", "noj", "tijax", "kawoq", "ajpu", "imox", "iq", "aqabal", "kat", "kan", "kame", "kej", "qanil", "toj", "tzi"];
                $signo = $tzolkin_signos[$i];
                $angle = $i * (360 / 20);
                //$angle = 0;
                echo "<div class='tzolkin-signo' data-angle='{$angle}' style='transform: rotate({$angle}deg) translate(0, 400px) rotate(-{$angle}deg);'>
                        <img src='img/nahuales/{$signo}.png' alt='{$signo}'>
                      </div>";
            }
            ?>
        </div>
        <div class="numeros-circulo" id="numerosCircle" >
            <?php
            for ($i = 0; $i < 13; $i++) {
                $numero = $i + 1;
                $angle = $i * (360 / 13);
                echo "<div class='numero' data-angle='{$angle}' style='transform: rotate({$angle}deg) translate(0, -300px) rotate(-{$angle}deg);'>
                        <img src='img/numbers/{$numero}.png' alt='{$numero}'>
                      </div>";
            }
            ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    <script src="js/rueda.js"></script>
            </div>
        </section>
    <br><br>
    </div>


    <?php include "blocks/bloquesJs1.html" ?>

</body>

</html>