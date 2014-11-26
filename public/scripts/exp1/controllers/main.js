'use strict';

/**
 * @ngdoc function
 * @name publicApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the publicApp
 */
angular.module('publicApp')
  .controller('MainCtrl', ['$scope', '$http', function ($scope, $http) {

  	//al iniciar este controller, hace una peticion en mostrar
    $http.get('/f/exp1/lista').success(function(data) {
      $scope.lista = data;
    });

  }]);
