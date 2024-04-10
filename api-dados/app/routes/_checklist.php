<?php

app()->group('/checklist', function() {
    app()->get('/{id}', 'ControllerChecklist@get');
    app()->get('/', 'ControllerChecklist@getAll');
    app()->post('/', 'ControllerChecklist@create');
    app()->put('/{id}', 'ControllerChecklist@update');
    app()->delete('/{id}', 'ControllerChecklist@remove');
});