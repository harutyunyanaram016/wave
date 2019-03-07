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

Route::get('/', 'IndexController@index')->name('mainpage');
Route::get('/logoneri-patrastum', 'IndexController@logo')->name('logo');
Route::get('/ayceqarteri-patrastum', 'IndexController@card')->name('card');
Route::get('/web-kayqer-yev-logoner', 'IndexController@portfolio')->name('portfolio');
Route::get('/web-kayqeri-patrastum', 'IndexController@about')->name('about');
Route::get('/blog', 'IndexController@blog')->name('blog');
Route::get('/blog-view', 'IndexController@blogView')->name('blog-view');
Route::any('/contact', 'IndexController@contact')->name('contact');
Route::get('/web-kayqeri-spasarkum', 'IndexController@team')->name('team');
Route::get('/order', 'IndexController@order')->name('order');
Route::get('/javascript-dasyntacner', 'IndexController@js')->name('js');
Route::get('/web-dasyntacner', 'IndexController@web')->name('web');
Route::get('/html-dasyntacner', 'IndexController@html')->name('html');
Route::get('/php-dasyntacner', 'IndexController@php')->name('php');
Route::get('/react-dasyntacner', 'IndexController@react')->name('react');
Route::get('/laravel', 'IndexController@oop')->name('oop');
Route::get('/bnakarani-3d-design', 'IndexController@design')->name('design');
Route::get('/flesh-banneri-patrastum', 'IndexController@banners')->name('banners');


Route::get('getip', function () {
	$ip = \Request::ip();
    $data = \Location::get($ip);
    // dd($data->countryCode);
});


Route::get('language/{locale}', function ($locale) {

    // dd($locale);

    Session::put('locale', $locale);
    // dd(Session::get('locale'));
    return redirect()->back();

    //
})->name('lanuage');

Route::get('/ba', function () {
    return view('ba');
});

Auth::routes();

Route::group(['prefix'=>'admin'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('contact', 'ContactController');
    Route::put('contact', 'ContactController@rem')->name('rem');
    Route::get('rem_contacts', 'ContactController@rem_contacts')->name('rem_contacts');
    Route::resource('order', 'OrderController');
    Route::resource('slide', 'TodoController')->middleware('auth');


});

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {







    Route::get('/', 'Admin\AdminDashboardController@index')->name('admin.index');
    Route::any('/settings', 'Admin\AdminDashboardController@settings')->name('admin.settings');


//    Route::get('/slider', 'Admin\AdminSliderController@index')->name('admin.slider.index');
//
//    Route::post('/slider/edit', 'Admin\AdminSliderController@edit')->name('admin.slider.edit');
//
//    Route::post('/slider/upload', 'Admin\AdminSliderController@upload')->name('admin.slider.upload');
//
//    Route::post('/slider/delete', 'Admin\AdminSliderController@delete')->name('admin.slider.delete');

    Route::resource('contact', 'ContactController');
    Route::resource('order', 'OrderController');

    Route::resource('slide', 'TodoController');



    Route::get('/news', 'Admin\AdminNewsController@index')->name('admin.news.index');
    Route::any('/news/create', 'Admin\AdminNewsController@create')->name('admin.news.create');
    Route::any('/news/create-video', 'Admin\AdminNewsController@createVideo')->name('admin.news.createVideo');
    Route::any('/news/edit/{id}', 'Admin\AdminNewsController@edit')->name('admin.news.edit');
    Route::any('/news/edit-video/{id}', 'Admin\AdminNewsController@editVideo')->name('admin.news.editVideo');
    Route::any('/news/delete/{id}', 'Admin\AdminNewsController@destroy')->name('admin.news.delete');




    Route::resource('users', 'Admin\AdminUsersController', [

        'names' => [

            'index' => 'admin.users.index',

            'store' => 'admin.users.store',

            'create' => 'admin.users.create',

            'destroy' => 'admin.users.destroy',

            'update' => 'admin.users.update',

            'show' => 'admin.users.show',

            'edit' => 'admin.users.edit',

        ]

    ]);




    Route::post('/file/upload', 'Admin\AdminProductsController@upload')->name('admin.upload');




    Route::get('StaticPage/list', 'Admin\StaticPageController@index')->name('admin.static.pages.list');
    Route::get('StaticPage/editPage{id}', 'Admin\StaticPageController@edit_view')->name('admin.static.pages.edit.view');
    Route::post('StaticPage/edit{id}', 'Admin\StaticPageController@edit')->name('admin.static.pages.edit');
    Route::any('StaticPage/delete{id}', 'Admin\StaticPageController@delete')->name('admin.static.pages.delete');
    Route::get('create/staticPages', 'Admin\StaticPageController@create_view')->name('admin.static.pages.create.view');
    Route::post('create/Page', 'Admin\StaticPageController@create')->name('admin.static.pages.create');









    Route::resource('categories', 'Admin\AdminCategoriesController', [

        'names' => [

            'index' => 'admin.categories.index',

            'cities' => 'admin.categories.store',

            'create' => 'admin.categories.create',

            'destroy' => 'admin.categories.destroy',

            'update' => 'admin.categories.update',

            'show' => 'admin.categories.show',

            'edit' => 'admin.categories.edit',

        ]

    ]);





    Route::resource('subcategories', 'Admin\AdminSubcategoriesController', [

        'names' => [

            'index' => 'admin.subcategories.index',

            'store' => 'admin.subcategories.store',

            'create' => 'admin.subcategories.create',

            'destroy' => 'admin.subcategories.destroy',

            'update' => 'admin.subcategories.update',

            'show' => 'admin.subcategories.show',

            'edit' => 'admin.subcategories.edit',

        ]

    ]);





    Route::resource('faqs', 'Admin\AdminFaqsController', [

        'names' => [

            'index' => 'admin.faqs.index',

            'store' => 'admin.faqs.store',

            'create' => 'admin.faqs.create',

            'destroy' => 'admin.faqs.destroy',

            'update' => 'admin.faqs.update',

            'show' => 'admin.faqs.show',

            'edit' => 'admin.faqs.edit',

        ]

    ]);






    Route::resource('partners', 'Admin\AdminPartnerController', [

        'names' => [

            'index' => 'admin.partners.index',

            'store' => 'admin.partners.store',

            'create' => 'admin.partners.create',

            'destroy' => 'admin.partners.destroy',

            'update' => 'admin.partners.update',

            'show' => 'admin.partners.show',

            'edit' => 'admin.partners.edit',

        ]

    ]);



});


Route::post('mail/send', 'OrderMailController@send')->name('order_mail_post');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
