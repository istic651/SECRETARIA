<?php

  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET['lo'];
  $sql = "DELETE FROM profesores WHERE Id_profesor = '$cod'";
  $query = mysqli_query($enlace, $sql);
  header('Location: Inscripcionprofesores.php');
?>