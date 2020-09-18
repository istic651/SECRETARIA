<?php

  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET['lo'];
  $sql = "DELETE FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  header('Location: materias.php');
?>