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

Route::get('/', 'HomeController@showWelcome');

Route::get('api.test1/news', 'NewsController@getJSONNews');

Route::get('api.test1/news/{id}', 'NewsController@getOneJSONNews');

Route::get('api.test1/news/search/{name}', 'NewsController@searchJSONNews');

Route::get('api.test1/news/tag/search/{tag}', 'NewsController@searchJSONNewsTag');

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@setLogin');

Route::get('registration', 'AuthController@registrationForm');
Route::post('registration', 'AuthController@registrationUser');

Route::get('logout', 'AuthController@logout');

Route::get('change-news-api/{id}', 'RequestAPIController@formMakeChanges');
Route::post('change-news-api/{id}', 'RequestAPIController@savingChangesNews');

Route::get('get-all-api-news', 'RequestAPIController@showAllNews');
Route::get('one-news-api/{id}', 'RequestAPIController@displayOneNews');

Route::get('news-api-search', 'RequestAPIController@formSearchNews');
Route::post('news-api-search', 'RequestAPIController@showSearchNews');

Route::get('review-news-api-search', 'RequestAPIController@formSearchNewsAndReview');
Route::post('review-news-api-search', 'RequestAPIController@showSearchNewsAndReview');

Route::get('delete-news-api/{id}', 'RequestAPIController@removalNews');

Route::get('create-news-api', 'RequestAPIController@formCreatingNews');
Route::post('create-news-api', 'RequestAPIController@addingCreatedNews');

Route::get('api.test1/news/delete/{id}', 'NewsController@deteteJSONNews');
Route::delete('api.test1/news/delete/{id}', 'NewsController@deteteJSONNews');

Route::post('api.test1/news/change/{id}', 'NewsController@changeJSONNews');

Route::post('api.test1/news/create', 'NewsController@createJSONNews');

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

Route::model('news', 'News');
Route::get('change-news/{news}', "NewsController@changeNews");
Route::post('change-news', 'NewsController@addChangeNews');

Route::get('ajax-change-news/{news}', 'AjaxController@changeNews');

Route::post('ajax-change-news/ajax-change', array('as' => 'ajax-change',
    'ajax-change-news' => function () {
echo AjaxController::ajaxAddChangeNews();
}
));

Route::get('ajax-add-news', 'AjaxController@ajaxAddNews');
Route::post('ajax-add-news', "AjaxController@ajaxAdd");




Route::post('api.test1.api-login', 'UserAPIController@login');

Route::post('api.test1.api-registration', 'UserAPIController@registration');

Route::post('api.test1.api-islogged', 'UserAPIController@isLogged');

Route::post('api.test1.api-logout', 'UserAPIController@logout');



//Route::post('api.test1.api/news', 'APINewsController@allNews');
//
    //Route::post('api.test1.api/one-news', 'APINewsController@oneNews');
//
    //Route::post('api.test1.api/news/change', 'APINewsController@changeNews');
//
    //Route::post('api.test1.api/news/delete', 'APINewsController@deteteNews');
//
    //Route::post('api.test1.api/news/create', 'APINewsController@createNews');
//
    //Route::post('api.test1.api/news/search', 'APINewsController@searchNews');
//
    //Route::post('api.test1.api/news/tag-search', 'APINewsController@tagSearchNews');


Route::get('api-login', 'APIAuthComtroller@apiloginForm');

Route::post('api-login', 'APIAuthComtroller@login');

Route::get('api-all-news', 'APIAuthComtroller@showAllNews');

Route::model('news', 'News');
Route::get('api-one-news/{news}', 'APIAuthComtroller@displayOneNews');

Route::get('api-change-news/{news}', 'APIAuthComtroller@getChangeNewsForm');

Route::post('api-change-news/{news}', 'APIAuthComtroller@savingChangesNews');

Route::get('api-delete-news/{news}', 'APIAuthComtroller@removalNews');

Route::get('api-create-news', 'APIAuthComtroller@createNewsForm');

Route::post('api-create-news', 'APIAuthComtroller@addingCreatedNews');

Route::get('api-search-news', 'APIAuthComtroller@formSearchNews');

Route::post('api-search-news', 'APIAuthComtroller@showSerchNews');

Route::get('api-tag-search-news', 'APIAuthComtroller@formTagSearchNews');

Route::post('api-tag-search-news', 'APIAuthComtroller@showTagSerchNews');

Route::get('api-registration', 'APIAuthComtroller@apiregistrationForm');

Route::post('api-registration', 'APIAuthComtroller@registration');

Route::get('api-logout', 'APIAuthComtroller@logout');










