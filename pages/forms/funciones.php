<?php
require_once 'conexion.php';
 class Materias {
     public $profesorAsignado;
     public $materia;
     public $anio;
  
     public function __construct($profesorAsignado, $materia, $anio) {
      $this->profesorAsignado = $profesorAsignado;
      $this->materia = $materia;
      $this->anio = $anio;
   }
     //función para guardar datos de las materias 
     public function enviar()
     {
         $con = new Conexion();
         if($con)
        {
             $consulta = $con->prepare('INSERT INTO materias(profesorAsignado, materia,    anio) VALUES(:profesorAsignado, :materia, :anio)');
              $consulta->bindParam(':profesorAsignado', $this->profesorAsignado);
              $consulta->bindParam(':materia', $this->materia);
              $consulta->bindParam(':anio', $this->anio);
              $consulta->execute();
        
            $conexion = null;
     }
   }
 
 }
//se comprueba si existen las variables en el form y que estén completas
 if(isset($_POST["docente"]) && !empty($_POST["docente"])and 
    isset($_POST["materia"]) && !empty($_POST["materia"])and     
    isset($_POST["anio"]) && !empty($_POST["anio"]))
    {     
        $docente = $_POST['docente'];
        $materia = $_POST['materia'];
        $anio = $_POST['anio'];
        $patron_texto = "/[a-zA-Z]/";
        $patron_numero = "/[0-9]/";
     //se valida que en el campo docente no tome valores como números
     if(preg_match($patron_texto, $docente) && !preg_match($patron_numero, $docente)){
         $enlace = mysqli_connect("localhost", "root", "", "istic");
         $sql = "SELECT materia FROM materias";
         $resultados = mysqli_query($enlace, $sql);
         while($resultado=mysqli_fetch_assoc($resultados))
         {
                 $rows = $resultado;
                
         }
         if($rows > 0){
             //validacion para que no se carguen materias repetidas
           foreach($rows as $row)
                 {
               $materias = $_POST['materia'];
                     if($row != $materias){
                        $insert= new Materias($docente,$materia,$anio);
                        $insert->enviar();
                          header('Location: materias.php');
                     } else{
                         echo "fallastes";
                         header('Location: materias.php');
                     }
                 }
         }elseif($rows < 1)
         {
             $insert= new Materias($docente,$materia,$anio);
                        $insert->enviar();
                        header('Location: materias.php');
         }
     }
    }
   
    function imprimirTabla()
    {
          $enlace = mysqli_connect("localhost", "root", "","istic");
                                $sql = "SELECT * FROM materias";
                                $resultados = mysqli_query($enlace, $sql); while($resultado=mysqli_fetch_assoc($resultados))
                                            { 
                                    ?>
                             
                                           <?php
                                            echo 
                                           '<tr><td>'.$resultado["Idmateria"].'</td>
                                            <td>'.$resultado["profesorAsignado"].'</td>
                                            <td>'.$resultado["materia"].'</td>
                                            <td>'.$resultado["anio"].'</td>
                                            <td>'.'<a href="edicion.php?no='.$resultado['Idmateria'].'"><button type="button" name = "modificar" class="btn btn-primary">'."modificar".'</button></a>'.'</td>'
                                           .'<td>'.'<a href=eliminar.php?lo='.$resultado['Idmateria'].'"><button type="button" name ="elimina" class="btn btn-danger" >'."Eliminar".'</button></a>'.'</td>'
                                           .
                                           '</tr>';
                            
                                    ?>
                                <?php

                        
                                            }

        } 
  
       

  /*
                                       echo 
                                           '<tr><td>'.$resultado["Idmateria"].'</td>
                                            <td>'.$resultado["profesorAsignado"].'</td>
                                            <td>'.$resultado["materia"].'</td>
                                            <td>'.$resultado["anio"].'</td>
                                            <td>'.'<a href="edicion.php?no='.$resultado['Idmateria'].'"><button type="button" class="btn btn-primary">'."modificar".'</button></a>'.'</td>'
                                           .'<td>'.'<button type="button" name = "elimina" class="btn btn-danger" >'."Eliminar".'</button></a>'.'</td>'
                                           .
                                           '</tr>';
                                    if($_POST['elimina'])
        {
            $enlace = mysqli_connect("localhost", "root", "","istic");
            $cod = $_POST['CodMateria'];
            $sql = "DELETE FROM materias";
            $query = mysqli_query($enlace, $sql);
            header('Location: materias.php');
        } 
        */
       
?>