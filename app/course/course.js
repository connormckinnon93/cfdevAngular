'use strict';

angular.module('myApp.course', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/devsite/:courseId', {
		templateUrl: 'course/course.php',
		controller: 'CourseCtrl'
	});
}])

.controller('CourseCtrl', ['$rootScope', '$scope', '$http', '$routeParams', '$sce', function($rootScope, $scope, $http, $routeParams, $sce) {
	$scope.trustSrc = function(src) {
		return $sce.trustAsResourceUrl(src);
	}
	
	$scope.type = 'devsite';
	
	$http({
		method: 'GET',
		url: 'api/coursesC.php?code=' + $routeParams.courseId
	}).then(function successCallback(response) {
		var course = response.data;
		
		$scope.code = course.code;
		$scope.name = course.name;
		$scope.path = course.path;
		$scope.status = course.status;
		$scope.form = course.reviewForm;
		$scope.sheet = course.reviewSheet;
		$scope.numModules = course.numModules;
		
		$scope.modulePath = $scope.path + '/module' + $scope.numModules[0];
				
		$scope.tab = 1;

		$scope.setTab = function(newTab){
		  $scope.tab = newTab;
		  $scope.modulePath = $scope.path + '/module' + newTab;
		};

		$scope.isSet = function(tabNum){
		  return $scope.tab === tabNum;
		};
		
		
	}, function errorCallback(response) {
		console.log('error');
	});
}]);