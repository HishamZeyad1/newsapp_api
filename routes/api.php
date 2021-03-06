<?php
namespace App\Database\routes\api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use App\Http\Controllers\Api;

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
// Route::get( 'users' , 'Api\\UserController@index');


// Route::get( 'authors' , 'Api\\UserController@index');
// Route::get( 'author/{id}' , 'Api\\UserController@show' );


// Http\Api\UserController@in
// Route::get('users',[UserController::class, 'index']);

// Route::get('/authors', [App\Http\Controllers\Api\UserController::class, 'index']);

// Route::get('/users', 'app\Http\Controllers\UserController@all');
// Route::get( 'authors' , 'UsersController@index');
// Route::get( 'authors/{id}' , 'Api\\UserController@show' );


// /**
//  * @User Related
//  */
// Route::get( 'authors' , 'Api\\UserController@index');
// Route::get( 'authors/{id}' , 'Api\\UserController@show' );

// // End User Related
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('authors',function(){
//     $users=\App\Models\User::paginate();
//     return new \App\Http\Resources\UsersResource($users);
//     // return \App\Models\User::all();

// });

// Route::get('authors/{id}',function(){
//     $users=\App\Models\User::paginate();
//     return new \App\Http\Resources\UsersResource($users);
//     // return \App\Models\User::all();

// });

// Route::get( 'authors' , 'Api\\UserController@index');
// Route::get( 'authors/{id}' , 'Api\\UserController@show' );

// End User Related


/**
 * @User Related
 */
// Route::get('authors', 'Api\UserController@index');
Route::get('authors', 'App\Http\Controllers\Api\UserController@index');
Route::get('authors/{id}', 'App\Http\Controllers\Api\UserController@show');

Route::get('posts/author/{id}', 'App\Http\Controllers\Api\UserController@posts');
Route::get('comments/author/{id}', 'App\Http\Controllers\Api\UserController@comments');

// End User Related

/**
 * @Post related
 */

// Route::get('categories', 'Api\CategoryController@index');
// Route::get('posts/categories/{id}', 'Api\CategoryController@posts');
// Route::get('posts', 'Api\PostController@index');
// Route::get('posts/{id}', 'Api\PostController@show');
// Route::get('comments/posts/{id}', 'Api\PostController@comments');

// End Post Related

// Route::post('register', 'Api\UserController@store');
// Route::post('token', 'Api\UserController@getToken');

// Route::middleware('auth:api')->group( function(){

//     Route::post( 'update-user/{id}' , 'Api\UserController@update' );
//     Route::post( 'posts' , 'Api\PostController@store' );
//     Route::post( 'posts/{id}' , 'Api\PostController@update'  );
//     Route::delete( 'posts/{id}' , 'Api\PostController@destroy'  );

//     Route::post( 'comments/posts/{id}' , 'Api\CommentController@store' );

//     Route::post( 'votes/posts/{id}' , 'Api\PostController@votes' );

// } ) ;