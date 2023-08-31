<?php 
require_once("./clases.php");

// echo 'Hola '.$_POST['Nombres'].', tu edad es: '.$_POST['Age'];
// $hola = $_POST['LastName'].'<br/>';

$obj1 = new Persona($_POST['Nombres'],$_POST['Apellidos'],$_POST['Correo'],$_POST['Telefono'],$_POST['Perfil']);
echo $obj1->mostrarInfo().'<br/>';
// var_dump($_POST);
// echo"hola mundoo";
?>