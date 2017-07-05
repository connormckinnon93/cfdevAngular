'use strict';

angular.module('myApp.devsite', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/devsite', {
    	templateUrl: 'devsite/devsite.php',
    	controller: 'DevCtrl'
  	});
}])

.controller('DevCtrl', ['$scope', '$http', function($scope, $http) {
	$scope.courses = ['NONE'];
	$scope.filter = 'working';
	$scope.heading = 'Development Site';
	$scope.type = 'devsite';
	$scope.action = 'Review';
	
	$http({
		method: 'GET',
		url: 'api/coursesC.php'
	}).then(function successCallback(response) {
		var busCourses = response.data.business;
		var comCourses = response.data.community;
		var creCourses = response.data.creative;
		var eduCourses = response.data.education;
		var envCourses = response.data.environment;
		var humCourses = response.data.humanities;
		var lanCourses = response.data.language;
		var tecCourses = response.data.technology;
		
		$scope.busCourses = [];
		$scope.comCourses = [];
		$scope.creCourses = [];
		$scope.eduCourses = [];
		$scope.envCourses = [];
		$scope.humCourses = [];
		$scope.lanCourses = [];
		$scope.tecCourses = [];
		
		for (var key in busCourses) {
			var obj = busCourses[key];
			if(obj.status == 'working') {
				$scope.busCourses.push(obj);
			}
        }
		for (var key in comCourses) {
			var obj = comCourses[key];
			if(obj.status == 'working') {
				$scope.comCourses.push(obj);
			}
        }
		for (var key in creCourses) {
			var obj = creCourses[key];
			if(obj.status == 'working') {
				$scope.creCourses.push(obj);
			}
        }
		for (var key in eduCourses) {
			var obj = eduCourses[key];
			if(obj.status == 'working') {
				$scope.eduCourses.push(obj);
			}
        }
		for (var key in envCourses) {
			var obj = envCourses[key];
			if(obj.status == 'working') {
				$scope.envCourses.push(obj);
			}
        }
		for (var key in humCourses) {
			var obj = humCourses[key];
			if(obj.status == 'working') {
				$scope.humCourses.push(obj);
			}
        }
		for (var key in lanCourses) {
			var obj = lanCourses[key];
			if(obj.status == 'working') {
				$scope.lanCourses.push(obj);
			}
        }
		for (var key in tecCourses) {
			var obj = tecCourses[key];
			if(obj.status == 'working') {
				$scope.tecCourses.push(obj);
			}
        }
		
		$scope.courses = [];
		
		if($scope.busCourses.length > 0) {
			$scope.courses.push({'title':'Business', 'courseList':$scope.busCourses});
		}
		if($scope.comCourses.length > 0) {
			$scope.courses.push({'title':'Community', 'courseList':$scope.comCourses});
		}
		if($scope.creCourses.length > 0) {
			$scope.courses.push({'title':'Creative', 'courseList':$scope.creCourses});
		}
		if($scope.eduCourses.length > 0) {
			$scope.courses.push({'title':'Education', 'courseList':$scope.eduCourses});
		}
		if($scope.envCourses.length > 0) {
			$scope.courses.push({'title':'Environment', 'courseList':$scope.envCourses});
		}
		if($scope.lanCourses.length > 0) {
			$scope.courses.push({'title':'Language', 'courseList':$scope.lanCourses});
		}
		if($scope.humCourses.length > 0) {
			$scope.courses.push({'title':'Humanities', 'courseList':$scope.humCourses});
		}
		if($scope.tecCourses.length > 0) {
			$scope.courses.push({'title':'Technology', 'courseList':$scope.tecCourses});
		}
				
	}, function errorCallback(response) {
		console.log('error');
	});
}]);