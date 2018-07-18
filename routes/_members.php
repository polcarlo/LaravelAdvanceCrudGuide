<?php



$prefix = config('members.members.prefix');

Route::group(['namespace'=>'Members','prefix' => $prefix], function() use($prefix){

		Route::get('/','IndexController@index')->name($prefix.'.index');
		Route::post('/','ActionController@doCreate')->name($prefix.'.do-create');

});