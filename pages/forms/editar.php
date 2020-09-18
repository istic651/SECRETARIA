<?php
if(isset($_POST['docente']) && !empty($_POST['docente'])
  && isset($_POST['materia']) && !empty($_POST['materia'])
  && isset($_POST['anio']) && !empty($_POST['anio']))
{
        $enlace = mysqli_connect("localhost", "root", "","istic");
        $cod = $_GET['no'];
        $profesor = $_POST['docente'];
        $materia = $_POST['materia'];
        $anio = $_POST['anio'];
        $escondido = $_POST['escondido'];
        $sql = "UPDATE materias SET profesorAsignado= '$profesor', materia= '$materia', anio='$anio' WHERE Idmateria ='$escondido'";
        $query = mysqli_query($enlace, $sql);
        header('Location: materias.php');  
}
?>