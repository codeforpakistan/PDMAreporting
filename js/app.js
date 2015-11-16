var app = angular.module('pdmadataentry',['ngRoute']);

var baseURL = 'http://localhost/PDMAreporting/';

app.config(function($routeProvider) {
    
    $routeProvider.
      when('/Deadinjured', {
        templateUrl: baseURL+'dataentry/deadinjured',
        controller: 'DeadInjuredCtrl'
    }).
      when('/Housedamage', {
        templateUrl: baseURL+'dataentry/housedamage',
        controller: 'HouseDamageCtrl'
      }).
      when('/Cattles', {
        templateUrl: baseURL+'dataentry/cattles',
        controller: 'CattleCtrl'
        }).
      otherwise({
        redirectTo: '/'
      });
});
 
app.controller('DeadInjuredCtrl', function($scope, $http) {
    // console.log('im here...');
    $scope.controllerName = "DeadInjuredCtrl";
     $http.get(baseURL+'budget/getbudget').success(function(data, status, headers, config){
          $scope.budget = data;
          //console.log(data);
        });

        $scope.AddDeadInjured = function(data){
          //var mydata = JSON.stringify(data);
        
          $scope.message = "Data is being inserted...";
              $http.post('http://localhost/PDMAreporting/deadinjured/add',data).success(function(data, status, headers, config){
  
                $scope.message = "Data Inserted";
              });
        }

        //get dead data
              $http.get(baseURL+'deadinjured/get_all').success(function(data, status, headers, config){
              
                $scope.table_info = data;
          console.log(data);
              });

});
 
app.controller('HouseDamageCtrl', function($scope, $http) {

    $scope.controllerName = "HouseDamageCtrl";
        $http.get(baseURL+'budget/getbudget').success(function(data, status, headers, config){
          $scope.budget = data;
          //console.log(data);
        });

        $scope.AddHouseDamage = function(data){
          //var mydata = JSON.stringify(data);
          $scope.message = "Data is being inserted...";
              $http.post('http://localhost/PDMAreporting/house/add',data).success(function(data, status, headers, config){
              
                $scope.message = "Data Inserted";
              });
        }

      
      //get houses data
              $http.get(baseURL+'house/get_all').success(function(data, status, headers, config){
              
                $scope.table_info = data;
          console.log(data);
              });
            

});

app.controller('CattleCtrl', function($scope, $http) {

    $scope.controllerName = "CattleCtrl";
        $http.get(baseURL+'budget/getbudget').success(function(data, status, headers, config){
          $scope.budget = data;
          //console.log(data);
        });

  $scope.addCattle = function(data){
    //var mydata = JSON.stringify(data);
    $scope.message = "Data is being inserted...";
        $http.post('http://localhost/PDMAreporting/cattle/add',data).success(function(data, status, headers, config){
          
          $scope.message = "Data Inserted";
        });
    /*
        $http.get('http://localhost/PDMAreporting/cattle/add2/'+1).success(function(data, status, headers, config){
          console.log(data);
        });
    */
  }

    //get cattle data
              $http.get(baseURL+'cattle/get_all').success(function(data, status, headers, config){
              
                $scope.table_info = data;
          console.log(data);
              });

});