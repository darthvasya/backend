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

    var  myUrl= '#tab3';
  	$scope.test = 1;

  	$scope.url = myUrl;
  	$scope.list = [{ play: 'Arsenal - mu', schet: '74 - 0'},
  					{ play: 'Arsenal - chlensi', schet: '174 - 0'},
  					{ play: 'Arsenal - mancity', schet: '73 - 0'},
  					{ play: 'Arsenal - liverpool', schet: '23 - 0'},
  					{ play: 'Arsenal - lester', schet: '29 - 0'},
  					{ play: 'Arsenal - FCKOPYL', schet: 'игра ещё не состоялась'}
  					];
  	

});
