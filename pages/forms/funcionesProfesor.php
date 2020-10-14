<?php
require_once 'conexion.php';
 class inscripcionProfesores {
     public $nombreProfesor;
     public $apellidoProfesor;
     public $DNIProfesor;
     public $domicilio;
     public $edad;
     public $telefonoProfesor;
     public $materiaAsignada;
  
     public function __construct($nombreProfesor, $apellidoProfesor, $DNIProfesor, $domicilio, $edad, $telefonoProfesor, $materiaAsignada)
     {
      $this->nombreProfesor = $nombreProfesor;
      $this->apellidoProfesor = $apellidoProfesor;
      $this->DNIProfesor = $DNIProfesor;
      $this->domicilio = $domicilio;
      $this->edad = $edad;
      $this->telefonoProfesor = $telefonoProfesor;
      $this->materiaAsignada = $materiaAsignada;
   
   }
     //función para guardar datos de los docentes 
     public function enviar()
     {
         $con = new Conexion();
         if($con)
        {
             $consulta = $con->prepare('INSERT INTO profesores(nombreProfesor, apellidoProfesor, DNIProfesor, domicilio, edad, telefonoProfesor, materiaAsignada) VALUES(:nombreProfesor, :apellidoProfesor, :DNIProfesor, :domicilio, :edad, :telefonoProfesor, :materiaAsignada)');
             $consulta->bindParam(':nombreProfesor', $this->nombreProfesor);
             $consulta->bindParam(':apellidoProfesor', $this->apellidoProfesor);
             $consulta->bindParam(':DNIProfesor', $this->DNIProfesor);
             $consulta->bindParam(':domicilio', $this->domicilio);
             $consulta->bindParam(':edad', $this->edad);
             $consulta->bindParam(':telefonoProfesor', $this->telefonoProfesor);
             $consulta->bindParam(':materiaAsignada', $this->materiaAsignada);
             $consulta->execute();
             
             $conexion = null;
     }
   }
 
 }
//se comprueba si existen las variables en el form y que estén completas
 if(isset($_POST["Nombre"]) && !empty($_POST["Nombre"])and isset($_POST["Apellido"]) && !empty($_POST["Apellido"]) and isset($_POST["Dni"]) && !empty($_POST["Dni"]) and isset($_POST["Domicilio"]) && !empty($_POST["Domicilio"])and isset($_POST["edadDocente"]) && !empty($_POST["edadDocente"])and isset($_POST["telefonoDocente"]) && !empty($_POST["telefonoDocente"])and isset($_POST["MateriaAsignada"]) && !empty($_POST["MateriaAsignada"]))
    {     
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $dni = $_POST["Dni"];
        $domicilio = $_POST["Domicilio"];
        $edad = $_POST["edadDocente"];
        $telefono = $_POST["telefonoDocente"];
        $MateriaAsignada = $_POST["MateriaAsignada"];
        $patron_texto = "/[a-zA-Z]/";
        $patron_numero = "/[0-9]/";
     //se valida que en el campo docente no tome valores como números
     if(preg_match($patron_texto, $nombre) && !preg_match($patron_numero, $nombre)){
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT DNIProfesor FROM profesores";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado=mysqli_fetch_assoc($resultados))
         {
                 $rows = $resultado;
                
         }
         if($rows > 0){
             //validacion para que no se carguen docentes repetidos
           foreach($rows as $row)
                 {   
                   $DNI = $_POST['Dni'];
                   if($row != $DNI){
                   $insert= new inscripcionProfesores($nombre,$apellido,$dni,$domicilio,$edad,$telefono, $MateriaAsignada);
                   $insert->enviar();
               header('Location: inscripcionProfesores.php');
               }else{
                         echo "fallastes";
                         header('Location: inscripcionProfesores.php');
                     }
               }
         }elseif($rows < 1)
         {
             $insert= new inscripcionProfesores($nombre,$apellido,$dni,$domicilio,$edad,$telefono,$MateriaAsignada);
              $insert->enviar();
              header('Location: inscripcionProfesores.php');
           }
       }
    }
   function imprimirTabla()
    {
                                $enlace = mysqli_connect("localhost", "root", "","istic");
                                $sql = "SELECT * FROM profesores";
                                $resultados = mysqli_query($enlace, $sql); 
       while($resultado=mysqli_fetch_assoc($resultados))
                                            { 
                                    ?>
                             
                                           <?php
                                            echo 
                                           '<tr><td>'.$resultado["Id_profesor"].'</td>
                                            <td>'.$resultado["nombreProfesor"].'</td>
                                            <td>'.$resultado["apellidoProfesor"].'</td>
                                            <td>'.$resultado["materiaAsignada"].'</td>
                                            <td>'.'<a href="edicionProfe.php?no='.$resultado['Id_profesor'].'&ma='.$resultado['materiaAsignada'].'"><button type="button" name = "modificar" class="btn btn-primary">'."modificar".'</button></a>'.'</td>'
                                           .'<td>'.'<a href=eliminarProfesor.php?lo='.$resultado['Id_profesor'].'"><button type="button" name ="elimina" class="btn btn-danger" >'."Eliminar".'</button></a>'.'</td>'
                                           .
                                           '</tr>';
                            
                                    ?>
                                <?php

                        
                                            }

        } 
 
?>
  
