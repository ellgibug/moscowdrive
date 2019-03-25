<?php

Route::get('', 'FrontPagesController@landing')->name('landing');
Route::get('prices', 'FrontPagesController@prices')->name('prices');

Route::get('contacts', 'FrontPagesController@contacts')->name('contacts');
Route::post('contacts', 'FrontPagesController@send_contacts')->name('send_contacts');

Route::get('pdd', 'FrontPagesController@pdd')->name('pdd');
Route::get('theory', 'FrontPagesController@theory')->name('theory');
Route::get('autodrom', 'FrontPagesController@autodrom')->name('autodrom');
Route::get('exercise_garage', 'FrontPagesController@exercise_garage')->name('exercise_garage');
Route::get('overpass_exercise', 'FrontPagesController@overpass_exercise')->name('overpass_exercise');
Route::get('turn_in_confined_space_exercise', 'FrontPagesController@turn_in_confined_space_exercise')->name('turn_in_confined_space_exercise');
Route::get('turns_90_degrees_exercise', 'FrontPagesController@turns_90_degrees_exercise')->name('turns_90_degrees_exercise');
Route::get('parallel_parking_exercise', 'FrontPagesController@parallel_parking_exercise')->name('parallel_parking_exercise');
Route::get('city', 'FrontPagesController@city')->name('city');
Route::get('driving', 'FrontPagesController@driving')->name('driving');
Route::get('exams', 'FrontPagesController@exams')->name('exams');
Route::get('parking', 'FrontPagesController@parking')->name('parking');
Route::get('student_auto', 'FrontPagesController@student_auto')->name('student_auto');
Route::get('new_auto', 'FrontPagesController@new_car')->name('new_car');
Route::get('admission', 'FrontPagesController@admission')->name('admission');
Route::get('learning', 'FrontPagesController@learning')->name('learning');
Route::get('schedule', 'FrontPagesController@schedule')->name('schedule');
Route::get('gallery', 'FrontPagesController@gallery')->name('gallery');
Route::get('comments', 'FrontPagesController@comments')->name('comments');
Route::get('addresses', 'FrontPagesController@addresses')->name('addresses');

Route::post('send_short_form', 'FrontPagesController@send_short_form')->name('send_short_form');
Route::post('send_comment', 'FrontPagesController@send_comment')->name('send_comment');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');






