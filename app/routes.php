<?php

Route::get('/', function()
{
    dd(App::environment());
});
Route::group(['prefix' => 'api/v1'], function(){


	Route::resource('lessons', 'LessonsController');
	Route::resource('tags', 'TagsController', ['only' => ['index', 'show']]);
	//Route::resource('lesson.tag', 'LessonTagController');
	Route::get('lessons/{id}/tags', 'TagsController@index');

});
