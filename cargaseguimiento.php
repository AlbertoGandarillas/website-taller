<?php require_once 'class/clases.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Service Auto - Servicio de Reparación y Mantenimiento | Agenda tu cita</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/orange-theme.css" rel="stylesheet">


<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li>Para solicitar cualquiera de nuestros Servicios</li>
                            <li><a href="appointment.html">Agende su cita ahora, sin compromiso<i class="fa fa-long-arrow-alt-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <p><i class="fa fa-phone-volume"></i> 24/7 Support  0700 125 3657</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Inicio</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="about.html">About</a>
                                        <ul>
                                            <li><a href="about.html">Nosotros</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="locales.html">Locals</a>
                                        <ul>
                                            <li><a href="locales.html">Locales</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="servicios.html">Services</a>
                                        <ul>
                                            <li><a href="servicios.html">Servicios</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="dropdown"><a href="index.html">Home</a>
									<ul>
										<li><a href="index.html">Inicio</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="about.html">About</a>
									<ul>
										<li><a href="about.html">Nosotros</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="locales.html">Locals</a>
									<ul>
										<li><a href="locales.html">Locales</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="servicios.html">Services</a>
									<ul>
										<li><a href="servicios.html">Servicios</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contacto</a></li>
							</ul>
						</div>

                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Seguimiento de Mantenimiento</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Servicios</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Services Section -->
    <section class="services-page-section">
        <div class="auto-container">
            <H2>TRABAJOS REALIZADOS A SU VEHICULO</H2>
            <form method="post" action="class/guardarseguimiento.php" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="service-block col-lg-10 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label">DNI</label>
                            <div class="col-lg-10">
                                <input id="DNI" name="DNI" type="text" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">PLACA</label>
                            <div class="col-lg-10">
                                <input id="PLACA" name="PLACA" type="text" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label">Imagen 01</label>
                            <div class="col-lg-10">
                                <input id="IMG_RUTA1" name="IMG_RUTA1" type="file" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Titulo 01</label>
                            <div class="col-lg-10">
                                <input id="IMG_NOMBRE1" name="IMG_NOMBRE1" type="text" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Descripcion 01</label>
                            <div class="col-lg-10">
                                <textarea  id="IMG_DESCRIPCION1" name="IMG_DESCRIPCION1"class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label">Imagen 02</label>
                            <div class="col-lg-10">
                                <input id="IMG_RUTA2" name="IMG_RUTA2" type="file" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Titulo 02</label>
                            <div class="col-lg-10">
                                <input id="IMG_NOMBRE2" name="IMG_NOMBRE2" type="text" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Descripcion 02</label>
                            <div class="col-lg-10">
                                <textarea  id="IMG_DESCRIPCION2" name="IMG_DESCRIPCION2"class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label">Imagen 03</label>
                            <div class="col-lg-10">
                                <input id="IMG_RUTA3" name="IMG_RUTA3" type="file" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Titulo 03</label>
                            <div class="col-lg-10">
                                <input id="IMG_NOMBRE3" name="IMG_NOMBRE3" type="text" class="form-control" >
                            </div>
                            <label class="col-lg-5 col-form-label">Descripcion 03</label>
                            <div class="col-lg-10">
                                <textarea  id="IMG_DESCRIPCION3" name="IMG_DESCRIPCION3"class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="form-group row">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Guardar</button>
                        
						&nbsp
						
						
                        </div>
                    </div>
										
                </div>
                <!-- Service Block -->
            </div>
            </form>
			
        </div>
    </section>
    <!-- End Services Section -->



  <!-- Subscribe Section -->

    <section class="subscribe-section">

        <div class="auto-container">

            <div class="inner-container clearfix">

                <h3>Realice el seguimiento de los trabajos realizados a su vehículo a través del</h3>

                <a href="login.php" class="call-btn">TALLER ON LINE</a>

            </div>

        </div>

    </section>

    <!-- End Subscribe Section -->





    <!-- Footer Style Two -->
    <footer class="footer-style-two" >
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget info-widget">
                            <div class="widget-content">
                                <h2>Contactanos</h2>
                                <div class="text"></div>
                                <ul class="info-list">
                                    <li><span>Dirección: </span>Av. Nicolas Ayllón #2648 - Ate</li>
                                    <li><span>Teléfono: </span>01 7802020</li>
                                    <li><span>E-mail: </span> taller@motorexpert.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="widget-content">
                                <h2>Síguenos</h2>
                                <div class="text">Visíta nuestras redes sociales.</div>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget info-widget">
                            <div class="widget-content">
                                <h2>Horarios de Atención</h2>
                                <div class="text"></div>
                                <ul class="info-list">
                                    <li>Lunes a Viernes: 08:00 a.m. – 12:30 p.m. / 02:15 p.m. – 05:30 p.m.</li>
                                    <li>Sábado: 08:00 a.m. – 12:00 p.m.</li>
                                    <li>Domingos y feriados: Cerrado</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">Copyright &copy; 2021 Todos los Derechos Reservados. Desarrollado por codiGO</div>
            </div>
        </div>

    </footer>
    <!-- End Footer Style Two -->


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li></ul>
    <a href="#" class="purchase-btn">Purchase now $15</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>
</body>
</html>
