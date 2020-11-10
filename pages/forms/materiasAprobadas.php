<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestión | ISTIC</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="../../css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="../../css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="../../css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../css/estilos.css">

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                ISTIC
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Juan</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar"/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   
                    <ul class="sidebar-menu">

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Horarios Clases</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="horariosPrimerAnio.php"><i class="fa fa-angle-double-right"></i> Primer Año </a></li>
                                <li><a href="horariosSegundoAnio.php"><i class="fa fa-angle-double-right"></i> Segundo Año </a></li>
                                <li><a href="horariosTercerAnio.php"><i class="fa fa-angle-double-right"></i> Tercer Año</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Alumnos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="inscripcionProfesores.php"><i class="fa fa-angle-double-right"></i> Inscripción Alumnos</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Profesores</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="inscripcionProfesores.php"><i class="fa fa-angle-double-right"></i> Inscripción Profesores</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Materias</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="materias.php"><i class="fa fa-angle-double-right"></i> Materias</a></li>
                                <li><a href="materiasAprobadas.php"><i class="fa fa-angle-double-right"></i> Materias Aprobadas</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Materias Aprobadas
                        <small>Complete el formulario por favor</small>

                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                  
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Datos del Alumno</h3>
                                </div>
                                <form action="materiasAprobadas.php" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Año</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                              <div>
                                                <select name="anio" class="form-control form-control-sm">
                                                          <option value="#" selected>elija año</option>
                                                          <option value="1">Primero</option>
                                                          <option value="2">Segundo</option>
                                                          <option value="3">Tercero</option>
                                                        
                                                </select>
                                              </div>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                        <div>
                            <?php
                                                   
                                                    if(isset($_POST['anio']) and !empty($_POST['anio']))
                                                    {
                                                         $anio = $_POST['anio'];
                                                        if($anio == 1 or 2 or 3)
                                                            {
                                                       ?>
                                                        <div class="form-group">
                                        <label>Alumno</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                              
                                                <select name="alumno" class="form-control form-control-sm">
                                                          <option value="#" selected>Elija alumno</option>
                                                          <?php 
                                                            if($anio == 1){
      $enlace = mysqli_connect("localhost", "root", "","istic");
      $sql = "SELECT IdAlumno, nombreAlumno, apellidoAlumno FROM alumnos WHERE anio = 1";
      $query = mysqli_query($enlace, $sql);
      while($resul=mysqli_fetch_assoc($query))
      {
          echo'<option value="'.$resul['IdAlumno'].'">'.$resul['nombreAlumno']." ".$resul['apellidoAlumno'].'</option>';
      }
                                                            }elseif($anio == 2)
    {
      $enlace = mysqli_connect("localhost", "root", "","istic");
      $sql = "SELECT IdAlumno, nombreAlumno, apellidoAlumno FROM alumnos WHERE anio = 2";
      $query = mysqli_query($enlace, $sql);
      while($resul=mysqli_fetch_assoc($query))
      {
          echo'<option value="'.$resul['IdAlumno'].'">'.$resul['nombreAlumno']." ".$resul['apellidoAlumno'].'</option>';
      }
                                                            }elseif($anio == 3)
    {
      $enlace = mysqli_connect("localhost", "root", "","istic");
      $sql = "SELECT IdAlumno, nombreAlumno, apellidoAlumno FROM alumnos WHERE anio = 3";
      $query = mysqli_query($enlace, $sql);
      while($resul=mysqli_fetch_assoc($query))
      {
          echo'<option value="'.$resul['IdAlumno'].'">'.$resul['nombreAlumno']." ".$resul['apellidoAlumno'].'</option>';
      }
                                                            }
                                                        
    
        ?>                 
                                                </select>
                                              
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Materias</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                             
                                                <select name="materia" class="form-control form-control-sm">
                                                          <option value="#" selected>Materia</option>
                                                          <?php 
      $enlace = mysqli_connect("localhost", "root", "","istic");
      $sql = "SELECT Idmateria, materia FROM materias";
      $query = mysqli_query($enlace, $sql);
      while($resul=mysqli_fetch_assoc($query))
      {
          echo'<option value="'.$resul['Idmateria'].'">'.$resul['materia'].'</option>';
      }
        ?>          
                                                </select>
                                             
                                        </div>
                                    </div>
          
                                    
                                    
                                   <div class="form-group">
                                       <label>Nota uno </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia1" name="notauno" placeholder="Nota uno"/>
                                        </div><!-- /.input group -->  
                                    </div>
                                    <div class="form-group">
                                       <label>Nota dos </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia2" name="notados" placeholder="Nota dos"/>
                                        </div><!-- /.input group -->  
                                    </div>
                                    <div class="form-group">
                                       <label>Nota tres </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia1" name="notatres" placeholder="Nota tres"/>
                                        </div><!-- /.input group -->  
                                    </div>
                                    <div class="form-group">
                                       <label>Nota cuatro </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia1" name="notacuatro" placeholder="Nota cuatro"/>
                                        </div><!-- /.input group -->  
                                    </div>
                                    <div class="form-group">
                                       <label>Nota Final </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia1" name="notafinal" placeholder="Nota Final"/>
                                        </div><!-- /.input group -->  
                                    </div>
                                                 
                                                           
                                                       <?php
                                                        }
                                                    }
                            require_once 'conexion.php';
 class aprobadas {
     public $idmateria;
     public $idalumno;
     public $notauno;
     public $notados;
     public $notatres;
     public $notaCuatro;
     public $notafinal;
  
     public function __construct($id_materia, $id_alumno, $nota_uno, $nota_dos, $nota_tres, $nota_cuatro, $nota_final)
     {
      $this->idmateria = $id_materia;
      $this->idalumno = $id_alumno;
      $this->notauno = $nota_uno;
      $this->notados = $nota_dos;
      $this->notatres= $nota_tres;
      $this->notaCuatro = $nota_cuatro;
      $this->notafinal = $nota_final;
   
   }
     //función para guardar datos de los docentes 
     public function enviar()
     {
         $con = new Conexion();
         if($con)
        {
             $consulta = $con->prepare('INSERT INTO materiasaprobadas(id_materia, id_alumno, nota_uno, nota_dos, nota_tres, nota_cuatro, nota_final) VALUES(:id_materia, :id_alumno, :nota_uno, :nota_dos, :nota_tres, :nota_cuatro, :nota_final)');
             $consulta->bindParam(':id_materia', $this->idmateria);
             $consulta->bindParam(':id_alumno', $this->idalumno);
             $consulta->bindParam(':nota_uno', $this->notauno);
             $consulta->bindParam(':nota_dos', $this->notados);
             $consulta->bindParam(':nota_tres', $this->notatres);
             $consulta->bindParam(':nota_cuatro', $this->notacuatro);
             $consulta->bindParam(':nota_final', $this->notafinal);
             $consulta->execute();
             
             $conexion = null;
     }
   }
 
 }
