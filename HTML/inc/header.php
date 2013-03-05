
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html --> 
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php"><img src="img/logo.png" alt="La Casa del Niple"></a>
                    <!-- Barra de busqueda y siguenos -->
                    <div class="topBar">
                        <form action="#">
                            <input type="text" class="buscarCampo" onclick="if(this.value=='Buscar...') this.value=''" onblur="if(this.value=='') this.value='Buscar...'">
                            <input type="submit" class="buscar">
                        </form>
                        <a href="#" class="siguenos"></a>
                    </div>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="home"><a href="index.php" <?php if ($mi_pagina=="inicio") echo 'class="active"'; ?>>Home</a></li>
                            <!--Productos DropDown -->
                            <li class="productos dropdown">
                                <a href="#" class="dropdown-toggle <?php if ($mi_pagina=="productos") echo 'active"'; ?>" data-toggle="dropdown">Productos <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li><a href="productos.php">Hogar</a></li>
                                    <li><a href="productos.php">Sanitaria</a></li>
                                    <li><a href="productos.php">Ferreter&iacute;a</a></li>
                                    <li><a href="productos.php">Barracas</a></li>
                                </ul>
                            </li>
                            <!--Servicios DropDown -->
                            <li class="servicios dropdown">
                                <a href="#" class="dropdown-toggle <?php if ($mi_pagina=="servicios") echo 'active"'; ?>" data-toggle="dropdown">Servicios <b class="caret"></b></a>
                                <ul class="dropdown-menu w101">
                                    <li class="divider"></li>
                                    <li><a href="#">Servicio</a></li>
                                    <li><a href="#">Servicio</a></li>
                                    <li><a href="#">Servicio</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="soluciones <?php if ($mi_pagina=="soluciones") echo 'active"'; ?>">Soluciones para el Hogar</a></li>
                            <li><a href="empresa.php" class="empresa <?php if ($mi_pagina=="empresa") echo 'active"'; ?>">La Empresa</a></li>
                            <li><a href="contacto.php" class="contacto <?php if ($mi_pagina=="contacto") echo 'active"'; ?>">Contacto</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>