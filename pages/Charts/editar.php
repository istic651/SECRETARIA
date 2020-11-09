<?php
if(isset($_POST['nombre']) && !empty($_POST['nombre'])
  && isset($_POST['apellido']) && !empty($_POST['apellido'])
  && isset($_POST['domicilio']) && !empty($_POST['domicilio'])
  && isset($_POST['telefono']) && !empty($_POST['telefono'])
  && isset($_POST['email']) && !empty($_POST['email']))
{
        $enlace = mysqli_connect("localhost", "root", "","istic");
        $cod = $_GET['no'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $domicilio = $_POST['domicilio'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $escondido = $_POST['escondido'];
        $sql = "UPDATE alumnos SET nombreAlumno= '$nombre', apellidoAlumno= '$apellido', domicilio='$domicilio', telefono='$telefono', email= '$email' WHERE IdAlumno ='$escondido'";
        $query = mysqli_query($enlace, $sql);
        header('Location: alumnos.php');  
}
?>