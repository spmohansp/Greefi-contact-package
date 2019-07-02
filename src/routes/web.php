<?php

//Route::get('contact',function(){
//    return view('Contact::contact');
//});


Route::group(['namespace'=>'GreefiTech\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@contact');
    Route::post('contact','ContactController@SaveContact')->name('SubmitContactForm');
});

