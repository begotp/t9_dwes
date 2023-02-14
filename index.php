<?php

require_once('GeneradorUsuariosAleatorios.php');

$generadorUsuarios = new GeneradorUsuariosAleatorios();
$usuarioGenerado = $generadorUsuarios->getUsuarioAleatorio();

//var_dump($usuarioGenerado);

$genero = $usuarioGenerado['gender'];

if ($genero == 'male') {
    $genero = 'Masculino';
} else if ($genero == 'female') {
    $genero = 'Femenino';
}
$nombre = $usuarioGenerado['name']['first'];
$apellido = $usuarioGenerado['name']['last'];

$ciudad = $usuarioGenerado['location']['city'];
$pais = $usuarioGenerado['location']['country'];

$imagen = $usuarioGenerado['picture']['large'];
$edad = $usuarioGenerado['dob']['age'];

?>
<style>
    @import url(estilo.css);

</style>
<html>
<header>
    <title>Tarea9_DWES</title>
</header>
<body>
<header>
    <h1><?= $nombre . ' ' . $apellido ?></h1>
    <hr>
</header>
   <div>
    <img class="img" src="<?= $imagen ?>" alt="<?= $nombre . ' ' . $apellido ?>">
</div>
    
    <hr id ="vertical" width="1" size="1350">

<section>
    <div><p>G&eacute;nero: <span class="txt"><?= $genero ?></span></p></div>
    <div><p>Ciudad: <span class="txt"><?= $ciudad ?></span></p></div>
    <div><p>Pa&iacute;s: <span class="txt"><?= $pais ?></span></p></div>
    <div><p>Edad: <span class="txt"><?= $edad ?></span></p></div>
</section>

</body>
</html>

