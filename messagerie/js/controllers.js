var controllers = angular.module('messagerie.controllers', [])
.controller('HomeController', function($scope, $http){
	$scope.categories = [{catName:"Asie" , nbNewMsg: 10},{catName:"Afrique" , nbNewMsg: 10},{catName:"Europe" , nbNewMsg: 10},{catName:"Amérique" , nbNewMsg: 10},{catName:"Océanie" , nbNewMsg: 10}];
	
	$scope.publicMessages = [{content: "Youssouf AU secours", date: "03/12/2015"}, {content: "Youssouf AU secours", date: "03/12/2015"}];
	$scope.currentCat = "Asie";	
	$scope.changeCurrentCat = function(catName){
		$scope.currentCat = catName;
	}
	$scope.sendMessage = function(){
		$scope.publicMessages.push({content: $scope.messageContent, date: new Date()});
	}
	});