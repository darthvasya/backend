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
  	$scope.test = 0;

  	$scope.url = myUrl;

    $scope.list = [{ play: 'Arsenal - mu', schet: '74 - 0'},
					{ play: 'Arsenal - chlensi', schet: '174 - 0'},
					{ play: 'Arsenal - mancity', schet: '73 - 0'},
					{ play: 'Arsenal - liverpool', schet: '23 - 0'},
					{ play: 'Arsenal - lester', schet: '29 - 0'},
					{ play: 'Arsenal - FCKOPYL', schet: 'игра ещё не состоялась'}
					];

  	$scope.list1 = [{"id_game":"1",
                    "name_home":"Арсенал",
                    "name_gyest":"Юность",
                    "id_home_team":"1",
                    "id_gyest_team":"2",
                    "date":"2016-01-29",
                    "time":"18.00",
                    "home_goals":"12",
                    "gyest_goals":"4",
                    "game_description":"x",
                    "finish":"1"},



                    {"id_game":"8",
                    "name_home":"Арсенал",
                    "name_gyest":"Пром Сити",
                    "id_home_team":"1",
                    "id_gyest_team":"6",
                    "date":"0000-00-00",
                    "time":"18.00",
                    "home_goals":"0",
                    "gyest_goals":"0",
                    "game_description":"x",
                    "finish":"1"}];


});
