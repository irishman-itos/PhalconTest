'use strict';

app.factory('SliderService', function ($resource) {
    return $resource('/get-slider-list/', {}, {
        'get':    {method:'GET'},
        'save':   {method:'POST'},
        'query':  {method:'GET', isArray:true},
        'remove': {method:'DELETE'},
        'delete': {method:'DELETE'} }
    );
})