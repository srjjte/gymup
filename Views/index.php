<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>GymUP</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="novena" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/icofont/icofont.min.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url; ?>Assets/home/css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="info@gymup.com"><i class="icofont-support-faq mr-2"></i>info@gymup.com</a></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+52-55-5555-5555">
							<span>Llama ahora : </span>
							<span class="h4">55-5555-5555</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="Assets/images/other.png" alt="" width="100">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url . 'home/login'; ?>">Iniciar sesión</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>


<!-- Slider Start -->
<section class="banner" style="background-image: url('<?php echo base_url . 'Assets/images/principal.jpg'; ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing text-white">Ponte en forma</span>
					<h1 class="mb-3 mt-3 shadow-white">¡Transforma tu vida, esculpe tu futuro!</h1>
					
					<p class="mb-4 pr-5 text-white"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Horas de servicio</span>
						<h4 class="mb-3">Dirección</h4>
						<p class="mb-4">Enrique segobiano</p>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<h4 class="mb-3">Horario</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">Lun - Mie : <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Jue - Vier : <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Sab - Dom : <span>10:00 - 17:00</span></li>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Telefono</span>
						<h4 class="mb-3">55-5555-5555</h4>
						<p>Para reservas .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3 counter" data-count="<?php echo $data['clientes']['total']; ?>">0</span>
						<p>Clientes</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3 counter" data-count="<?php echo $data['entrenador']['total']; ?>">0</span>
						<p>Entrenadores</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Nuestros planes</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Aprende más sobre los planes que tenemos para tí.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
                <?php foreach ($data['planes'] as $plan) { ?>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="<?php echo base_url .'Assets/images/planes/' . $plan['imagen']; ?>" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4><?php echo $plan['plan']; ?></h4>
						<span><?php echo $plan['precio_plan'] . ' ' . $plan['condicion']; ?></span>
						<p>
                        <?php echo $plan['descripcion']; ?>
						</p>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
</section>

<!-- footer Start -->

   

    <!-- 
    Essential Scripts
    =====================================-->
    <script src="<?php echo base_url; ?>Assets/home/plugins/jquery/jquery.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/home/plugins/shuffle/shuffle.min.js"></script>
    
    <script src="<?php echo base_url; ?>Assets/home/js/script.js"></script>

  </body>
  </html>