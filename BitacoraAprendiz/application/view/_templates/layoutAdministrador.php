<!DOCTYPE HTML>
<html>
<head>
  <title>Bitacora</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="<?php echo URL; ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="<?php echo URL; ?>css/style.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo URL;?>css/font-awesome.css" rel="stylesheet"> 
  <script src="<?php echo URL;?>js/jquery.min.js"> </script>
  <script src="<?php echo URL;?>js/bootstrap.min.js"> </script>


  <!-- Mainly scripts -->
  <script src="<?php echo URL;?>js/jquery.metisMenu.js"></script>
  <script src="<?php echo URL;?>js/jquery.slimscroll.min.js"></script>
  <!-- Custom and plugin javascript -->
  <link href="<?php echo URL?>css/custom.css" rel="stylesheet">
  <script src="<?php echo URL;?>js/custom.js"></script>
  <script src="<?php echo URL;?>js/screenfull.js"></script>
  
  <script>
    $(function () {
      $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

      if (!screenfull.enabled) {
        return false;
      }

      

      $('#toggle').click(function () {
        screenfull.toggle($('#container')[0]);
      });
      

      
    });
  </script>



</head>
<body>
  <div id="wrapper">

    <nav class="navbar-default navbar-static-top" role="navigation">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1> <a class="navbar-brand" >Bitacoras</a></h1>         
    </div>
    <div class=" border-bottom">
      <div class="full-left">
      </div>


      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="drop-men" >
        <ul class=" nav_1">

          <li class="dropdown at-drop">

          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">ADMINISTRADOR<i class="caret"></i></span><img src="<?php echo URL; ?>img/wo.jpg"></a>
            <ul class="dropdown-menu " role="menu">
             <li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-envelope"></i>Cerrar Sesion</a></li>

           </ul>
         </li>

       </ul>
     </div><!-- /.navbar-collapse -->
     <div class="clearfix">

     </div>

     <div class="navbar-default sidebar" role="navigation">

      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">


          <li><a href="<?php echo URL;?>admin/administrarAprendiz" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Aprendices</a></li>

          <li><a href="<?php echo URL;?>admin/administrarFuncionario" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Docentes</a></li>

          <li><a href="<?php echo URL;?>admin/administrarEmpresa" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Empresas</a></li>

    

      <li><a href="<?php echo URL;?>admin/administrarCadena" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Cadena</a></li>

  </li>
  <ul class="nav nav-second-level">
    <li><a href="<?php echo URL;?>admin/administrarPrograma" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Programas</a></li>

    <li><a href="<?php echo URL;?>admin/administrarFicha" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Fichas</a></li>



  </ul>
</li>


</ul>
</div>
</div>
</nav>
<div id="page-wrapper" class="gray-bg dashbard-1">
 <div class="content-main">


  <!--faq-->
  <div class="blank">

   <?php require content; ?>

 </div>

 <div class="copy">
  <p> &copy; 2016 Minimal. All Rights Reserved</div>
  </div>
</div>
<div class="clearfix"> </div>
</div>


<script>
  var url = "<?php echo URL; ?>";
</script>


<!---->
<!--scrolling js-->
<script src="<?php echo URL; ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo URL; ?>js/scripts.js"></script>
<!--//scrolling js-->


<!--Alertas-->
  <!--   <script src="<?php echo URL;?>js/alertify.min.js"> </script>

     <script src="<?php echo URL;?>plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL;?>plugins/datatables/js/dataTables.bootstrap.min.js"></script>
  -->

  <!--  -->
  <script src="<?php echo URL; ?>js/scripts/aprendiz.js"></script>
  <script src="<?php echo URL; ?>js/scripts/cadena.js"></script>
  <script src="<?php echo URL; ?>js/scripts/centro.js"></script>
  <script src="<?php echo URL; ?>js/scripts/empresa.js"></script>
  <script src="<?php echo URL; ?>js/scripts/funcionario.js"></script>
  <script src="<?php echo URL; ?>js/scripts/admin.js"></script>
  <script src="<?php echo URL; ?>js/scripts/listarSelects.js"></script>








  <?php 
  if (isset($js)) {
    echo $js;
  };
  ?>
</body>
</html>
