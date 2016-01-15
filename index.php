<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <script type="text/javascript" src="js/table_app.js"></script>
<style media="screen">
  th, td{
    text-align: center;
  }
</style>

  </head>
  <body >

    <ul class="nav nav-pills">
      <li class="active"><a href="index.php">Home admin</a></li>
      <li><a href="#">Sait</a></li>
      <li><a href="add_match.php">Add match</a></li>
      <li><a href="image.php">Image</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>

    </ul>
    <h1>Таблица</h1>
    <div class="table-responsive">
      <table class="table table-hover" ng-controller="customersCtrl" style="font-size: 18px;">
        <tr>
         <th>id_team</th>
         <th>name_team</th>
         <th>games_played</th>
         <th>scored</th>
         <th>missed</th>
         <th>разница</th>
         <th>wins</th>
         <th>loses</th>
         <th>draw</th>
         <th>points</th>
       </tr>
       <tr ng-repeat="x in stat">
         <td>{{x.id_team}}</td>
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

  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Будут проводиться</a></li>
    <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Завершившиеся</a></li>
    <li class="disabled"><a>Disabled</a></li>

  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="home">
      <?php
         $result = mysql_query("SELECT *  FROM desk ORDER BY id_game") or die(mysql_error());
         $data = mysql_fetch_assoc($result);

         do{
           if($data['finish']==0){?>
           <div class="jumbotron">
             <h1><?php echo $data['name_home']?> - <?php echo $data['name_gyest']?></h1>
             <p>ID match: <?php echo $data['id_game'];?></p>
             <p>Дата проведения: <?php echo $data['date'];?></p>
             <p><a class="btn btn-primary btn-lg" href="edit.php?id_game=<?php echo $data['id_game'];?>">Learn more</a></p>
           </div>
         <?php }} while($data = mysql_fetch_assoc($result));?>
    </div>
    <div class="tab-pane fade" id="profile">
      <?php
         $result = mysql_query("SELECT *  FROM desk ORDER BY id_game") or die(mysql_error());
         $data = mysql_fetch_assoc($result);

         do{
           if($data['finish']==1){?>
           <div class="jumbotron">
             <h1><?php echo $data['name_home']?> - <?php echo $data['name_gyest']?></h1>
             <p>ID match: <?php echo $data['id_game'];?></p>
             <p>Дата проведения: <?php echo $data['date'];?></p>
             <p><a class="btn btn-primary btn-lg" href="edit.php?id_game=<?php echo $data['id_game'];?>">Learn more</a></p>
           </div>
         <?php }} while($data = mysql_fetch_assoc($result));?>
    </div>

  </div>





 </body>
</html>
