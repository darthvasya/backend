<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Футбольный турнир</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/image-hover.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/btn.css" media="screen" title="no title" charset="utf-8">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.js"></script>


    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
		        <div class="row">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/foot.png"  style="margin-left: 50px;" alt="logo">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <li class="scroll active"><a href="#home">Главная</a></li>
		                    <li class="scroll"><a href="#table">Таблица</a></li>
		                    <li class="scroll"><a href="#about">Расписание</a></li>
		                    <li class="scroll"><a href="#news">Новости</a></li>
		                    <li class="no-scroll"><a href="#twitter">Команды</a></li>
		                  <!--  <li><a class="no-scroll" href="#" target="_blank">О нас</a></li> -->
		                    <li class="scroll"><a href="#contact">Контакты</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>
    </header>
    <!--/#header-->

    <section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/fon1.jpg" alt="slider">
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>full event package only @$199</h4>
						<a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/fon8.jpg" alt="slider">
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>full event package only @$199</h4>
						<a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/buf.jpg" alt="slider">
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>full event package only @$199</h4>
						<a href="#contact" >GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
    </section>
	<!--/#home-->



    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2014<a target="_blank" href="http://shapebootstrap.net/"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript"src="js/toggle-panel.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src="js/table_app.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	  <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
