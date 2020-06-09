<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(['auth.shop'])->name('home');
Route::get('/app', function () {
    return view('index');
})->middleware(['auth.shop'])->name('home');

Route::get('search/testperformance','SearchController@searchProductTestPerformance')->name('searchTestPerformance');
Route::get('search/testperformance1','SearchController@searchProductTestPerformance1')->name('searchTestPerformance1');


Route::group(['middleware'=> 'auth.shop'],function (){
    // route save data test
    Route::get('/getDataProductTest','ProductController@getProductTest')->name('getdataProductTest');
    Route::get('/getDataProductDetailTest','ProductController@getProductTestDetail')->name('getdataProductDetailTest');

    // route load -> save data
    Route::get('/getAllProduct','ProductController@getProducts')->name('getallProduct');
    Route::get('/getAllVariant','VariantController@getVariants')->name('getallVariant');
    Route::get('/getAllCollection','CollectionController@getCollections')->name('getAllCollection');

    // route config
    Route::get('setting','SettingController@index')->name('getSetting');
    Route::post('setting/save','SettingController@save')->name('postSetting');

    // route product
    Route::get('product/getlist','ProductController@getlist')->name('getList');
    Route::get('product/getdetail/{id}','ProductController@getListProductWithID')->name('getDetailProduct');

    Route::get('product/getview/{id}','ProductController@getedit')->name('getEdit');
    Route::post('product/postnew/{id}','ProductController@postUpdate')->name('postAddNew');

    Route::get('product/refresh','ProductController@refreshData')->name('getRefreshProduct');

    Route::get('product/getvariant/{id}','VariantController@getlistvariant')->name('getListVariant');

    Route::post('product/getlocales','ProductController@getDataAjax')->name('getAjaxProduct');

    // test search
    Route::get('searchTest','SearchController@searchBlog')->name('getSearch');
    Route::get('product/search','ProductController@getSuggestionsProducts')->name('getSuggestionsProducts');

    //route collections
    Route::get('collections/getlist','CollectionController@getListCollections')->name('getListCollection');

    Route::get('collection/getview/{id}','CollectionController@getCollectionEdit')->name('getCollectionEdit');
    Route::post('collection/postnew/{id}','CollectionController@postNewLocales')->name('postAddNewLocales');

    Route::get('collection/refresh','CollectionController@refreshData')->name('getRefreshCollection');

    Route::get('collection/getdetail/{id}','CollectionController@getListCollectionWithID')->name('getDetailCollection');

    Route::post('collection/getlocales','CollectionController@getDataAjax')->name('getAjaxCollection');

    //route report
    Route::get('/report','ReportController@getDashboard')->name('homereport');

    Route::get('/reporttest','ReportController@addPhraseHot')->name('testreport');

    //route blogs
    Route::get('blogs/getdata','BlogsController@getBlogs')->name('getDataBlogs');

    Route::get('blogs/parent/getdata','BlogsController@getDataBlogsParent')->name('getDataParentBlogs');
    //route pages
    Route::get('pages/getdata','PagesController@getDataPages')->name('getDataPages');

    //route locales
    Route::get('locales/list','LocalesController@getListLocale')->name('listLocale');
    Route::get('locales/getLocales','LocalesController@viewCreateLocale')->name('getLocales');
    Route::get('locales/getShopLocales','LocalesController@getLocales')->name('getShopLocales');
    Route::post('locales/postLocales','LocalesController@postLocale')->name('postLocales');
    Route::get('locale/remove/{id}','LocalesController@getRemoveLocale')->name('removeLocales');
    Route::get('locale/publish/{id}','LocalesController@getPublishLocale')->name('getpublishLocales');
});

