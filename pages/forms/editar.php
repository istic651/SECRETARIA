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
        $dia1 = $_POST['dia1'];
        $dia2 = $_POST['dia2'];
        $hora1 = $_POST['hora1'];
        $hora2 = $_POST['hora2'];
        $hora3 = $_POST['hora3'];
        $hora4 = $_POST['hora4'];
        $escondido = $_POST['escondido'];
        $sql = "UPDATE materias SET profesorAsignado= '$profesor', materia= '$materia', anio='$anio', dia1='$dia1', dia2='$dia2', hora1='$hora1', hora2='$hora2', hora3='$hora3', hora4='$hora4' WHERE Idmateria ='$escondido'";
        $query = mysqli_query($enlace, $sql);
        header('Location: materias.php');  
}
?>