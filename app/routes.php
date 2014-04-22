<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//----------------------------------------------------------------------
//----------------------------------------------------------------------


Route::get('news', 'NewsController@viewNews');

Route::get('review', 'ReviewController@viewReview');

Route::get('rubric', 'RubricController@viewRubric');

Route::get('tag', 'TagController@viewTag');

Route::model('news', 'News');
Route::get('one-news/{news}', 'NewsController@getViewsOneNews');

Route::model('review', 'Review');
Route::get('one-review/{review}', 'ReviewController@getViewsOneReview');

Route::post('add-news', 'NewsController@addNews');
Route::get('add-news', 'NewsController@formAddNews');

Route::get('add-review', 'ReviewController@formAddReview');
Route::post('add-review', 'ReviewController@addReview');

Route::get('add-rubric', 'RubricController@formAddRubric');
Route::post('add-rubric', 'RubricController@addRubric');

Route::get('add-tag', 'TagController@formAddTag');
Route::post('add-tag', 'TagController@addTag');

Route::get('delete-news', 'NewsController@listDeleteNews');
Route::post('delete-news', 'NewsController@deleteNews');

Route::get('delete-review', 'ReviewController@listDeleteReview');
Route::post('delete-review', 'ReviewController@deleteReview');


//----------------------------------------------------------------------
//----------------------------------------------------------------------

Route::get('/', 'HomeController@showWelcome');

Route::model('news', 'News');
Route::get('change-news/{news}', "NewsController@changeNews");
Route::post('change-news', 'NewsController@addChangeNews');



Route::get('ajax-change-news/{news}', 'AjaxController@changeNews');
//Route::post('ajax-change/{news}', 'AjaxController@ajaxAddChangeNews');

Route::post('ajax-change-news/ajax-change', array('as' => 'ajax-change', 
                                                  'ajax-change-news' => function () { echo AjaxController::ajaxAddChangeNews();}
                                                  ));

Route::get('ajax-add-news', 'AjaxController@ajaxAddNews');
Route::post('ajax-add-news', "AjaxController@ajaxAdd");



