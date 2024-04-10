<?php

app()->group('/tarefa', function() {
    app()->get('/{id}', 'ControllerTarefa@get');
    app()->get('/', 'ControllerTarefa@getAll');
    app()->post('/', 'ControllerTarefa@create');
    app()->put('/{id}', 'ControllerTarefa@update');
    app()->delete('/{id}', 'ControllerTarefa@remove');
});