//se comprueba si existen las variables en el form y que estén completas
 if(isset($_POST["notauno"]) && !empty($_POST["notauno"]))
    {     
        $alumno = $_POST["alumno"];
        $materia = $_POST["materia"];
        $notauno = $_POST["notauno"];
        $notados = $_POST["notados"];
        $notatres = $_POST["notatres"];
        $notacuatro = $_POST["notacuatro"];
        $notafinal = $_POST["notafinal"];
        $patron_texto = "/[a-zA-Z]/";
        $patron_numero = "/[0-9]/";
     
     //se valida que en el campo docente no tome valores como números
                           {
     if(!preg_match($patron_texto, $notauno) && preg_match($patron_numero, $notauno)){
        
                   $insert= new aprobadas($materia,$alumno,$notauno,$notados,$notatres,$notacuatro,$notafinal);
                   $insert->enviar();
               
     
         }
                           }
 }
                                                    ?>
                        </div>
                                </div>
                                    <div class="buttons">
                                       <div class="buttonsuno">
                                        <button type="submit" class="btn btn-primary" name="uno">Enviar</button>
                                        </div>
                                    </div>         
                                </form>
                                
                          
                            </div><!-- /.box -->
                        </div><!-- /.col (left) -->
                    </div><!-- /.row --> 
                      <div>
                       <form action="aprobadas.php" method="post">
                       <div>
                        <div class="buttonsdos">
                                        <button type="submit" class="btn btn-primary" name="enviamos">upload</button> 
                        </div> 
                       </div>                       

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="../../js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../../js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../../js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="../../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="../../js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="../../js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- Page script -->
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>

    </body>
</html>