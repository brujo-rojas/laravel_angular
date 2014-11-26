'use strict';

/**
 * @ngdoc overview
 * @name publicApp
 * @description
 * # publicApp
 *
 * Main module of the application.
 */
angular
  .module('publicApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/inicio', {
        templateUrl: '/f/exp2/template', // vista que carga en ng-view
        controller: 'MainCtrl'
      })
      .otherwise({
        redirectTo: '/inicio'
      });
  });
