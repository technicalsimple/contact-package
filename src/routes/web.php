<?php

Route::group(['namespace' => 'technicalsimple\Contact\Http\Controllers'], function (){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@store');
});
