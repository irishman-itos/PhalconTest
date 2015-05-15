'use strict';

app.directive('logOut', function () {
    return {
        restrict: 'E',
        templateUrl: 'js/views/logout.phtml',
        controller: '@',
        name: 'controllerName'
    };
});