<?php
include_once ("../Modelo/Registrar.php");

if (isset($_POST['registro'])) {
     $type=$_POST['tipo'];
     $nume=$_POST['numb'];
     $nomb=$_POST['name'];
     $apelli=$_POST['lname'];
     $tele=$_POST['tel'];
     $ed=$_POST['age'];
     $correo=$_POST['email'];
     $contraseña=md5($_POST['pass']);

     $people=new Persona($type, $nume, $nomb, $apelli, $tele, $ed, $correo, $contraseña);
     $people->addPaciente();
}




?>