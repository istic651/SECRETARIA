<?php

  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET['lo'];
  $sql = "DELETE FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  header('Location: alumnos.php');
?>