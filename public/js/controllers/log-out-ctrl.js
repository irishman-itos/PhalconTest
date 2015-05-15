'use strict';

app.controller('LogOutCtrl', function($scope, $rootScope, $location, SignInService) {
    $scope.logout = function () {
        SignInService.ClearCredentials();
        $location.path('/');
    }
});