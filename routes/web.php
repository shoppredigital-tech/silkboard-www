<?php

/*------ Pages ---------*/
Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/partner', 'PageController@partner')->name('partner');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/submit', 'PageController@submitContact')->name('contact.submit');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/how-it-works', 'PageController@howitworks')->name('howitworks');
Route::get('/pricing', 'PageController@pricing')->name('pricing');
Route::post('/calculate-shipping', 'PageController@shipCalculate')->name('calculate');
Route::post('/qoute/submit', 'PageController@getQuote')->name('get.quote');
Route::get('/browse-categories', 'PageController@stores')->name('stores');
Route::post('/stores/sort', 'PageController@sortStores')->name('stores.sort');
Route::get('/reviews', 'PageController@reviews')->name('reviews');
Route::post('/reviews/submit', 'PageController@submitReview')->name('reviews.submit');
Route::get('/{initial}-from-{source}-to-{destination}', 'PageController@urlTargetShipping')->name('urlTargetShipping');
Route::get('/{initial}-{content}-from-{source}-to-{destination}', 'PageController@urlTargetSend')->name('urlTargetSend');
Route::get('/{initial}-{cprefix}-{cpostfix}-from-{source}-to-{destination}', 'PageController@urlTargetContent')->name('urlTargetContent');
Route::get('/schedule-pickup', 'SchedulePickupController@index')->name('schedulePickup.Index');
Route::post('/schedule-pickup', 'SchedulePickupController@submit')->name('schedulePickup.Submit');
Route::get('/schedule-pickup/confirm', 'SchedulePickupController@confirm')->name('schedulePickup.confirmPickup');
Route::get('/countries', 'PageController@countryList')->name('countryList');
Route::get('/feedback', 'FeedbackController@index')->name('feedback.Index');
Route::post('/feedback/submit', 'FeedbackController@submit')->name('feedback.submit');
Route::get('/feedback/confirm', 'FeedbackController@confirm')->name('feedback.confirm');
Route::get('/{slug}', 'PageController@viewPage')->name('page');