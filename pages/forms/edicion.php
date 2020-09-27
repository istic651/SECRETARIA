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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Materias</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Alumnos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Inscripción Alumnos</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Modificación Alumnos</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Situación Alumnos</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Profesores</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-angle-double-right"></i> Inscripción Profesores</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-angle-double-right"></i> Modificación Profesores</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-angle-double-right"></i> Situación Profesores</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Mesa de Examenes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="general.html"><i class="fa fa-angle-double-right"></i> Inscripciones</a></li>
                                <li class="active"><a href="advanced.html"><i class="fa fa-angle-double-right"></i> Horarios Mesa Examen</a></li>
                                <li><a href="editors.html"><i class="fa fa-angle-double-right"></i> Alumnos Inscriptos</a></li>
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
                        Edición de materias
                        <small>Modique la materia elegida</small>
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
                                    <h3 class="box-title">Datos de la materia</h3>
                                </div>
                                <form action="editar.php" method="post">
                                <div class="box-body">
                                   <div class="form-group">
                                       <div class="input-group">
                                       <input type="text" id="escondido" name="escondido" value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
       echo $resul['Idmateria'];
  }
                                                   ?>
                                            ">
                                          
                                       </div>
                                   </div>
                                    <div class="form-group">
                                        <label>Docente</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-male"></i>
                                            </div>
                                            <input type="text" class="form-control" id="docenteId" name="docente" placeholder="ingrese docente" 
                                            value="
                                            <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['profesorAsignado'];
  }
                                                   ?>
                                            ">
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                       <label>Materia</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="materiaId" name="materia" placeholder="materia" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['materia'];
  }
                                                   ?>                                      
                                            "/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Año</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                              <div>
                                                <select name="anio" class="form-control form-control-sm">
                                                    <option value="
<?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['anio'];
  }
                                                   ?> 
                                                        " selected>
                                                        <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
    if($resul['anio'] == 1)
    {
        echo "primero";
    }elseif($resul['anio'] == 2)
    {
       echo "segundo"; 
    }elseif($resul['anio'] == 3)
    {
        echo "tercero";
    }
      
  }
   
                                                   ?> 
                                                        </option>
                                                         <option value="1">primero</option><option value="2">segundo</option><option value="3">tercero</option>
                                                          
                                                </select>
                                              </div>
                                        </div><!-- /.input group -->
                                      <div class="form-group">
                                       <label>Día uno</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia1" name="dia1" placeholder="dia1" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['dia1'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>

                                        <!-- /.input group -->
                                    </div>
                                        <div class="form-group">
                                       <label>Día dos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="text" class="form-control"
                                            id="dia2" name="dia2" placeholder="dia1" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['dia2'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>
 <div class="form-group">
                                       <label>hora día uno desde</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="time" class="form-control"
                                            id="hora1" name="hora1" placeholder="dia1" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['hora1'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                     <div class="form-group">
                                       <label>hora día uno hasta</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="time" class="form-control"
                                            id="hora2" name="hora2" placeholder="dia1" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['hora2'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                            <div class="form-group">
                                       <label>hora día dos desde</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="time" class="form-control"
                                            id="hora3" name="hora3" placeholder="dia3" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['hora3'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                         <div class="form-group">
                                       <label>hora día dos hasta</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-pencil-square-o"></i> 
                                            </div>
                                            <input type="time" class="form-control"
                                            id="hora4" name="hora4" placeholder="dia1" value="
      <?php
  $enlace = mysqli_connect("localhost", "root", "","istic");
  $cod = $_GET["no"];
  $sql = "SELECT * FROM materias WHERE Idmateria = '$cod'";
  $query = mysqli_query($enlace, $sql);
  while($resul=mysqli_fetch_assoc($query))
  {
      echo $resul['hora4'];
  }
                                                   ?>                                      
                                            "/>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                            
                                    </div>
                                    </div><!-- /.form group -->
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
