            <div class="separador">
                <img src="img/shadowSeparator.png" alt=""/ >
            </div>              
            <footer>
                <div class="container">

                    <div class="left">    
                        <ul class="menuFoot">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="productos.php">Productos</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="soluciones.php">Soluciones para el Hogar</a></li>
                            <li><a href="empresa.php">La Empresa</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <p>&copy; 2013 La Casa del Niple. Todos los derechos reservados.</p>
                        <a href="http://www.meeting.com.uy" target="_blank"><img src="img/meeting-com-uy.png" alt="By meeting.com.uy" class="meeting"></a>
                    </div>
                    <div class="right">
                        <img src="img/lcnFooter.png" alt="" class="lcnFoot">
                        <ul class="datas">
                            <li><strong>Direcci&oacute;n: </strong>Luis A. de Herrera 3908/10</li>
                            <li><strong>Tel.: </strong>2200 4334 | Fax: 2209 4219</li>
                            <li><strong>Horario: </strong>Lunes a viernes de 8 a 18 y s&aacute;bados 8 a 12 hrs. </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </footer>

        <!-- JQuery -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

        <!--Carousel: carouFredSel -->
        <script src="js/jquery.carouFredSel-6.2.0-packed.js"></script> 
        <script type="text/javascript">
            $(document).ready(function() {

            // Using default configuration
            $("#foo1").carouFredSel();
            
            // Using custom configuration
            $("#foo2").carouFredSel({
                items               : 5,
                direction           : "left",
                play                : true,
                scroll : {
                    items           : 1,
                    easing          : "linear",
                    duration        : 500,                        
                    pauseOnHover    : true
                }                   
            }); 
        });

        </script> 
        <!-- FlexSlider -->
      <script defer src="js/jquery.flexslider-min.js"></script>
      
      <script type="text/javascript">
        $(function(){
          SyntaxHighlighter.all();
        });
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>        

        <script src="js/vendor/bootstrap.min.js"></script>   
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
 
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
        <script src="js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script>
        jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#contacto").validationEngine();
        });

        /**
        *
        * @param {jqObject} the field where the validation applies
        * @param {Array[String]} validation rules for this field
        * @param {int} rule index
        * @param {Map} form options
        * @return an error string if validation failed
        */
        function checkHELLO(field, rules, i, options){
            if (field.val() != "HELLO") {
                // this allows to use i18 for the error msgs
                return options.allrules.validate2fields.alertText;
            }
        }
    </script>
    <script type="text/javascript" language="javascript" src="js/jquery.colorbox.js"></script>

    </body>
</html>