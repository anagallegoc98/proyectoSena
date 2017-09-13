<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bitacora- Entrar</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="<?php echo URL; ?>css/style.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo URL;?>css/font-awesome.css" rel="stylesheet"> 
  <script src="<?php echo URL;?>js/jquery.min.js"> </script>
  <script src="<?php echo URL;?>js/bootstrap.min.js"> </script>

  <style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);
    .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
    .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
    .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
    .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
    .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
    .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
    .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
    .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
    .btn-block { width: 100%; display:block; }

    * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

    html { width: 100%; height:100%; overflow:hidden; }

    body { 
     width: 100%;
     height:100%;
     font-family: 'Open Sans', sans-serif;
     background-image: url("../img/BITACORA DEL APRENDIZ.jpg");
     background-size: 50px 100px;
       background-size: 100% 100%;
   }
   .login { 
     position: absolute;
     top: 180px;
     right:550px;
     margin: -150px 0 0 -150px;
     width:300px;
     height:300px;
     border-color: black;

   }
   .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

   .banners
   {
    position: absolute;
    
    width:500px;
    height:500px;
    top: 100px;
    left: 100px;
  }

  input { 
   width: 100%; 
   margin-bottom: 10px; 
   background: rgba(0,0,0,0.3);
   border: none;
   outline: none;
   padding: 10px;
   font-size: 13px;
   color: #fff;
   text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
   border: 1px solid rgba(0,0,0,0.3);
   border-radius: 4px;
   box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
   -webkit-transition: box-shadow .5s ease;
   -moz-transition: box-shadow .5s ease;
   -o-transition: box-shadow .5s ease;
   -ms-transition: box-shadow .5s ease;
   transition: box-shadow .5s ease;
 }
 input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

</style>



<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>


<body>

     <!--  <div class="w3-content w3-section" style="max-width:500px">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (1).jpg" style="width:100%">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (2).jpg" style="width:100%">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (3).jpg" style="width:100%">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (4).jpg" style="width:100%">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (5).jpg" style="width:100%">
        <img class="mySlides" src="<?php echo URL; ?>img/etapa-productiva (6).jpg" style="width:100%">

      </div>

      <div class="w3-center">
        <div class="w3-section">
        <button id="bot1" class="w3-button" onclick="plusDivs(-1)">Anterior</button>
          <button id="bot2" class="w3-button" onclick="plusDivs(1)">Siguiente</button>
        </div> 
      </div>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function currentDiv(n) {
          showDivs(slideIndex = n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
              }
              x[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " w3-red";
            }
          </script> -->


       <!--    <style type="text/css">

            #bot1{             
              margin: 1em 0 1em 2em;
              width: 100px;
              height: 28px;
              background: #53BA9F;
              border-radius: 30px;
              position: absolute;
              top: 570px;
            }

            #bot2{       
              margin: 1em 0 1em 2em;
              width: 100px;
              height: 28px;
              background: #53BA9F;
              border-radius: 30px;
              position: absolute;
              top: 570px;
              left: 330px;
            }
          </style> -->





          <div class="login">
           <h1>INGRESAR</h1>
           <br>
           <form id="formlogin" class="form-horizontal">
            <fieldset>

              <!-- Form Name -->


              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Perfil:</label>
                <div class="col-md-4">
                 <select id="sltrol"  name="selectbasic" class="selectpicker test">
                  <option value="">Seleccionar</option>

                </select>

              </div>
            </div>
            <br/>
            <!-- Select Basic -->
            <div class="form-group">
            
              <div class="col-md-4">


<style type="text/css">
  
#txtdocumento{
border-radius: 40px;
border-color: black;
}
#txtcontrasena{
border-radius: 40px;
border-color: black;
}

#contra{
  color: black;
}

#ingresar{
background: #0E9700;
border-color: black;
font-size: 20px;
text-decoration-color: black;
}
#asd{
  text-align: center;
}

#ndoc{
  text-align: center;
}

</style>




  </div>
</div>
<br/>
<!-- Text input-->
<div id="ndoc" class="form-group">
  <label id="documento"  class="col-md-4 control-label" for="documento">Número de documento</label>  
  <div class="col-md-4">
    <input id="txtdocumento" name="documento" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div id="asd" class="form-group">
  <label id="contrasena" class="col-md-4 control-label" for="contraseña">Contraseña</label>
  <div class="col-md-4">
    <input id="txtcontrasena" name="contraseña" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ingresar"></label>
  <div class="col-md-4">

   <button id="ingresar" name="ingresar"   type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
 </div>
</div>
<br>
<!-- Password input-->


</fieldset>
</form>



</div>
<script>
  var url = "<?php echo URL; ?>";

</script>


<script src="<?php echo URL; ?>js/jquery.min.js"></script>

<script src="<?php echo URL; ?>js/scripts/login.js"></script>


</body>
</html>
