<?php
if(isset($_POST['nombredocente']) && !empty($_POST['nombredocente']))
{
        $cod = $_GET['no'];
        $nombre = $_POST["nombredocente"];
        $apellido = $_POST["apellidocente"];
        $dni = $_POST["dnidocente"];
        $domicilio = $_POST["domiciliodocente"];
        $edad = $_POST["edadocente"];
        $telefono = $_POST["telefonodocente"];
        $materiaAsignada = $_POST["materiaDocente"];
        $escondido = $_POST["escondido"];
        $enlace = mysqli_connect("localhost", "root", "","istic");
        $sql = "UPDATE profesores SET nombreProfesor= '$nombre', apellidoProfesor= '$apellido', DNIProfesor = '$dni', domicilio = '$domicilio', edad = '$edad', telefonoProfesor = '$telefono', materiaAsignada = '$materiaAsignada' WHERE Id_profesor = '$escondido'";
        $query = mysqli_query($enlace, $sql);
        header('Location: inscripcionProfesores.php');  
}
?>