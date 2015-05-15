'use strict';

app.controller('SignInCtrl', function($scope, $modalInstance, $rootScope, $location, SignInService) {

    SignInService.ClearCredentials();

    $scope.login = function () {
        SignInService.Login($scope.email, $scope.password, $scope.saveMe,  function(response) {
            if(response.success) {
                SignInService.SetCredentials($scope.email, $scope.password);
                $modalInstance.close();
                $location.path('/dashboard');
            } else {
                $scope.error = response.message;
                $scope.dataLoading = false;
            }
        });
    };

    $scope.cancel = function () {
        $modalInstance.dismiss('cancel');
    };

});