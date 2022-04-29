<?php


require 'db.php';
//$Clave=$_POST['id'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$id_cargo=$_POST['id_cargo'];


$sql="INSERT INTO `tabla`(`nombre`, `usuario`, `contraseña`, `id_cargo`) VALUES('$nombre','$usuario','$contraseña','$id_cargo') ";
$result=mysqli_query($conn,$sql);

if($result)
{ 
         echo "Datos enviados correctamente";
}   
else{
    echo "Error al enviar datos";
}

?>