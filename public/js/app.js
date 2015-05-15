'use strict';

var app = angular.module('phalcone', [
    'ui.bootstrap',
    'ngRoute',
    'ngTouch',
    'ngAnimate',
    'ngCookies',
    'angularFileUpload',
    'ngResource'
]);

app.controller('MainController', function ($scope, $rootScope, $cookieStore) {
    if ($cookieStore.get('globals') === undefined) {
        $rootScope.auth = false;
    } else {
        $rootScope.email = $cookieStore.get('globals').currentUser.email;
        $rootScope.auth = true;
    }
});

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/dashboard', {
            templateUrl: '/views/dashboard.phtml'
//            controller: 'DashboardCtrl'
        }).
        when('/uploads', {
            templateUrl: '/views/uploads.phtml'
        }).
        when('/slider', {
            templateUrl: '/views/slider.phtml'
        }).
        when('/', {
            templateUrl: '/views/index.phtml'
        }).
        otherwise({
            redirectTo: '/'
        });
}]);

app.controller('MenuController', function () {
    this.menu = menus;
});

var menus = [
    {
        label: 'About',
        url: '#',
        show: true
    },
    {
        label: 'Contact',
        url: '#',
        show: true
    }
];
