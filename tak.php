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


</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<!--<a href="#"><i class="fa fa-twitter"></i></a>-->
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
		                    <li class="scroll active"><a href="#home">Главная</a></li>
		                    <li class="scroll"><a href="#table">Таблица</a></li>
		                    <li class="scroll"><a href="#about">Расписание</a></li>
		                    <li class="scroll"><a href="#news">Новости</a></li>
		                    <li class="no-scroll"><a href="#sponsor">Команды</a></li>
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
						<h2>Добро пожаловать!</h2>
						<h4>Турнир по мини-футболу г. Копыль</h4>
						<a href="#about">Узнать подробнее<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/slider/fon8.jpg" alt="slider">
					<div class="carousel-caption">
						<h2>Чемпионы 2015</h2>
						<h4>Команда </h4>
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

	<section id="table" >
		<div class="container">
			<div class="row">
        <h1>Турнирная таблица</h1>
        <div class="table-responsive">
          <table class="table table-hover" ng-controller="customersCtrl" style="font-size: 18px;">
            <tr>
               <th>Команда</th>
               <th>Игры</th>
               <th>Забито</th>
               <th>Пропущено</th>
               <th>Разница</th>
               <th>Победы</th>
               <th>Ничьи</th>
               <th>Поражения</th>
               <th>Очки</th>
            </tr>
            <tr ng-repeat="x in stat">
               <td>{{x.name_team}}</td>
               <td>{{x.games_played}}</td>
               <td>{{x.scored}}</td>
               <td>{{x.missed}}</td>
               <td>{{x.diff}}</td>
               <td>{{x.wins}}</td>
               <td>{{x.loses}}</td>
               <td>{{x.draw}}</td>
               <td>{{x.points}}</td>
            </tr>
          </table>
        </div>
			</div>
			<div class="cart">
				<a href="#" target="_blank"><i class="glyphicon glyphicon-folder-open"></i> <span>История игр</span></a>
			</div>
		</div>
	</section><!--/#table-->

  <section id="about">
    <div ng-controller="customersCtrl">
    <!--
         <div class="link  brick">
           <a class="btn-primary" data-toggle="tab" ng-href="#tab{{test}}" ng-click="test = test - 1"><h2>{{match[test-1].name_home}}</h2></a>
           <a class="btn-primary" ng-if="test==0">Просмотреть все расписание</a>
         </div>

         <div class="link brick ">
           <a class="btn-primary" data-toggle="tab" ng-href="#tab{{test}}" ng-click="test = test + 1"><h2>{{match[test+1].name_home}}</h2></a>
           <a class="btn-primary" ng-if="test==match.length-1">Просмотреть все расписание</a>
         </div>

          <div class=" about-content brick  " style="background: #cccccc;">
             <h1>{{match[test].name_home}}</h1>
             <p>{{match[test].schet}}</p>
           </div>-->
           <div class="brick-layout" >
              <div class="brick  link"  >
                <!--
                <a class="btn-primary btn-hide" ng-hide="test==0" data-toggle="tab" ng-href="#tab{{test}}" ng-click="test = test - 2">
                  <h4 class="teams_top">{{match[test-1].name_home}}</h4>
                  <h4 class="teams_bottom">{{match[test-2].name_home}}</h4>
                </a>-->

                <a class="button31" ng-hide="test==0" data-toggle="tab" ng-href="#tab{{test}}" ng-click="test = test - 2"></a>
                <!--
                <a class="arrow-btn" ng-if="test==0">
                    <img width="64" height="64" src="images/fast44.png" alt=""/>
                </a>-->


              </div>
              <div  id="blockB" class="brick   hide-block inf brick-click"  >
                <div class="first-match brick-click1">
                  <h1>{{desk[test].name_home }}  - {{desk[test].name_gyest }}</h1>
                  <p>{{desk[test].home_goals}} - {{desk[test].gyest_goals}}</p>
                  <h3>{{desk[test].date}}</h3>
                  <h4>Начало: {{desk[test].time}}</h4>
                  <img width="128" height="128" src="images/kybok.png" alt="" />
                </div>
                <div class="second-match brick-click2" >
                  <h1>{{desk[test+1].name_home }}  - {{desk[test+1].name_gyest }}</h1>
                  <p>{{desk[test+1].home_goals}} - {{desk[test+1].gyest_goals}}</p>
                  <h3>{{desk[test+1].date}}</h3>
                  <h4>Начало: {{desk[test+1].time}}</h4>
                </div>
              </div>
              <div class="brick  link" >
                <!--
                <a  class="btn-primary" data-toggle="tab" ng-hide="test==match.length-1" ng-href="#tab{{test}}" ng-click="test = test + 2;">
                  <h4  class="teams_top">{{match[test+2].name_home}}</h4>
                  <h4    class="teams_bottom">{{match[test+3].name_home}}</h4>

                </a>-->
                <a class="button31 right" data-toggle="tab" ng-hide="test>=desk.length-2" ng-href="#tab{{test}}" ng-click="test = test + 2;" ></a>
                <!--
                <a  class="arrow-btn" ng-if="test==match.length-1" >
                  <img width="64" height="64" src="images/arrow-blue.png" alt="" />
                </a>-->
              </div>
              <div class="brick  show-block velosiped">
                 это велосипедный блок
              </div>

              <div class="brick  show-block inf-two " >
                <div class="first-match brick-click1-r">
                  <h1>{{desk[test].name_home}}  - {{desk[test].name_gyest }}</h1>
                  <p>{{desk[test].home_goals}} - {{desk[test].gyest_goals}}</p>
                  <h3>{{desk[test].date}}</h3>
                  <h4>Начало: {{desk[test].time}}</h4>
                </div>
                <div class="second-match brick-click2-r">
                  <h1>{{desk[test+1].name_home }} - {{desk[test+1].name_gyest }}</h1>
                  <p>{{desk[test+1].home_goals}} - {{desk[test+1].gyest_goals}}</p>
                  <h3>{{desk[test+1].date}}</h3>
                  <h4>Начало: {{desk[test+1].time}}</h4>
                </div>
              </div>

              <div id="#superB" class="super">
                <div class="left-new-brick">

                  <div class="match-text-left match-text  animated fadeInRight">
                    <h3>{{desk[test].name_home }} - {{desk[test].name_gyest }}</h3>
                    <p>
                      {{desk[test].game_description }}
                    </p>
                 </div>

                 <div class="match-photo-left match-photo hide animated fadeInLeft">
                   <!--
                   <img width="128" height="128" src="images/pole.png" alt="" />
                   <img width="128" height="128" src="images/pole.png" alt="" />
                   <img width="128" height="128" src="images/pole.png" alt="" />
                   <img width="128" height="128" src="images/pole.png" alt="" />
                   <img width="128" height="128" src="images/pole.png" alt="" />
                   <img width="128" height="128" src="images/pole.png" alt="" />
                 -->
                 </div>
                </div>

                <div class="right-new-brick">
                  <div class="match-photo-right  match-photo  animated fadeInRight">
                    <!--
                      <img width="128" height="128" src="images/pole.png" alt="" />
                      <img width="128" height="128" src="images/pole.png" alt="" />
                      <img width="128" height="128" src="images/pole.png" alt="" />
                      <img width="128" height="128" src="images/pole.png" alt="" />
                      <img width="128" height="128" src="images/pole.png" alt="" />
                      <img width="128" height="128" src="images/pole.png" alt="" />
                    -->
                  </div>
                  <div class="match-text-right match-text hide animated fadeInLeft">
                    <h3>{{desk[test+1].name_home }} - {{desk[test+1].name_gyest }}</h3>
                    <p>
                      {{desk[test+1].game_description }}
                    </p>
                 </div>
                </div>

                <div  class="btn-up">
                  <span class="glyphicon glyphicon-chevron-up"></span>
                </div>
              </div>

          </div>

      </div>
	</section><!--/#about-->
