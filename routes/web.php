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
    $threads=App\Thread::paginate(15);
    return view('welcome',compact('threads'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('thread/search','ThreadController@search');

Route::post('/thread/mark-as-solution','ThreadController@markAsSolution')->name('markAsSolution');
Route::resource('/thread','ThreadController');


Route::resource('comment','CommentController',['only'=>['update','destroy']]);

Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');

Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');


Route::post('comment/like','LikeController@toggleLike')->name('toggleLike');

Route::get('/user/profile/{user}', 'UserProfileController@index')->name('user_profile')->middleware('auth');

Route::get('/markAsRead',function(){
    auth()->user()->unreadNotifications->markAsRead();
});
Route::get('/notification', function () {
    return view('layouts/partials/notification/replied_to_thread');
})->name('notifications');

Route::get('/blog','SummernoteController@index' )->name('blog');
Route::post('insert','SummernoteController@insert');
Route::get('blog/viewCode','SummernoteController@viewCode');
Route::get('readInfo/{id}','SummernoteController@readInfo');
Route::get('deleteInfo/{id}','SummernoteController@deleteInfo');
Route::get('editInfo/{id}','SummernoteController@editInfo');
Route::post('updateInfo','SummernoteController@updateInfo');
