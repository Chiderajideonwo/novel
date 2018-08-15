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



// Route::resource()


Route::group(['middleware'=>['web']], function() {

		


		Route::get('blog/single/{slug}', ['as'=>'blog.single', 'uses' => 'BlogController@public_view'])
		//this line of code below sets the format for the slug,so the route wont go to the controller above if the slug input doesnt match the format in the where fxn.
		->where('slug', '[\w\d\-\_] + ');

		// Route::get('/archive', 'BlogController@index');
 
		Route::get('/home', 'HomeController@index');

		Route::get('blog/create' , 'PostController@create' );

		Route::post('blog/store' , 'PostController@store' );

		Route::get('blog/view' , 'PostController@view' );

		Route::get('blog/read_more/{id}' , 'PostController@read_more' );

		Route::get('/about' , 'AboutController@aboutus' );

		Route::get('/contact' , 'ContactController@getcontactus' );

		Route::post('/contact' , 'ContactController@postcontactus' );

		Route::get('blog/edit/{id}' , 'PostController@edit' );

		Route::patch('blog/update/{id}', 'PostController@update');

		Route::get('blog/delete/{id}' , 'PostController@delete' );

		Route::delete('blog/destroy/{id}','PostController@destroy');

		Route::get('/login', 'Auth\LoginController@login');

		Route::get('/logout', 'Auth\LoginController@logout');

	Route::get('/register','Auth\RegisterController@register');	
	
	Route::get('password/email','Auth\ForgotPasswordController@showLinkRequestForm');

	Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail');

	Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');

	Route::post('password/reset','Auth\ResetPasswordController@reset');		

		Auth::routes();

		//Category Routes, use this convention for CRUD routes
		
		Route::resource('categories', 'CategoryController')->except(['create']);

		Route::resource('tags', 'TagController')->except(['create']);

		Route::post('comments/{post_id}', [ 'uses'=>'CommentsController@store', 'as'=>'comments.store']);


		


});  




