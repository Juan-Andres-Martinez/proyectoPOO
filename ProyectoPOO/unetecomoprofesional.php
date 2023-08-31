<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario</title>
</head>
<body>

<div class="formulario">
  <h2>Formulario de Contacto</h2>
  <form action="#" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
    
    <button type="submit">Enviar</button>
  </form>
</div>


<?php include("./templates/footer.php");?>