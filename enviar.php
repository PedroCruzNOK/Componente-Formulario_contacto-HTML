<?php
    $destino="cruzrodriguezpedroj@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\n Correo:" . $correo .  "\n Telefono:" . $telefono .  "\n Mensaje:" . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:gracias.html");
?>