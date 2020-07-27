'use strict';
 
var app = angular.module("myRegister", [])
							    .controller("RegisterCtrl", function($scope, $http){
									$scope.RegisterUser = function(){
										$http.post("register_query.php", {'username': $scope.username, 'email': $scope.email,'pass1': $scope.pass1, 'pass2': $scope.pass2 })
										.then(function () {					
											$scope.msg = "Data inserted";
										});
									
									};
								 });
