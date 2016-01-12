<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>document</title>
      <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
  <body>
    <div ng-app="myApp" ng-controller="customersCtrl">

<table>
  <tr ng-repeat="x in names">
    <td>{{ x.id }}</td>
    <td>{{ x.name }}</td>
  </tr>
</table>

</div>

    <script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
        $http.get("http://localhost/backend_tyrn/get_a.php")
        .then(function (response)
    {$scope.names = response.data.records;});
    });
    </script>
  </body>
</html>
