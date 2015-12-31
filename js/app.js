var app = angular.module('pdmadataentry',['ngRoute']);

var baseURL = 'http://localhost/PDMAreporting/';

/**
 * ============= CUSTOM FILTERS ===================================
 */
app.filter('sumFilter', function() {
     return function(table_info) {
         var budgetTotal = 0;
         for (i=0; i<table_info.length; i++) {
             budgetTotal = budgetTotal + parseInt(table_info[i].b_amount);    
          };
         return budgetTotal;
     };
 });
/**
 * ================ CUSTOM FILTERS OVER ============================
 */

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
      when('/Complaint', {
        templateUrl: baseURL+'dataentry/complaint',
        controller: 'ComplaintCtrl'
        }).
      otherwise({
        redirectTo: '/'
      });
});
 
app.controller('DeadInjuredCtrl', function($scope, $http, $filter) {
  
     $http.get(baseURL+'budget/get_deadinjured_budget').success(function(data, status, headers, config){
          $scope.budget = data;
        });

        $scope.AddDeadInjured = function(data){
          //var mydata = JSON.stringify(data);
        
          $scope.message = "Data is being inserted...";
              $http.post('http://localhost/PDMAreporting/deadinjured/add',data).success(function(data, status, headers, config){
  
                $scope.message = "Data Inserted";
                $scope.showalert = 1;
              });
        }
        $scope.getbyid = function(id){
          $http.get(baseURL+'/deadinjured/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
            console.log(data);
          });
        }

        //get dead data
        $http.get(baseURL+'deadinjured/get_all').success(function(data, status, headers, config){    
          $scope.table_info = data;
        });

});
 
app.controller('HouseDamageCtrl', function($scope, $http, $filter) {

        $http.get(baseURL+'budget/get_house_budget').success(function(data, status, headers, config){
          $scope.budget = data;
        });

        $scope.AddHouseDamage = function(data){
          //var mydata = JSON.stringify(data);
          $scope.message = "Data is being inserted...";
              $http.post('http://localhost/PDMAreporting/house/add',data).success(function(data, status, headers, config){
              
                $scope.message = "Data Inserted";
                $scope.showalert = 1;
              });
        }

        $scope.getbyid = function(id){
          $http.get(baseURL+'/house/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
            console.log(data);
          });
        }

        //get houses data
        $http.get(baseURL+'house/get_all').success(function(data, status, headers, config){      
          $scope.table_info = data;
        });
            

});

app.controller('CattleCtrl', function($scope, $http, $filter) {

        $http.get(baseURL+'budget/get_cattle_budget').success(function(data, status, headers, config){
          $scope.budget = data;
        });

        $scope.addCattle = function(data){
          //var mydata = JSON.stringify(data);
          $scope.message = "Data is being inserted...";
              $http.post(baseURL + 'cattle/add',data).success(function(data, status, headers, config){          
                $scope.message = "Data Inserted";
                $scope.showalert = 1;
              });
          /*
              $http.get('http://localhost/PDMAreporting/cattle/add2/'+1).success(function(data, status, headers, config){
                console.log(data);
              });
          */
        }


        $scope.getbyid = function(id){
          $http.get(baseURL+'/cattle/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
            //console.log(data);
          });
        }

    //get cattle data
    $http.get(baseURL+'cattle/get_all').success(function(data, status, headers, config){
      $scope.table_info = data;
      //$filter('sumFilter')($scope.table_info);
      //console.log(sum);
      //console.log(data);
    });

});



app.controller('UserCtrl', function($scope, $http) {
        $scope.AddUser = function(data){
          console.log(data);
            $http.post(baseURL + 'user/add',data).success(function(data, status, headers, config){          
                console.log("data inserted");
                $scope.message = "Data Inserted";
                $scope.showalert = 1;
                $scope.getUser();
            });
        }
  
        $scope.getbyid = function(id, set_showUserEditForm){
          $scope.showUserEditForm = set_showUserEditForm;
          $http.get(baseURL + 'user/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
                     });
        }

        $scope.editUserCategory = function(data){ 
          console.log(data); 
            $http.post(baseURL + 'user/edit_category', data).success(function(){
              $scope.message = "Update Successfully";
              $scope.showUserEditForm = 0; 

            });

        }

    //get usr data
    $scope.getUser = function(){
       $http.get(baseURL+'user/get_all').success(function(data, status, headers, config){
        $scope.table_info = data;
      });
    }
    $scope.getUser();

//get complaint
   
});

 

app.controller('budgetCtrl', function($scope, $http) {
        $scope.addBudget = function(data){
          //console.log(data);
            $http.post(baseURL + 'budget/add',data).success(function(data, status, headers, config){          
                if(data.done == true){
                  $scope.message = "Data inserted successfully!";
                  $scope.showalert = 1;
                }

                else
                  $scope.message = "Data could not be inserted";
                
            });
            $scope.getBudget();
        }
  
        $scope.getbyid = function(id, set_showBudgetEditForm){
          $scope.showBudgetEditForm = set_showBudgetEditForm;
          $http.get(baseURL + 'budget/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
            //console.log(data);
          });
        }

        $scope.editBudget = function(data){ 
          //console.log(data); 
            $http.post(baseURL + 'budget/edit', data).success(function(){
              //console.log(data);
              $scope.message_update = "Updated Successfully";
              data.b_year = '';
              data.b_amount = '';
              data.b_category = '';
              $scope.showBudgetEditForm = 0; 

            });
          $scope.getBudget();

        }

    //get budget data
    $scope.getBudget = function(){
       $http.get(baseURL+'budget/getbudget').success(function(data, status, headers, config){
        $scope.table_info = data;
      });
    }

    $scope.getBudget();

});


app.controller('ComplaintCtrl', function($scope, $http) {
        
        $scope.addComplaint = function(data){
        
            $http.post(baseURL + 'complaint/add',data).success(function(data, status, headers, config){          
                console.log(data);
                if(data.done == true){
                  $scope.message = "Data inserted successfully!";
                  $scope.showalert = 1;
                }
                else
                  $scope.message = "Data could not be inserted";
                
            });
            $scope.getComplaint();
        }
  
        $scope.getbyid = function(id, set_showComplaintEditForm){
          $scope.showComplaintEditForm = set_showComplaintEditForm;
          $http.get(baseURL + 'complaint/get_by_id/' + id).success(function(data, status, headers, config){
            $scope.row = data;
            //console.log(data);
          });
        }

        $scope.editComplaint = function(data){ 
          console.log(data);

            $http.post(baseURL + 'complaint/edit', data).success(function(){
              //console.log(data);
              console.log(data);
              $scope.message_update = "Updated Successfully";
            

              /*
              data.b_year = '';
              data.b_amount = '';
              data.b_category = '';
              */
              $scope.showComplaintEditForm = 0; 

            });
          $scope.getComplaint();
        }

        $scope.getComplaint = function(){
          $http.get(baseURL+'complaint/get_all').success(function(data, status, headers, config){
            $scope.table_info = data;
          });
        }

      $scope.getComplaint();
   

});