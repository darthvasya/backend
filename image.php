<?php
  $connect = mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("tyrnir", $connect) or die(mysql_error()	);
  mysql_query('SET NAMES utf8');
?>
<!DOCTYPE html>
<html  ng-app>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <style media="screen">
    label{
      font-size: 22px;
      font-family: 'Helvetica';
    }
    </style>
  </head>
  <body >

    <ul class="nav nav-pills">
      <li ><a href="index.php">Home admin</a></li>
      <li><a href="#">Sait</a></li>
      <li><a href="add_match.php">Add match</a></li>
      <li class="active"><a href="image.php">Image</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>
    </ul>
<h1>Добавление изображения</h1>
  <form  class="form-horizontal" name="form" enctype='multipart/form-data' method='post' action='image.php'>
    <fieldset>
      <!--<legend>Legend</legend>-->
    <label for="select" class="col-lg-2 control-label">Название изображения:</label>
      <div class="col-lg-10 marg">
         <input type="text"  class="form-control input-lg" id="datepicker" name="name_img" />
      </div>
      <div class="col-lg-10 col-lg-offset-2">
          <input type="file" name="filename" class="btn btn-lg btn-primary"  style="margin-top: 15px;"/>
          <input type="submit" value="Загрузить" class="btn btn-lg btn-primary" style="margin-top: 15px;">
      </div>
  </fieldset>
  </form>


  <?php

  if(isset($_FILES["filename"]) )
     {
       $new_name = $_POST["name_img"];
       if($_FILES["filename"]["size"] > 1024*3*1024)
       {
         echo ("Размер файла превышает три мегабайта");
         exit;
       }
       // заменил
    $filename = $_FILES['filename']['name'];

    // на
    $namefile = "$new_name".".png";
    $filename = $namefile;
     // Проверяем загружен ли файл
     if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
     {
       // Если файл загружен успешно, перемещаем его
       // из временной директории в конечную
       move_uploaded_file($_FILES["filename"]["tmp_name"], "img/".$filename);
     } else {
        echo("Ошибка загрузки файла");
     }
     ?>
     <h1> Изображение:
     <?php
     echo $filename;
   }
  ?>
   успешно загружено!</h1>


 </body>
</html>
