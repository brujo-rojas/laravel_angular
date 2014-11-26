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
    $http.get('/f/exp2/lista').success(function(data) {
      $scope.lista = data.lista;
    });

    $scope.borrarItem =  function(id) {
    	$http.delete('/f/exp2/item/'+id).success(function(data) {
      		$scope.lista = data.lista;
    	});
    }

    $scope.agregarItem = function() {
    	var item = {
    		titulo : $scope.nuevo_titulo,
    		descripcion : $scope.nueva_descripcion
    	};
    	$http.put('/f/exp2/item/', item).success(function(data) {
    		$scope.nuevo_titulo = "";
    		$scope.nueva_descripcion = "";
      		$scope.lista = data.lista;
    	});
    }

  }]);
