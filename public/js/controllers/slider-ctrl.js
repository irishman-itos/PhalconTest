'use strict';

app.controller('SliderCtrl', function ($scope) {
    $scope.myInterval = 5000;
    var slides = $scope.slides = [];
    $scope.addSlide = function (i) {
        var newWidth = 600 + slides.length + 1;
        slides.push({
            image: 'http://placehold.it/1900x1080&text=Slide ' + i,
            text: ['Caption 1', 'Caption 2', 'Caption 3']
                [slides.length % 3] + ' '
        });
    };
    for (var i = 0; i < 3; i++) {
        $scope.addSlide(i);
    }
});