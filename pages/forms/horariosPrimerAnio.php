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
        <link rel="stylesheet" href="../../css/style.css">

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
                                <li><a href="../Charts/alumnos.php"><i class="fa fa-angle-double-right"></i> Inscripción Alumnos</a></li>
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
                        ISTIC
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Horarios Primer Año</h3>
                                </div>
                                  <div class="box box-warning">
                                <div class="box-header">                           
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                </div><!-- /.box-body -->
                                <div class="horarios">
                                <div class="titulo"><h1>Horarios segundo cuatrimestre</h1></div>
                                <div class="primerCuatri">
                                <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Horarios</th>
      <th scope="col">Lunes</th>
      <th scope="col">Martes</th>
      <th scope="col">Miercoles</th>
      <th scope="col">Jueves</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">18:30/19:10</th>
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "18:30:00" and 
             $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>

    <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" and $resultado['hora1'] == "18:30:00" and 
             $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>

    <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" || $resultado['dia2'] == "miercoles" and $resultado['hora1'] == "18:30:00" || $resultado['hora2'] == "18:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
    </td>

         <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" || $resultado['dia2'] == "jueves" and $resultado['hora1'] == "18:30:00" || $resultado['hora3'] == "18:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
    </td>

                                    
    </tr>
   <tr>
      <th scope="row">19:10/19:45</th>
       <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>
          <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" || $resultado['dia2'] == "martes" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "19:45:00" and 
              $resultado['anio'] == 1)
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>
    <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" || $resultado['dia2'] == "miercoles" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" || $resultado['hora3'] == "18:30:00" and $resultado['hora4'] == "20:35:00" and 
              $resultado['anio'] == 1)
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>
        <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" || $resultado['dia2'] == "jueves" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" || $resultado['hora3'] == "18:30:00" and $resultado['hora4'] == "20:35:00" and 
              $resultado['anio'] == 1)
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
        
          ?>
        </td>
                                    
    </tr>
    <tr>
      <th scope="row">19:55/20:35</th>
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" and $resultado['anio'] == 1 )
            {

                   echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" and $resultado['hora1'] == "19:55:00" and $resultado['hora2'] == "21:10:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" || $resultado['dia2'] == "miercoles" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" || $resultado['hora3'] == "18:30:00" and $resultado['hora4'] == "20:35:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" || $resultado['dia2'] == "jueves" and $resultado['hora1'] == "18:30:00" and $resultado['hora2'] == "20:35:00" || $resultado['hora3'] == "18:30:00" and $resultado['hora4'] == "20:35:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    </tr>
    <tr>
      <th scope="row">20:35/21:15</th>
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
        <td>
        <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" and $resultado['hora1'] == "19:55:00" and $resultado['hora2'] == "21:10:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
         <td>
        <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
        <td>
        <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
            elseif($resultado['dia2'] == "jueves" and $resultado['hora3'] == "20:35:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
        
    </tr>
    <tr>
      <th scope="row">21:15/22:30</th>
     <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" and $resultado['hora1'] == "21:15:00" and $resultado['hora2'] == "22:30:00")
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }elseif($resultado['dia2'] == "martes" and $resultado['hora3'] == "21:15:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {
               echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }
        }
          ?>
        </td>
       <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00")
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }elseif($resultado['dia2'] == "miercoles" and $resultado['hora3'] == "20:35:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {
               echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }
        }
          ?>
        </td>
      <td>
        <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
            elseif($resultado['dia2'] == "jueves" and $resultado['hora3'] == "20:35:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    </tr>
     <tr>
      <th scope="row">21:15/22:30</th>
     <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "lunes" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
      <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "martes" and $resultado['hora1'] == "21:15:00" and $resultado['hora2'] == "22:30:00")
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }elseif($resultado['dia2'] == "martes" and $resultado['hora3'] == "21:15:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {
               echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }
        }
          ?>
        </td>
       <td>
      <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "miercoles" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00")
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }elseif($resultado['dia2'] == "miercoles" and $resultado['hora3'] == "20:35:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {
               echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            }
        }
          ?>
        </td>
      <td>
        <?php 
        $enlace = mysqli_connect("localhost", "root", "", "istic");
        $sql = "SELECT * FROM materias";
        $resultados = mysqli_query($enlace, $sql);
        while($resultado = mysqli_fetch_assoc($resultados))
        {
            if($resultado['dia1'] == "jueves" and $resultado['hora1'] == "20:35:00" and $resultado['hora2'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
            elseif($resultado['dia2'] == "jueves" and $resultado['hora3'] == "20:35:00" and $resultado['hora4'] == "22:30:00" and $resultado['anio'] == 1 )
            {

                    echo $resultado['materia']."<br>".$resultado['profesorAsignado'];
            } 
        }
          ?>
        </td>
    </tr>
  </tbody>
</table>
                                    </div>
                                      </div>
                            </div><!-- /.box -->
                                
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