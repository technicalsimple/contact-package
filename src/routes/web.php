<?php

Route::group(['namespace' => 'Simple\Contact\Http\Controllers'], function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@store');
});
