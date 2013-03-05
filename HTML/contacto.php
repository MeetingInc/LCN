        <?php $mi_pagina="contacto"; ?>
        <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>La Casa del Niple - Uruguay</title>
          <link rel="shortcut icon" href="favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.css">  
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/colorbox.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script>
            $(document).ready(function(){                
                $(".iframe").colorbox({iframe:true, width:705, height:389});
            });
        </script>
 
    </head>
        <!-- Header -->
        <?php include("inc/header.php"); ?>

        <div class="container data" >
            <h2 class="generic" style="margin-top:-2px; margin-bottom:26px;">Contacto</h2>
            <form class="contacto fleft" id="contacto" action="#">
                <div class="field">
                    <label for="name">Nombre (*)</label>
                    <input type="text" id="name" class="validate[required]">
                </div>
                <div class="field">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido">
                </div>
                <div class="field">
                    <label for="email">E-mail (*)</label>
                    <input type="text" id="email" class="validate[required,custom[email]]">
                </div>
                <div class="field">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono">
                </div>
                <div class="field">
                    <label for="mensaje">Mensaje (*)</label>
                    <textarea id="mensaje"></textarea>
                </div>
                <input type="submit" class="btn" value="Enviar"></input>
                <p style="margin-top:8px;">* Campos requeridos</p>
            </form>  

            <div class="datos fleft">
                <div class="telefonos">
                    <span class="tel fleft"></span>
                    <p class="fleft">Tel.: 2200 4334&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Fax: 2200 4219</p>
                </div>
                <div class="ubicacion">
                    <span class="pin fleft"></span>
                    <p class="fleft">Luis A. de Herrera 3908/10 <br> Montevideo - Uruguay</p>
                    <p class="fleft" style="margin-left:35px;">Horario: <br>Lun. a Vier. 8 a 18 y S&aacute;b. 8 a 12:30 hrs.</p>
                </div>
                <div class="mapa">
                    <iframe width="477" height="237" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.uy/maps?ie=UTF8&amp;cid=12025290321251966290&amp;q=La+Casa+del+Niple&amp;gl=UY&amp;hl=es-419&amp;t=m&amp;iwloc=A&amp;ll=-34.863103,-56.181054&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.uy/maps?ie=UTF8&amp;cid=12025290321251966290&amp;q=La+Casa+del+Niple&amp;gl=UY&amp;hl=es-419&amp;t=m&amp;iwloc=A&amp;ll=-34.863103,-56.181054&amp;spn=0.006295,0.006295&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                </div>
            </div>              
        </div> <!-- /container -->

        <!-- Footer -->
        <?php include("inc/footer.php"); ?>
