'use strict';

app.controller('SignInFormCtrl', function($scope, $modal) {
    $scope.animationsEnabled = true;

    $scope.open = function (size) {

        var modalInstance = $modal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'js/views/signInForm.phtml',
            controller: 'SignInCtrl',
            size: size
       });

    };

    $scope.toggleAnimation = function () {
        $scope.animationsEnabled = !$scope.animationsEnabled;
    };

});