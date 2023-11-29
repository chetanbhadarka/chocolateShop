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

Route::get('/', 'Views@index');
Route::get('/register', 'Views@register');
Route::get('/login', 'Views@login');
Route::get('/about', 'Views@about');
Route::get('/contact', 'Views@contact');
Route::post('/contactus', 'Contact@contactus');
Route::post('/register','Register@insert');
Route::post('/login','Register@dologin_check');
Route::get('/logout','Register@logout');
Route::get('/Productlist/{id}', 'Views@product_list');
Route::get('/single/{id}','Views@single_page');

Route::get('/cart', 'Cart@viewcart');
Route::post('/insertcart', 'Cart@insertcart');

Route::get('/cart/{id}', 'Cart@removecart');
Route::post('/checkout', 'Cart@checkout');


Route::get('/admin', 'Admin\AdminLogin@login_form');
Route::post('/admincheck', 'Admin\AdminLogin@login_check');


Route::group(['middleware' => 'admincheck'],function ()
    {
        Route::get('/admin/index', 'Admin\AdminSide@index');
        Route::get('/admin/logout', 'Admin\AdminLogin@logout');

        Route::get('/admin/addcategory', 'Admin\Category@addcategory_form');
        Route::get('/admin/viewcategory', 'Admin\Category@viewcategory_form');
        Route::post('/admin/insertcategory', 'Admin\Category@insert_category');
        Route::get('/admin/editcategory/{id}', 'Admin\Category@edit_category');
        Route::get('/admin/deletecategory/{id}', 'Admin\Category@delete_category');
        Route::post('/admin/updatecategory/{id}', 'Admin\Category@update_category');

        Route::get('/admin/addproduct', 'Admin\Product@addproduct_form');
        Route::get('/admin/viewproduct', 'Admin\Product@viewproduct_form');
        Route::post('/admin/insertproduct', 'Admin\Product@insert_product');
        Route::get('/admin/deteteproduct/{id}', 'Admin\Product@delete_product');
        Route::get('/admin/editproduct/{id}', 'Admin\Product@edit_product');
        Route::post('/admin/updateproduct', 'Admin\Product@update_product');

        Route::get('/admin/viewcontact', 'Contact@viewcontact');

        Route::get('/admin/user', 'About@userinfo');

        Route::get('/admin/vieworder', 'Admin\AdminPages@vieworder');
        Route::get('/admin/acceptorder/{id}', 'Admin\AdminPages@acceptorder');
        Route::get('/admin/deleteorder/{id}', 'Admin\AdminPages@deleteorder');
        Route::get('/admin/confirmorder', 'Admin\AdminPages@confirmorder');


    });