<script type="text/javascript">

</script>

	<section id="news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9 col-xs-12">
					<div id="news-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">ПОСЛЕДНИЕ НОВОСТИ </h2>
            <a class="even-control-left" href="#news-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="even-control-right" href="#news-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner" ng-controller="customersCtrl">
							<div class="item active">
								<div class="row">
                  <div class="grid">
          					<figure class="effect-sadie">

                      <img src="images/news/{{news[new].img}}" alt="Новсти. Фото. Img. Png."/>
          						<figcaption>
          							<h2><span>{{news[new].title}}</span></h2>
          							<p>{{news[new].title_text}}<br></p>
          							<a ng-href="news_view.php?priority_new={{new}}" target="_blank">View more</a>
          						</figcaption>
          					</figure>
          					<figure class="effect-sadie">
          						  <img src="images/news/{{news[new+1].img}}" alt="Новсти. Фото. Img. Png."/>
          						<figcaption>
          							<h2><span>{{news[new+1].title}}</span></h2>
          							<p>{{news[new+1].title_text}}<br></p>
          							<a ng-href="news_view.php?priority_new={{new+1}}" target="_blank">View more</a>

          						</figcaption>
          					</figure>
          				</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
                  <div class="grid">
                   <figure class="effect-sadie">
                       <img src="images/news/{{news[new+2].img}}" alt="Новсти. Фото. Img. Png."/>
                     <figcaption>
                       <h2><span>{{news[new+2].title}}</span></h2>
                       <p>{{news[new+2].title_text}}<br></p>
                       <a ng-href="news_view.php?priority_new={{new+2}}" target="_blank">View more</a>
                     </figcaption>
                   </figure>
                   <figure class="effect-sadie">
                       <img src="images/news/{{news[new+3].img}}" alt="Новсти. Фото. Img. Png."/>
                     <figcaption>
                       <h2><span>{{news[new+3].title}}</span></h2>
                       <p>{{news[new+3].title_text}}<br></p>
                       <a ng-href="news_view.php?priority_new={{new+3}}" target="_blank">View more</a>
                     </figcaption>
                   </figure>
                 </div>
								</div>
							</div>
						</div>
					</div>
				</div>

        <div class="guitar">
					<img class="img-responsive" width="390px;" src="images/var1.png" alt="guitar">
				</div>
        <div class="guitar gootbaler2">
          <img class="img-responsive" width="400px;" src="images/foot2.png" alt="guitar">
        </div>

			</div>
		</div>
	</section><!--/#news-->
<!--
  <section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="images/twit.png" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block">
						<div class="item active">
							<img src="images/twitter/twitter1.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="images/twitter/twitter2.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="images/twitter/twitter3.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</section>--><!--/#twitter-feed-->


	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Команды участники:</h2>
              <ul class="teams"  ng-controller="customersCtrl">
                <li ng-repeat="team in names"><h3>{{team.name}}</h3></li>
              </ul>
					</div>
				</div>
			</div>
			<div class="light">
				<img class="img-responsive" src="images/light.png" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->

	<section id="contact">
		<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap">
	 			</div>
	    	</div>
		</div><!--/#map-->
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Контакты</h3>
							<address>
								E-mail: fckopyl@gmail.com<br>
								Kopyl<br>
                Belarus
							</address>
						</div>

					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Свяжитесь с нами</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2016 Kopyl</p>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript"src="js/toggle-panel.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.js"></script>
    <script type="text/javascript" src="js/table_app.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	  <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
