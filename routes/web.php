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
    return view('welcome');
});

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('road', 'RoadCrudController');
    CRUD::resource('expenditure', 'ExpenditureCrudController');
    CRUD::resource('roadcategory', 'RoadCategoryCrudController');
    CRUD::resource('company', 'CompanyCrudController');
    CRUD::resource('organization', 'OrganizationCrudController');
});
