<?php
header('Content-type: application/xls');

// Se llamará notasalumnos.xls
header('Content-Disposition: attachment; filename="notasalumnos.xls"');
$mysqli = new mysqli("localhost", "root", "", "istic");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

//$consulta = "SELECT * FROM materiasaprobadas";
$consulta = "SELECT materiasaprobadas.nota_final, alumnos.nombreAlumno, alumnos.apellidoAlumno, alumnos.anio, materias.materia FROM materiasaprobadas INNER JOIN alumnos ON materiasaprobadas.id_alumno = alumnos.IdAlumno INNER JOIN materias ON materiasaprobadas.id_materia = materias.IDmateria";
?>
<table>
      <th scope="col">Nombre alumno</th>
      <th scope="col">Apellido alumno</th>
      <th scope="col">Año alumno</th>
      <th scope="col">Materia aprobada</th>
      <th scope="col">Nota final</th>
      
<?php
if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila["nombreAlumno"]."</td>";
        echo "<td>".$fila["apellidoAlumno"]."</td>";
        echo "<td>".$fila["anio"]."</td>";
        echo "<td>".$fila["materia"]."</td>";
        echo "<td>".$fila["nota_final"]."</td>";
        echo "</tr>";
    }
}
?>
</table>
<?php
?>
  
