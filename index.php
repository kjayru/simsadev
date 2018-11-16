<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
 
    <link rel="manifest" href="manifest.json">
  
    <title>SIMSA</title>
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/main.css?v=<?php echo uniqid() ?>">
  </head>
  <body>
  <div class="header">
            <nav class="navbar navbar-expand-lg  navbar-dark bg-dark   fixed-top">
                <a class="navbar-brand" href="#inicio"><img src="/images/logomini.png" ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btnproducto" href="#productos">PRODUCTOS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btnnosotros" href="#nosotros">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btnquehacemos" href="#quehacemos">QUE HACEMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btncontacto" href="#mapa">CONTACTO</a>
                    </li>
                    </ul>
                    <div class="d-none d-sm-block">
                    <ul class="navbar-nav only">
                    <li >
                        <a class="cotiza-hoy modal-trigger link"  data-modal="#modal-1" href="#">COTIZA HOY</a>
                    </li>
                    </ul>
                    </div>
                    
                </div>
            </nav>
        </div>

<!--inicio-->
    <div id="inicio">

        <div class="container-fluid">
        
            
            <div class="logo row h-100 justify-content-center align-items-center">
                <div class="logorio">
                    <div  data-invert-y="false"  class="efecto" >
                        <img src="./images/logocentro.png" data-depth="0.2" class="img-fluid" />
                    </div>
                </div>
                <div id="particles-js"></div>
            </div>
        </div>
        
    
        
    </div>
    <!--quehacemos-->
    <div id="quehacemos">
        <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-md-5 col-12">
                   <div class="d-none d-sm-block">
                        <div data-relative-input="true"    data-limit-x="false" data-invert-y="true"  class="efecto2 bloque25" >
                        
                            <img src="/images/year25.png" data-depth="0.1" class="img-fluid" />
                        </div>
                    </div>
                    <div class="d-block d-sm-none">
                        <img src="/images/simsa25mob.png" data-depth="0.1" class="img-fluid" />
                    </div>
                </div>

                <div class="col-md-4 col-12 col-sm-6  text-left" id="nosotros">
                   
                    <h1>¿Quienes somos?</h1>
                    <h3>Servicios Integrales en Medición</h3>
                    <p>
                        Con más de 25 años de experiencia
                        industria eléctrica, nos caracterizamos por 
                        asesorar a nuestros clientes en el campo de la
                        medición de energía.
                    </p>

                    <ul>
                        <li class="li1">Liderazgo</li>
                        <li class="li2">Servicio</li>
                        <li class="li3">Transparencia</li>
                    </ul>
                    <a href="#" class="btn btn-default btn-contactos">CONTACTANOS</a>
                   
                </div>
            </div>
        </div>
    </div>
    <!--servicios-->
    <div id="servicios">
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-left">
                    <h1>Nuestro servicios</h1>
                    <h2>Medición de energía Eléctrica</h2>
                </div>
                <div class="col-md-6 col-12 text-right">
                    <p>Ofrecemos a nuestro clientes soluciones en 
                        medición de energía para el área residencial,
                        comerial e industrial. Así como el diseño de redes de 
                        telemedición distribuidas.
                    </p>
                    <p>Asesorando al cliente y gestionando ante las dependencias suminstradoras 
                        de energía para facilitar la contratación y alimentación.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="efecto3" data-relative-input="true" data-invert-x="true"  data-invert-y="true" >
                    <div class="col-md-12 col-12" data-depth="0.1">
                        <ul>
                            <li>
                                <img src="/images/icono4.png" class="img-fluid"/>
                                <span>Residencial</span>
                            </li>
                            <li>
                                <img src="/images/icono5.png"  class="img-fluid"/>
                                <span>Comercial</span>
                            </li>
                            <li>
                                <img src="/images/icono6.png"  class="img-fluid"/>
                                <span>Industrial</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--productos-->

    <div class="container-fluid title-prod">
        <div class="row  justify-content-center">
            <h2>Nuestros Productos</h2>
        </div>
    </div>
    <div id="productos">

        <div class="container">
            <div class="d-none d-sm-block">
                <div class="row product left justify-content-center">
                    <div class="col-md-6 ap1">
                        <h2>Transformadores
                            de instrumento tipo poste
                        </h2>
                        <p>Transformadores integrados de Medición
                            para diferentes niveles en media tensión.

                        </p>
                        <p>En rangos de corriente homologados por 
                            CFE - LAPEM tipo KM17, KM24, KM36, 
                            entre otros.
                        </p>
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                    <div class="col-md-5 op1">
                        <div class="efecto4" data-relative-input="false" data-invert-x="false"  data-invert-y="false">
                            <img src="/images/prod1.png"  class="img-fluid" data-depth="0.1"/>
                        </div>
                            <div class="etiqueta">01</div>
                        
                    </div>
                </div>

                <div class="row product right justify-content-center">
                    <div class="col-md-5 op2">
                    <div class="efecto5" data-relative-input="true" data-invert-x="true"  data-invert-y="true">
                        <img src="/images/prod2.png" data-depth="0.1"  class="img-fluid"/>
                    </div>
                    <div class="etiqueta">02</div>
                    </div>
                    <div class="col-md-6 ap2">
                        <h2>Transformadores
                            de tipo pedestal
                        </h2>
                        <p>Transformadores para medición subterráneo o
                            pedestal en media tensión.

                        </p>
                        <p>Con rangos homologados por CFE - LAPEM o de fabricación 
                            especial tipo MI17, MI24, entre otros.
                        </p>
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                </div>


                <div class="row product left justify-content-center">
                    <div class="col-md-6 ap1">
                        <h2>Transformadores de instrumento
                            de alta tensión </h2>
                        <p>Transformadores de Potencial y Transformadores
                            de corriente para medición en alta tensión.
                        </p>
                        <p>Homologados por CFE y de fabricación especial a
                            las necesidades del proyecto. Tipo UTE123, UTE145, 
                            UTF245, UTP245, CA123, CA245, entre otros.
                        </p>
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                    <div class="col-md-5 op3">
                    <div class="efecto6" data-relative-input="true" data-invert-x="false"  data-invert-y="false">
                        <img src="/images/prod3.png" data-depth="0.1"  class="img-fluid"/>
                    </div>
                        <div class="etiqueta">03</div>
                    </div>
                
                </div>


                <div class="row product right justify-content-center">
                    <div class="col-md-5 op4">
                    <div class="efecto7" data-relative-input="true" data-invert-x="true"  data-invert-y="true">
                        <img src="/images/prod4.png" data-depth="0.1"  class="img-fluid"/>
                    </div>
                        <div class="etiqueta">04</div>
                    </div>
                    <div class="col-md-6 ap2">
                        <h2>Transformadores de 
                            instrumento para baja tensión </h2>
                        <p>Transformadores de corriente tipo dona para baja tensión en rangos
                            homologados por CFE - LAPEM.
                        </p>
                    
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                </div>


                <div class="row product left justify-content-center">
                    <div class="col-md-6 ap1">
                        <h2>Watthorímetros</h2>
                        <p>Medidores residenciales, comerciales e indsutriales
                            tipo bidireccional con capacidad de telemedición.
                        </p>
                        <p>Homologados por CFE o para medición interna en las formas
                            9S, 12S, 16S, entre otros.
                        </p>
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                    <div class="col-md-5 op5">
                    <div class="efecto8" data-relative-input="true" data-invert-x="false"  data-invert-y="false">
                        <img src="/images/prod5.png" data-depth="0.1"  class="img-fluid"/>
                    </div>
                        <div class="etiqueta">05</div>
                    </div>
                </div>


                <div class="row product right justify-content-center">
                    <div class="col-md-5 op6">
                    <div class="efecto9" data-relative-input="true" data-invert-x="true"  data-invert-y="true">
                        <img src="/images/prod6.png" data-depth="0.1"  class="img-fluid"/>
                    </div>
                        <div class="etiqueta">06</div>
                    </div>
                    <div class="col-md-6 ap2">
                        <h2>Calidad de energía</h2>
                        <p>Dimensionamiento y suministro de filtros de armónicas y bancos de capacitores
                            para control de factor de potencia y mejora en la calidad de
                            energía apegados al código de red de CFE.
                        </p>
                        <p>Estudios y análisis de calidad en el suministro eléctrico
                        </p>
                        <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                    </div>
                </div>
        
            </div>

            <div class="d-block d-sm-none">
                <div class=" product left justify-content-center">
                    <div class="row col-12 ap1">
                        <h2>Transformadores
                            de instrumento tipo poste
                        </h2>
                        <p>Transformadores integrados de Medición
                            para diferentes niveles en media tensión.

                        </p>
                        <p>En rangos de corriente homologados por 
                            CFE - LAPEM tipo KM17, KM24, KM36, 
                            entre otros.
                        </p>
                    
                    </div>
                    <div class="row op1">
                        <div class="col-4 ">
                            <div class="etiqueta">01</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod1.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
                </div>

                <div class=" product left justify-content-center">
                    <div class="row ap1 col-12">
                        <h2>Transformadores
                            de tipo pedestal
                        </h2>
                        <p>Transformadores para medición subterráneo o
                            pedestal en media tensión.

                        </p>
                        <p>Con rangos homologados por CFE - LAPEM o de fabricación 
                            especial tipo MI17, MI24, entre otros.
                        </p>
                    
                    </div>
                    <div class="row op2">
                        <div class="col-4">
                            <div class="etiqueta">02</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod2.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
            
                </div>


                <div class=" product left justify-content-center">
                    <div class="row col-12 ap1">
                        <h2>Transformadores de instrumento
                            de alta tensión </h2>
                        <p>Transformadores de Potencial y Transformadores
                            de corriente para medición en alta tensión.
                        </p>
                        <p>Homologados por CFE y de fabricación especial a
                            las necesidades del proyecto. Tipo UTE123, UTE145, 
                            UTF245, UTP245, CA123, CA245, entre otros.
                        </p>
                        
                    </div>
                    <div class="row op3">
                        <div class="col-4">
                            <div class="etiqueta">03</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod3.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
                
                </div>


                <div class=" product left justify-content-center">
                    <div class="row  col-12 ap1">
                        <h2>Transformadores de 
                            instrumento para baja tensión </h2>
                        <p>Transformadores de corriente tipo dona para baja tensión en rangos
                            homologados por CFE - LAPEM.
                        </p>
                    
                    
                    </div>
                    <div class="row op4">
                        <div class="col-4">
                            <div class="etiqueta">04</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod4.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
                
                </div>


                <div class=" product left justify-content-center">
                    <div class="row  col-12 ap1">
                        <h2>Watthorímetros</h2>
                        <p>Medidores residenciales, comerciales e indsutriales
                            tipo bidireccional con capacidad de telemedición.
                        </p>
                        <p>Homologados por CFE o para medición interna en las formas
                            9S, 12S, 16S, entre otros.
                        </p>
                    
                    </div>
                    <div class="row op5">
                        <div class="col-4">
                            <div class="etiqueta">05</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod5.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
                </div>





                <div class=" product left justify-content-center">
                    <div class="row  col-12 ap1">
                    <h2>Calidad de energía</h2>
                        <p>Dimensionamiento y suministro de filtros de armónicas y bancos de capacitores
                            para control de factor de potencia y mejora en la calidad de
                            energía apegados al código de red de CFE.
                        </p>
                        <p>Estudios y análisis de calidad en el suministro eléctrico
                        </p>
                    
                    </div>
                    <div class="row op6">
                        <div class="col-4">
                            <div class="etiqueta">06</div>
                        </div>
                        <div class="col-7 text-right">
                            <img src="/images/prod6.png"  class="img-fluid"/>
                            <a href="#" class="btn btn-default btn-cotiza modal-trigger link"  data-modal="#modal-1">COTIZA HOY</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!--contactos-->
    <div id="contactotitulo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="titulo">
                        Trabajamos de la mano con empresas como:<br/>
                        Arteche y Tecnologías - EOS
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contactologos">
        <div class="container">
            <div class="row logos">
                <div class="col-md-4 col">
                    <img src="/images/logo1.png" class="img-fluid"/>
                </div>
                <div class="col-md-4 col">
                    <img src="/images/logo2.png" class="img-fluid"/>
                </div>
                <div class="col-md-4 col">
                    <img src="/images/logo3.png" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>


  <div class="parallax">
        <div class="container">
            <div class="row map row justify-content-md-center">
                <div class="col-md-4  col-12 lienzo text-left">
                    <h2>SIMSA</h2>
                    <address>
                    <p>Olivo 1618 Col. Moderna<br/>
                    Monterrey, NL México,<br/>
                    CP 64530
                    </p>
                    <div class="telefono">
                    +52 (81) 8372 6431<br/>
                    +52 (81) 8372 6439
                    </div>
                    <a href="mailto:webmaster@example.com" class="correo-contacto"> ventas@simsa-mx.com</a>
                    </address>
                    <a class="btn btn-default btn-contacto btn-contact modal-trigger link"  data-modal="#modal-1">Contactanos</a>
                </div>
            </div>
        </div>
        <div id="parallax">
            <img data-parallax='{"y": -200}' src="/images/mapa.png" />
           
        </div>
    
  </div>


