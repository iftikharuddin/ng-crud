var app = angular.module('myApp',[])


.controller("myController",function($scope,$http){
    $scope.insertData = function(){
        $http.post("insert.php",{'name': $scope.name,'fname': $scope.fname,'dept': $scope.dept})
        .success(function(data,status,headers,config){
           $scope.successMessage = "Inserted Successfuly!"; 
        });
    }
    
});


