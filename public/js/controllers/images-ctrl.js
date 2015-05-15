'use strict';

app.controller('ImagesCtrl', function ($scope, ImagesService, FileUploader) {
    $scope.images = ImagesService.query();

    var uploader = $scope.uploader = new FileUploader({
        url: '/upload/'
    });

    uploader.filters.push({
        name: 'customFilter',
        fn: function(item /*{File|FileLikeObject}*/, options) {
            return this.queue.length < 10;
        }
    });

    uploader.onCompleteItem = function(fileItem, response, status, headers) {
        $scope.images = ImagesService.query();
    };

    $scope.deleteItem = function (id) {
        var params = {id:id};
        ImagesService.delete(params, function(res) {
            if (res.success === true) {
                $scope.images = ImagesService.query();
            } else {
                //TODO: show msg error
            }
        });
    }
});