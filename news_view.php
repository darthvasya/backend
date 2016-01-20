<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Новость</title>
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



</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
            <a href="https://vk.com/fckopul" target="_blank"><i class="fa fa-vk"></i></a>
						<a href="https://plus.google.com/u/0/105700847818906733766/about" target="_blank"><i class="fa fa-google-plus"></i></a>
						<a href="https://www.youtube.com/channel/UCDq0V0hoyyU3eFH2VXvp8Dw" target="_blank"><i class="fa fa-youtube"></i></a>
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
		                <a class="navbar-brand" href="index.php">
		                	<img class="img-responsive" src="images/foot.png"  style="margin-left: 50px;" alt="logo">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <li class="scroll active"><a href="index.php">Главная</a></li>
		                    <li class="scroll"><a href="index.html#table">Таблица</a></li>
		                    <li class="scroll"><a href="index.html#about">Расписание</a></li>
		                    <li class="scroll"><a href="index.html#news">Новости</a></li>
		                    <li class="no-scroll"><a href="index.html#twitter">Команды</a></li>
		                  <!--  <li><a class="no-scroll" href="#" target="_blank">О нас</a></li> -->
		                    <li class="scroll"><a href="index.html#contact">Контакты</a></li>
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
           <h2>Добро пожаловать!</h2>
           <h4>Турнир по мини-футболу г. Копыль</h4>
           <a href="http://fckopyl.by/tyrnir/news_view.php?priority_new=3">Узнать подробнее<i class="fa fa-angle-right"></i></a>
         </div>
       </div>
       <div class="item">
         <img class="img-responsive" src="images/slider/fon8.jpg" alt="slider">
         <div class="carousel-caption">
           <h2>Чемпионы 2015</h2>
           <h4>Команда СДЮШОР</h4>
           <a href="http://fckopyl.by/tyrnir/news_view.php?priority_new=2">Узнать подробнее<i class="fa fa-angle-right"></i></a>
         </div>
       </div>
       <div class="item">
         <img class="img-responsive" src="images/slider/buf.jpg" alt="slider">
         <div class="carousel-caption">
           <h2>Первый матч!</h2>
           <h4>Не забудь посетить</h4>
           <a href="http://fckopyl.by/tyrnir/news_view.php?priority_new=0" >Узнать подробнее<i class="fa fa-angle-right"></i></a>
         </div>
       </div>
     </div>
		</div>
    </section>
	<!--/#home-->
<?php
  $id_new = $_GET["priority_new"];

 ?>

<section id="news-view">
  <div class="container" ng-controller="customersCtrl" >
      <article class="news-body" ng-init="priority_new = <?php echo $id_new;?>">
        <h1>{{news[priority_new].title}}</h1>
        <h6>Дата публикации: {{news[priority_new].date}}</h6>
        <div ng-bind-html-unsafe="news[priority_new].text"></div>


      </article>

      <div class="new-authors" style="float: right; margin-top: 50px;">
        <h4>Автор: {{news[priority_new].author}}</h5>
        <h4>Фото: {{news[priority_new].photo}}</h5>
      </div>
      
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- турнир -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5685645872334738"
     data-ad-slot="7998184800"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

  </div>
</section>


    <footer id="footer">
        <div class="container">
            <div class="text-center">
              <script id="_wauw8h">var _wau = _wau || []; _wau.push(["small", "rn9nr091jieg", "w8h"]);
                (function() {var s=document.createElement("script"); s.async=true;
                s.src="http://widgets.amung.us/small.js";
                document.getElementsByTagName("head")[0].appendChild(s);
                })();</script>
                <p> Copyright  &copy;2016 Kopyl</p>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript"src="js/toggle-panel.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.1.1/angular.min.js"></script>
    <script type="text/javascript" src="js/table_app.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

	  <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
