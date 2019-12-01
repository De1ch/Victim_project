<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="../../images/logo.png" type="image/png">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="#" />
	<meta name="keywords" content="#" />

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- Animate.css -->
  <link rel="stylesheet" href="../../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../../css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../../css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../../css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="../../css/flexslider.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="../../css/style.css">

	<!-- icons -->
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">

  <!-- Modernizr JS -->
  <script src="../../js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<div class="fh5co-loader"></div>
    <div id="page">
<nav class="fh5co-nav" role="navigation">
  <div class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-2">
          <div id="fh5co-logo"><a href="../../index.php">Victim<span>.</span></a></div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li <?php echo ($page == 'index') ? "class='active'" : ""; ?>><a href="../../index.php">Главная</a></li>
            <li <?php echo ($page == 'practice') ? "class='active'" : ""; ?>><a href="../../pages/practice.php">Текст</a></li>
            <li <?php echo ($page == 'won') ? "class='active'" : ""; ?>><a href="../../pages/won.php">Консультации</a></li>
            <li <?php echo ($page == 'blog') ? "class='has-dropdown active'" : ""; ?> class="has-dropdown">
              <a href="../../pages/blog.php">Блог</a>
              <ul class="dropdown">
                <li><a href="../../blog/citizen.php">Гражданам</a></li>
                <li><a href="../../blog/bills.php">Законопроекты</a></li>
                <li><a href="../../blog/developments.php">События</a></li>
              </ul>
            </li>
            </li>
            <li <?php echo ($page == 'about') ? "class='active'" : ""; ?>><a href="../../pages/about.php">О нас</a></li>
            <li <?php echo ($page == 'contact') ? "class='active'" : ""; ?>><a href="../../pages/contact.php">Контакты</a></li>
            <li class="btn-cta"><a href="../../pages/signin.php"><span>Войти</span></a></li>
            <li class="btn-cta"><a href="../../pages/signup.php"><span>Зарегистрироваться</span></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
