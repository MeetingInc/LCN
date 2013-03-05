        <?php $mi_pagina="inicio"; ?>
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
        <div class="container">

            <!-- Slider -->
            <div class="hero-unit">
                <section class="slider">
                    <div class="flexslider">
                      <ul class="slides">
                        <li>
                            <img src="img/slider1.png" />
                            </li>
                            <li>
                            <img src="img/slider1.png" />
                            </li>
                            <li>
                            <img src="img/slider1.png" />
                            </li>
                      </ul>
                    </div>
                </section>
            </div>

            <!-- Example row of columns -->
            <h2>Lineas de Productos</h2>
            <div class="row">
                    <div class="span3">
                <a href="#">
                        <div class="contentRelative">
                            <img src="img/lcn1.png" alt="">
                            <a href="#" class="linkHome">Hogar</a>
                        </div>
                </a>
                    </div>
                    <div class="span3">
                <a href="#">
                        <div class="contentRelative">
                            <img src="img/lcn2.png" alt="">
                            <a href="#" class="linkHome">Sanitaria</a>
                        </div>
                </a>
                    </div>
                    <div class="span3">
                <a href="#">
                        <div class="contentRelative">
                            <img src="img/lcn3.png" alt="">
                            <a href="#" class="linkHome">Ferreter&iacute;a</a>
                        </div>
                </a>
                    </div>
                    <div class="span3">
                <a href="#">
                        <div class="contentRelative">
                            <img src="img/lcn4.png" alt="">
                            <a href="#" class="linkHome">Barraca</a>
                    </div>
                        </div>
                </a>
                <div class="clearfix"></div>
            </div>

            <!--Información-->
            <div class="row">
                <div class="span6">
                    <h2>Acerca de La Casa del Niple</h2>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum vehicula arcu, sed mollis mi pulvinar id. Aenean sit amet metus posuere nulla lacinia iaculis eget quis mi. Vivamus fringilla, nunc sed laoreet faucibus, lorem nunc dignissim libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum vehicula arcu, sed mollis mi pulvinar id.</p>
                    <a href="#" class="ampliar"></a>
                    <div class="clearfix"></div>
                </div>
                <div class="span6">
                    <h2>Soluciones Recientes</h2>
                    <h3>Titulo noticia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum vehicula arcu, sed mollis mi pulvinar id. Aenean sit amet metus posuere nulla lacinia iaculis eget quis mi. Vivamus fringilla, nunc sed laoreet faucibus, lorem nunc dignissim libero.</p>
                    <a href="#" class="ampliar"></a>
                    <div class="shareBox"></div>
                    <div class="clearfix"></div>
                </div>

            </div>

            <!-- Nuestras marcas -->
            <div class="row">
                <div class="span12">
                    <div class="separator">
                        <img src="img/shadowSeparator.png" alt="" >
                        <h2>Nuestras Marcas</h2>
                         <div class="carousel">
                            <div id="foo2">
                                <img src="img/marcas/pensilvania.png" width="117" />
                                <img src="img/marcas/rimontti.png" width="117" />
                                <img src="img/marcas/teka.png" width="117" />
                                <img src="img/marcas/elbex.png" width="117" />
                                <img src="img/marcas/genebre.png" width="117" />
                                <img src="img/marcas/forny.png" width="117" />
                                <img src="img/marcas/pensilvania2.png" width="117" />
                                <img src="img/marcas/rimontti2.png" width="117" />
                                <img src="img/marcas/teka2.png" width="117" />
                                <img src="img/marcas/elbex2.png" width="117" />
                                <img src="img/marcas/genebre2.png" width="117" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- /container -->
            
        <!-- Footer -->
        <?php include("inc/footer.php"); ?>
