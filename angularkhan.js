var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(function($routeProvider,$httpProvider){
    $routeProvider.
		when('/addproduct',{
               templateUrl: 'addproduct.html',
               controller: 'myController'
         }).   
        when('/viewproduct',{
                     templateUrl: 'viewproducts.html',
                     controller: 'getController'
        }).
		when('/updateproduct/:id',{
                     templateUrl: 'updateproduct.html',
                     controller: 'updateCtrl'
        }).
		when('/updateproduct/action=:id',{
                     templateUrl: 'updateproduct.html',
                     controller: 'updateCtrl'
        })
		$httpProvider.defaults.headers.post['Content-Type']='application/x-www-form-urlencoded;charset=utf-8';

	
});
myApp.controller("myController",function($scope,$http){
    $scope.insertData = function(){
        $scope.successMessage = 0;
        $http.post("addProduct.php",{'pname': $scope.productname,'company': $scope.company,'price': $scope.price,'quantity':$scope.quantity})
        .success(function(data,status,headers,config){
           $scope.successMessage = 1; 
        });
    }
    
});

myApp.controller('getController', ['$scope', '$http', function ($scope, $http) {
            $http.get("viewproducts.php")
                .success(function(data){
                    $scope.data = data;
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });
 }]);

myApp.controller("deleteCtrl",function($scope,$http){
    $scope.delete = function(index,idx){
        $http.post("delete.php?action=delete_entry",{'id':index})
        .then(function(data){
            $scope.data.splice(idx, 1);
        });
    }
    
});
myApp.controller("updateCtrl",['$scope','$http','$routeParams','$location',function($scope,$http,$routeParams,$location){

	$scope.update = function(){
		 var id = $routeParams.id;
		 console.log(id);
		$http.post("update.php",{'id':id,'pname': $scope.productname,'company': $scope.company,'price': $scope.price,'quantity':$scope.quantity})
			.success(function(data,status,headers,config){
			$location.path('/viewproduct');
	});
	}
}]);

