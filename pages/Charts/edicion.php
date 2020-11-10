<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestión | Istic</title>
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
        <link rel="stylesheet" href="../../css/edicion.css">

    </head>
    <body class="skin-black">
  
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
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
                                <li class="active"><a href="../forms/horariosPrimerAnio.php"><i class="fa fa-angle-double-right"></i>Primer Año</a></li>
                                <li><a href="../forms/horariosSegundoAnio.php"><i class="fa fa-angle-double-right"></i>Segundo Año</a></li>
                                <li><a href="../forms/horariosTercerAnio.php"><i class="fa fa-angle-double-right"></i>Tercer Año</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Alumnos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="alumnos.php"><i class="fa fa-angle-double-right"></i>Inscripcion Alumnos</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Profesores</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="../forms/inscripcionProfesores.php"><i class="fa fa-angle-double-right"></i>Inscripcion Profesores</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Materias</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/materias.php"><i class="fa fa-angle-double-right"></i> Materias</a></li>
                                <li><a href="../forms/materiasAprobadas.php"><i class="fa fa-angle-double-right"></i> Materias Aprobadas</a></li>
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
                        Edición de alumnos
                        <small>Modique el alumno elegido</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Advanced Elements</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Datos del alumno</h3>
                                </div>
                                <form action="editar.php" method="post">
                                <div class="box-body">
                                   <div class="form-group">
                                       <div class="input-group">
                                       <input type="text" id="escondido" name="escondido" value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
       echo $resul['IdAlumno'];
  }
                                                   ?>
                                            ">
                                          
                                       </div>
                                   </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-male"></i>
                                            </div>
                                            <input type="text" class="form-control" id="nombreId" name="nombre" placeholder="Ingrese nombre" 
                                            value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['nombreAlumno'];
  }
                                                   ?>
                                            ">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                       <label>Apellido</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="apellidoId" name="apellido" placeholder="Ingrese materia" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['apellidoAlumno'];
  }
                                                   ?>                                      
                                            "/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Domicilio</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-male"></i>
                                            </div>
                                            <input type="text" class="form-control" id="domicilioId" name="domicilio" placeholder="Ingrese domicilio" 
                                            value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['domicilio'];
  }
                                                   ?>
                                            ">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-male"></i>
                                            </div>
                                            <input type="text" class="form-control" id="telefonoId" name="telefono" placeholder="Ingrese telefono" 
                                            value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['telefono'];
  }
                                                   ?>
                                            ">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-male"></i>
                                            </div>
                                            <input type="text" class="form-control" id="emailId" name="email" placeholder="Ingrese email" 
                                            value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM alumnos WHERE IdAlumno = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['email'];
  }
                                                   ?>
                                            ">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                  <!-- /.form group -->
   <div class="buttons">
                                        <div>
                                           <button type="submit" class="btn btn-primary" name="actualiza">Enviar</button>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                 
                                </form>
                            </div><!-- /.box -->
                        </div><!-- /.col (left) -->
                    </div><!-- /.row -->                    

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
