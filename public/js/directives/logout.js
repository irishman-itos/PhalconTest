'use strict';

app.directive('logOut', function () {
    return {
        restrict: 'E',
        templateUrl: '/views/logout.phtml',
        controller: '@',
        name: 'controllerName'
    };
});