<footer class="page-footer font-small  pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row justify-content-center">
                    
                    
                    <div class="col-md-5 mb-md-0 mb-5 text-center">
                            <a href="#" class="linked" class="linked"><i class="fab fa-linkedin-in"></i></a>

                            <ul class="ft-link">
                                <li><a href="#productos" >Productos</a></li>
                                <li><a href="#nosotros" >Nosotros</a></li>
                                <li><a href="#que-hacemos" >Que hacemos</a></li>
                                <li><a href="#contactos" >Contactos</a></li>
                            </ul>
                    </div>
                    
            </div>
        </div>      
        <div class="footer-copyright text-center py-3">
        Copyright © 2018. SIMSA All rights reserved<br/>
        Design by: COBO’S
        </div>
</footer>


<div  id="modal-1" class="boxmodal" >
                <div class="container-fluid">
                    <div class="row h-100 justify-content-center item-align-center">
                        
                        <div class="col-md-3 col-11 frcontacto">
                            <form id="formdata">
                                <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre" placeholder="Nombre">
                                    
                                </div>
                                <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="empresa" name="empresa" aria-describedby="empresa" placeholder="Empresa">
                                    
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" id="ciudad" name="ciudad" aria-describedby="ciudadPais" placeholder="Ciudad y País">
                                    
                                </div>
                               
                                <div class="form-group">
                                    
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
                                    
                                </div>

                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefono" placeholder="Teléfono">
                                    
                                </div>

                                <div class="form-group">
                                    
                                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Mensaje"></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <a href="#" class="btn btn-default btn-contacto btn-sendata">Enviar</a>
                                </div>

                                <a href="#" class="modal-trigger link" id="eventop" data-modal="#modal-2">.</a>
                            </form>
                        </div>

                    </div>
                    
                </div>

</div>


<div  id="modal-2" class="boxmodal" >
                <div class="container-fluid">
                    <div class="row h-100 justify-content-center item-align-center">

                       <div class="orange">
                           Tu mensaje se envio con éxito
                       </div>
                </div>
        </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/js/vendor/bootstrap.min.js" ></script>
<script src="/js/vendor/particles.min.js"></script>
<script src="/js/vendor/jquery.validate.min.js"></script>
<script src="/js/vendor/jquery.parallax.js?v=2"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/ScrollToPlugin.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

<script src="/js/vendor/mobile-detect.min.js"></script>

<script src="/js/main.js?v=<?php echo uniqid() ?>"></script>  
</body>
</html>
