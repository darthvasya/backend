<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>d</title>
      <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script type="text/javascript" src="js/table_app.js"> </script>
  </head>
  <body ng-controller="customersCtrl">
    <div ng-repeat="match in desk">
         {{match.name_home}}
    </div>
  </body>
</html>
