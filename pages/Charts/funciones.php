<?php
require_once '../forms/conexion.php';
 class Alumno {
     public $nombreAlumno;
     public $apellidoAlumno;
     public $domicilio;
     public $telefono;
     public $email;
     public $anio;
  
     public function __construct($nombreAlumno, $apellidoAlumno, $domicilio, $telefono, $email,
                                 $anio) {
      $this->nombreAlumno = $nombreAlumno;
      $this->apellidoAlumno = $apellidoAlumno;
      $this->domicilio = $domicilio;
      $this->telefono = $telefono;
      $this->email = $email;
      $this->anio = $anio;
   }
     //función para guardar datos de las materias 
     public function enviar()
     {
         $con = new Conexion();
         if($con)
        {
             $consulta = $con->prepare('INSERT INTO alumnos(nombreAlumno, apellidoAlumno, domicilio, telefono, email, anio) VALUES(:nombreAlumno, :apellidoAlumno, :domicilio, :telefono, :email, :anio)');
              $consulta->bindParam(':nombreAlumno', $this->nombreAlumno);
              $consulta->bindParam(':apellidoAlumno', $this->apellidoAlumno);
              $consulta->bindParam(':domicilio', $this->domicilio);
              $consulta->bindParam(':telefono', $this->telefono);
              $consulta->bindParam(':email', $this->email);
              $consulta->bindParam(':anio', $this->anio);
              $consulta->execute();
        
            $conexion = null;
     }
   }
}

 
//se comprueba si existen las variables en el form y que estén completas
 if(isset($_POST["nombre"]) && !empty($_POST["nombre"])and 
    isset($_POST["apellido"]) && !empty($_POST["apellido"])and  
    isset($_POST["domicilio"]) && !empty($_POST["domicilio"])and     
    isset($_POST["telefono"]) && !empty($_POST["telefono"])and
    isset($_POST["email"]) && !empty($_POST["email"]))
    {     
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $domicilio = $_POST['domicilio'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $anio = $_POST['anio'];
        $patron_texto = "/[a-zA-Z]/";
        $patron_numero = "/[0-9]/";
     //se valida que en el campo docente no tome valores como números
     if(preg_match($patron_texto, $nombre) && !preg_match($patron_numero, $nombre)){
         $enlace = mysqli_connect("localhost", "root", "", "istic");
         $sql = "SELECT email FROM alumnos";
         $resultados = mysqli_query($enlace, $sql);
  
         while($resultado=mysqli_fetch_assoc($resultados))
         {
                $rows = $resultado;
                
         }
         if($rows > 0){
             //validacion para que no se carguen materias repetidas
           foreach($rows as $row)
                 {
                    $email = $_POST['email'];
                     if($row != $email){
                        $insert= new Alumno($nombre,$apellido,$domicilio,$telefono,$email,$anio);
                        $insert->enviar();
                          header('Location: alumnos.php');
                     } else{
                         echo "fallastes";
                        
                     }
                 }
         }elseif($rows < 1)
         {
             $insert= new Alumno($nombre,$apellido,$domicilio,$telefono,$email,$anio);
                        $insert->enviar();
                        header('Location: alumnos.php');
         }
     }
    }
   
    function imprimirTabla()
    {
          $enlace = mysqli_connect("localhost", "root", "","istic");
                                $sql = "SELECT * FROM alumnos";
                                $resultados = mysqli_query($enlace, $sql); while($resultado=mysqli_fetch_assoc($resultados))
                                            { 
                                    ?>
                             
                                           <?php
                                            echo 
                                           '<tr><td>'.$resultado["IdAlumno"].'</td>
                                            <td>'.$resultado["nombreAlumno"].'</td>
                                            <td>'.$resultado["apellidoAlumno"].'</td>
                                            <td>'.$resultado["domicilio"].'</td>
                                            <td>'.$resultado["telefono"].'</td>
                                            <td>'.$resultado["email"].'</td>
                                            <td>'.'<a href="edicion.php?no='.$resultado['IdAlumno'].'"><button type="button" name = "modificar" class="btn btn-primary">'."Modificar".'</button></a>'.'</td>'
                                           .'<td>'.'<a href=eliminar.php?lo='.$resultado['IdAlumno'].'"><button type="button" name ="elimina" class="btn btn-danger" >'."Eliminar".'</button></a>'.'</td>'
                                           .
                                           '</tr>';
                            
                                    ?>
                                <?php

                        
                                            }

        } 
?>