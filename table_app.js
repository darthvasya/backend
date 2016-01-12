var app = angular.module('myApp', []);

app.controller('customersCtrl', function($scope, $http) {

    $http.get("http://localhost/backend_tyrn/get_names.php").then(function (response)
    {
      $scope.names = response.data.records;
    });

    $http.get("http://localhost/backend_tyrn/get_statistic.php").then(function (response)
    {
      $scope.stat = response.data.teams;
    });
 
});
