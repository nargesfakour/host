<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('plans');

Route::match(array('GET', 'POST'),'plan/create', 'PlanController@create')->name('plan_create');

Route::match(array('GET', 'PUT'),'plan/{id}/edit', 'PlanController@edit')->name('plan_edit');

Route::get('plan/','PlanController@index')->name('plan_index');

Route::match(array('GET','POST'),'tempitem/create','TemplateItemController@create')->name('tempitem_create');

Route::match(array('GET','POST'),'detail/create','DetailsController@create')->name('detail_create');

Route::get('plan/{id}/show','PlanController@show')->name('plan_show');

Route::get('plan/{id}/delete','PlanController@delete')->name('plan_delete');
