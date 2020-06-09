<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/search','SearchController@search');

Route::get('/getSearchFormData1','SearchController@getSearchFormData');

Route::get('/addPhraseWhenAddCart','ReportController@addPhraseHot');

Route::post('/getCollectionFromData','SearchController@getCollectionFormData');

Route::post('/addPhrase', 'ReportController@addPhrase');

// route product
Route::post('/product_update_data','ProductController@productWebhooksUpdate');

Route::post('/product_create_data','ProductController@productWebhooksCreate');

Route::post('/product_delete_data','ProductController@productWebhooksDelete');


