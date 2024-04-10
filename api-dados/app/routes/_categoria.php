<?php

app()->get('categoria/', 'ControllerCategoria@getAll');

app()->group('/categoria', function() {
    app()->get('/{id}', 'ControllerCategoria@get');
    app()->get('/', 'ControllerCategoria@getAll');
    app()->post('/', 'ControllerCategoria@create');
    app()->put('/{id}', 'ControllerCategoria@update');
    app()->delete('/{id}', 'ControllerCategoria@remove');
});