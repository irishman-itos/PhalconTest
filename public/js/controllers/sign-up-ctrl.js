
'use strict';

app.controller('SignUpCtrl', function($scope, $modalInstance) {

    $scope.registration = function () {
        $modalInstance.close();
    };

    $scope.cancel = function () {
        $modalInstance.dismiss('cancel');
    };

});