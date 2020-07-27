'use strict';
 
var app = angular.module("myLogin", [])
							    .controller("LoginCtrl", function($scope, $http){
									$scope.userLogin = function(){
										$scope.result = "";
										var request = $http({
											method: "POST",
											url: "login_query.php",
											data: {
												username : $scope.username,
												password: $scope.password
											},
											headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
										});
										request.then(function(response){
											if(response.data=="true"){
												$scope.username = "";
												$scope.password = "";
												window.location = "index.php";
											}else{
												$scope.result="Invalid username or Password";
											}
										});
									};
								 });
