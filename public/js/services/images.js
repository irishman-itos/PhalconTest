'use strict';

app.factory('ImagesService', function ($resource) {
    return $resource('/get-images-list/:id', {id: '@id'}, {
        'get':    {method:'GET'},
        'save':   {method:'POST'},
        'query':  {method:'GET', isArray:true},
        'delete': {method:'DELETE'}}
    );
})