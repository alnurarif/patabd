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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/result','WebsiteController@serch')->name('serch.result');
Route::post('/search_filter','WebsiteController@search_filter')->name('search.filter');
Route::get('/result/view/{id}','WebsiteController@search_deails')->name('search.deails');
Route::get('/hotel/booking/{id}','WebsiteController@booking')->name('hotel.booking');
Route::get('/booking/payment','WebsiteController@payment')->name('booking.payment');




Auth::routes();

Route::get('/', 'WebsiteController@index')->name('home');
Route::get('/new', 'WebsiteController@new')->name('new');
Route::get('/about', 'WebsiteController@about')->name('about');
Route::get('/blog', 'WebsiteController@blog')->name('blog');
Route::get('/terms', 'WebsiteController@terms')->name('terms');
Route::get('/privacy_policy', 'WebsiteController@privacy_policy')->name('privacy_policy');
Route::get('/contact', 'WebsiteController@contact')->name('contact');
Route::post('/contact/submit', 'WebsiteController@contact_insert')->name('contact.insert');
//landloard//
Route::get('/landloard/register', 'LandloardController@register')->name('landloard.register');
Route::post('/landloard/create', 'LandloardController@create')->name('landloard.create');
Route::get('/landloard/login_form', 'LandloardController@login_form')->name('landloard.login_form');
Route::get('/landloard/login', 'LandloardController@login')->name('landloard.login');
Route::get('/landloard/logout', 'LandloardController@logout')->name('landloard.logout');
//visitors//
Route::get('/visitor/register', 'VisitorController@register')->name('visitor.register');
Route::post('/visitor/create', 'VisitorController@create')->name('visitor.create');
Route::get('/visitor/login_form', 'VisitorController@login_form')->name('visitor.login_form');
Route::get('/visitor/login', 'VisitorController@login')->name('visitor.login');
Route::get('/visitor/logout', 'VisitorController@logout')->name('visitor.logout');

//rooms routes//
Route::get('/listUrRoom', 'RoomController@select_room')->name('select.room');
Route::get('/room/{id}', 'RoomController@room')->name('room');
Route::get('/bed/{id}', 'RoomController@bed')->name('bed');
Route::get('/amenities/{id}', 'RoomController@amenities')->name('amenities');
Route::get('/address/{id}', 'RoomController@address')->name('address');
Route::get('/house_rules/{id}', 'RoomController@house_rules')->name('house_rules');
Route::get('/restrictions/{id}', 'RoomController@restrictions')->name('restrictions');
Route::get('/rent/{id}', 'RoomController@rent')->name('rent');
Route::get('/availability/{id}', 'RoomController@availability')->name('availability');
Route::get('/title/{id}', 'RoomController@title')->name('title');
Route::get('/photos/{id}', 'RoomController@photos')->name('photos');

Route::post('/listUrRoom/insert', 'RoomController@room_details')->name('room.details');
Route::post('/room/update', 'RoomController@room_update')->name('room.update');
Route::post('/bed/update', 'RoomController@bed_update')->name('bed.update');
Route::post('/amenities/update', 'RoomController@amenities_update')->name('amenities.update');
Route::post('/address/update', 'RoomController@address_update')->name('address.update');
Route::post('rules/update', 'RoomController@rules_update')->name('rules.update');
Route::post('restrictions/update', 'RoomController@restrictions_update')->name('restrictions.update');
Route::post('rent/update', 'RoomController@rent_update')->name('rent.update');
Route::post('availability/update', 'RoomController@availability_update')->name('availability.update');
Route::post('title/update', 'RoomController@title_update')->name('title.update');
Route::post('photos/insert', 'RoomController@photos_insert')->name('photos.insert');


//admin route//
Route::get('/admin', 'AdminController@index')->name('admin.index');

//user route//
Route::get('/admin/alluser', 'UserController@alluser')->name('al.user');
Route::get('/admin/adduser', 'UserController@add_user')->name('add.user');
Route::get('/admin/all/landlord', 'UserController@landlord')->name('all.landlord');
Route::get('/admin/landlord/delete/{id}', 'UserController@landlord_delete')->name('delete.landlord');

//about route//
Route::get('/admin/all/about', 'AboutController@all_about')->name('all.about');
Route::get('/admin/view/about/{id}', 'AboutController@about_view')->name('view.about');
Route::get('/admin/edit/about/{id}', 'AboutController@about_edit')->name('edit.about');
Route::post('/admin/updated/about', 'AboutController@about_up')->name('about.up');

//privacy//
Route::get('/admin/all/privacy', 'PrivacyController@all_privacy')->name('all.privacy');
Route::get('/admin/view/privacy/{id}', 'PrivacyController@privacy_view')->name('view.privacy');
Route::get('/admin/edit/privacy/{id}', 'PrivacyController@privacy_edit')->name('privacy.edit');
Route::post('/admin/updated/privacy', 'PrivacyController@privacy_up')->name('privacy.up');


//contact route//
Route::get('/admin/all/contact', 'ContactController@index')->name('contact');
Route::get('/admin/view/contact/{id}', 'ContactController@con_view')->name('con.view');
Route::get('/admin/delete/contact/{id}', 'ContactController@con_del')->name('con.delete');

//
Route::get('/admin/room/list', 'ListroomController@room_list')->name('room.list');
Route::get('/admin/approve/list', 'ListroomController@approve_list')->name('approve.list');
Route::get('/admin/cancel/list', 'ListroomController@cancel_list')->name('cancel.list');
Route::get('/admin/room/approve/{id}', 'ListroomController@approve_room')->name('approve.room');
Route::get('/admin/room/cancel/{id}', 'ListroomController@cancen_room')->name('cancel.room');
Route::get('/admin/room/view/{id}', 'ListroomController@room_view')->name('view.room');


//terms route//
Route::resource('admin/terms', 'TermsController');
Route::resource('admin/blog', 'BlogController');
Route::resource('admin/news', 'NewsController');


Route::get('admin/advertisement', 'AdvertisementController@index')->name('advertisement');
Route::post('admin/advertisement/store', 'AdvertisementController@store')->name('advertisement.store');
Route::get('admin/advertisement/edit/{id}', 'AdvertisementController@edit')->name('advertisement.edit');
Route::get('admin/advertisement/destroy/{id}', 'AdvertisementController@destroy')->name('advertisement.destroy');
