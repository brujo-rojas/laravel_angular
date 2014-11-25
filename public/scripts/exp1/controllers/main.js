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

    $http.get('/f/exp1/mostrar').success(function(data) {
      $scope.lista = data;
    });

  }]);
