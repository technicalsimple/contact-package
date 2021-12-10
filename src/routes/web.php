<?php

Route::group(['namespace' => 'simple\Contact\Http\Controllers'], function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@store');
});
