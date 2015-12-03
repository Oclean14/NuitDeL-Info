var lakServerApp = angular.module('messagerie', ['ui.router','messagerie.services','messagerie.controllers','messagerie.directives', 'messagerie.factory']);
lakServerApp.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider

  .state('authentification', {
    url: '/home',
    templateUrl: 'templates/views/home.html',
    controller: 'HomeController'
  });
  
  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/home');
});