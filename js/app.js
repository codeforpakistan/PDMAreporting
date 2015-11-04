var app = angular.module('pdmadataentry',['ngRoute']);
 
app.config(function($routeProvider) {
 
    $routeProvider.
      when('/Deadinjured', {
        templateUrl: 'deadinjured',
        controller: 'DeadInjuredCtrl'
    }).
      when('/Housedamage', {
        templateUrl: 'housedamage',
        controller: 'HouseDamageCtrl'
      }).
      when('/Cattles', {
        templateUrl: 'cattles',
        controller: 'CattleCtrl'
        }).

      otherwise({
        redirectTo: '/'
      });
});
 
app.controller('DeadInjuredCtrl', function($scope) {
     
});
 
 
app.controller('HouseDamageCtrl', function($scope) {
 
});

app.controller('CattleCtrl', function($scope, $http) {
  $http.get('http://localhost/PDMAreporting/budget/getbudget').success(function(data, status, headers, config){
          $scope.budget = data;
          console.log(data);
        });

  $scope.addCattle = function(data){
    //var mydata = JSON.stringify(data);
    //console.log(mydata);
    //console.log(data);
    $http.post('http://localhost/PDMAreporting/cattle/add',data).success(function(data, status, headers, config){
          console.log(data);
        });
    $http.get('http://localhost/PDMAreporting/cattle/add2/'+1).success(function(data, status, headers, config){
          console.log(data);
        });

    $scope.message = "Form data is received";
  }
});