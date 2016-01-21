var app = angular.module('myApp', []);

app.controller('customersCtrl', function($scope, $http) {

    $http.get("http://localhost/tyrnir/get_names.php").then(function (response)
    {
      $scope.names = response.data.records;
    });

    $http.get("http://localhost/tyrnir/get_statistic.php").then(function (response)
    {
      $scope.stat = response.data.teams;
    });

    $http.get("http://localhost/tyrnir/get_desk.php").then(function (response)
    {
      $scope.desk =  response.data;
    });

    $http.get("http://localhost/tyrnir/get_news.php").then(function (response)
    {
      $scope.news =  response.data;
    });

    $scope.new = 0;











    var  myUrl= '#tab3';
  	$scope.test = 2;

  	$scope.url = myUrl;

    $scope.list = [{ play: 'Arsenal - mu', schet: '74 - 0'},
					{ play: 'Arsenal - chlensi', schet: '174 - 0'},
					{ play: 'Arsenal - mancity', schet: '73 - 0'},
					{ play: 'Arsenal - liverpool', schet: '23 - 0'},
					{ play: 'Arsenal - lester', schet: '29 - 0'},
					{ play: 'Arsenal - FCKOPYL', schet: 'игра ещё не состоялась'}
					];
});

app.directive('parseStyle', function($interpolate) {
    return function(scope, elem) {
        var exp = $interpolate(elem.html()),
            watchFunc = function () { return exp(scope); };

        scope.$watch(watchFunc, function (html) {
            elem.html(html);
        });
    };
});
