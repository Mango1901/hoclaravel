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
//Home
Route::get('/','Home_Controller@index');
Route::get('/Home','Home_Controller@index');
Route::get('/404','Home_Controller@errors_page');

//search
Route::get('/show-search','Home_Controller@show_search');
Route::post('/search','Home_Controller@search');

//admin
Route::get('/dashboard','Admin_Controller@show_dashboard');
Route::get('/admin','Admin_Controller@admin');
Route::post('/admin-login','Admin_Controller@admin_login');
Route::get('/logout','Admin_Controller@logout');
//category
Route::get('/add-category','Category_Controller@add_category');
Route::post('/save-category','Category_Controller@save_category');
Route::get('/category-list','Category_Controller@category_list');
Route::get('/non-active-category/{id}','Category_Controller@non_active_category');
Route::get('/active-category/{id}','Category_Controller@active_category');
Route::get('/edit-category/{id}','Category_Controller@show_edit_category');
Route::post('/update-category/{id}','Category_Controller@update_category');
Route::get('/delete-category/{id}','Category_Controller@delete_category');
Route::get('/show-category/{id}','Category_Controller@show_category');
Route::post('/export-csv','Category_Controller@export_csv');
Route::post('/import-csv','Category_Controller@import_csv');

//product
Route::get('/add-product','Product_Controller@add_product');
Route::post('/save-product','Product_Controller@save_product');
Route::get('/product-list','Product_Controller@all_product');
Route::get('/non-active-product/{id}','Product_Controller@non_active_product');
Route::get('/active-product/{id}','Product_Controller@active_product');
Route::get('/edit-product/{id}','Product_Controller@edit_product');
Route::post('/update-product/{id}','Product_Controller@update_product');
Route::get('/delete-product/{id}','Product_Controller@delete_product');
Route::get('/product-details/{id}','Product_Controller@product_details');

//customer
Route::get('/login-checkout','Customer_Controller@login_checkout');
Route::post('/login-customer','Customer_Controller@login_customer');
Route::post('/save-checkout','Customer_Controller@save_checkout');
Route::get('/logout-customer','Customer_Controller@logout');

//Banner
Route::get('/manage-slider','Banner_Controller@manage_slider');
Route::get('/add-slider','Banner_Controller@add_slider');
Route::post('/save-slider','Banner_Controller@save_slider');
Route::get('/non-active-slider/{slider_id}','Banner_Controller@non_active_slider');
Route::get('/active-slider/{slider_id}','Banner_Controller@active_slider');
Route::get('/delete-slider/{slider_id}','Banner_Controller@delete_slider');
