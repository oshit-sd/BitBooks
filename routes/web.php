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
    return view('/auth.login');
});
Route::get('/welcome', function () {
    return view('/auth.login');
});


Route::get('/message', 'ChatController@message');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/Search', 'SearchController@search');

    Route::post('/status', 'StatusController@store');

    Route::post('/comments/{id}/{u_id}', 'CommentController@store');
    Route::get('/comments/{id}', 'CommentController@comments');

    Route::get('/MyFriendsComments/{id}/{u_id}', 'CommentController@MyFriendComment');
    Route::post('/MyFriendsComments/{id}/{u_id}', 'CommentController@MyFriendComment');

    Route::get('/StFriendsComments/{id}/{u_id}', 'CommentController@StFriendComment');
    Route::post('/StFriendsComments/{id}/{u_id}', 'CommentController@StFriendComment');

    Route::post('/Likes/{id}', 'LikeController@store');
//    Route::get('/Likes', 'LikeController@showLike');
    Route::post('/myFriendLikes/{id}', 'LikeController@myFriendLikes');
    Route::post('/StFriendLikes/{id}', 'LikeController@stFriendLikes');


    Route::post('/Timeline-edit-profile', 'InformationController@store');
//Route::post('/changeProfile', 'InformationController@store');


    Route::post('/changeProfile', 'InformationController@storeImage');
    Route::post('/changeCover', 'InformationController@storeCoverPhoto');
    Route::get('/changeProfile', 'InformationController@uploadImage');
    Route::get('/changeCover', 'InformationController@uploadCover');


    Route::post('/Timeline-edit-work', 'InformationController@storeWork');
    Route::post('/Timeline-edit-interest', 'InformationController@storeInterest');

    Route::get('/Newsfeed', 'StatusController@index');
    Route::get('/Edit-post/{id}/edit', 'StatusController@edit');
    Route::post('/Edit-post/{id}', 'StatusController@update');
    Route::get('/Edit-image/{id}/image', 'StatusController@image');
    Route::post('/Edit-image/{id}', 'StatusController@update');
    Route::get('/Delete-post/{id}', 'StatusController@destroy');

    Route::get('/StFriend-timeline/{id}', 'InformationController@StFriendTimeline');
    Route::get('/StFriend-timeline-about/{id}', 'InformationController@StFriendTimelineAbout');
    Route::get('/StFriend-timeline-album/{id}', 'InformationController@StFriendTimelineAlbum');
    Route::get('/StFriend-timeline-friends/{id}', 'InformationController@StFriendTimelineFriends');

    Route::get('/Timeline', 'StatusController@indexTimeline');

    Route::get('/Friend-timeline/{id}', 'InformationController@FriendTimeline');
    Route::get('/Friend-timeline-about/{id}', 'InformationController@FriendTimelineAbout');
    Route::get('/Friend-timeline-album/{id}', 'InformationController@FriendTimelineAlbum');
    Route::get('/Friend-timeline-friends/{id}', 'InformationController@FriendTimelineFriends');

    Route::get('/MyFriend-timeline/{id}', 'InformationController@MyFriendTimeline');
    Route::get('/MyFriend-timeline-about/{id}', 'InformationController@MyFriendTimelineAbout');
    Route::get('/MyFriend-timeline-album/{id}', 'InformationController@MyFriendTimelineAlbum');
    Route::get('/MyFriend-timeline-friends/{id}', 'InformationController@MyFriendTimelineFriends');

    Route::get('Confirm-Friend-timeline/{id}', 'InformationController@confirmFriendTimeline');
    Route::get('Confirm-Friend-timeline-about/{id}', 'InformationController@confirmFriendTimelineAbout');
    Route::get('Confirm-Friend-timeline-album/{id}', 'InformationController@confirmFriendTimelineAlbum');
    Route::get('Confirm-Friend-timeline-friends/{id}', 'InformationController@confirmFriendTimelineFriends');

    Route::get('/Find-friends', 'FriendController@findFriends');

    Route::post('/Send_request', 'FriendController@sendRequest');
    Route::post('/Send_request_timeline', 'FriendController@sendRequestTimeline');

    Route::get('/Show-request', 'FriendController@showRequest');

    Route::get('/Notifications/{id}', 'FriendController@Notification');
    Route::get('/SeeAllNoti/{id}', 'FriendController@SeeAllNoti');

    Route::get('/confirmFriend/{id}/{u_name}', 'FriendController@confirmFriend');
    Route::get('/confirmTimelineFriend/{id}/{u_name}', 'FriendController@confirmTimelineFriend');

    Route::get('/Unfriend/{id}', 'FriendController@unFriend');
    Route::get('/unFriendTimeline/{id}', 'FriendController@unFriendTimeline');

    Route::get('/Reject/{id}', 'FriendController@Reject');
    Route::get('/RejectTimeline/{id}', 'FriendController@RejectTimeline');

    Route::get('/My-friends', 'FriendController@showMyFriend');
    Route::get('/Chat', 'ChatController@index');
    Route::get('/Image', 'ImageController@index');
    Route::get('/Video', 'ImageController@indexVideo');
    Route::get('/Timeline-about', 'InformationController@index');


    Route::get('/Timeline-album', 'InformationController@album');

    Route::get('/Timeline-friends', 'InformationController@timelineFriends');

    Route::get('/Timeline-edit-profile', 'InformationController@profile');

    Route::get('/Timeline-edit-work', 'InformationController@work');

    Route::get('/Timeline-edit-interest', 'InformationController@interest');

    Route::get('/Account-setting', 'InformationController@account');

    Route::get('/Change-password', 'InformationController@changePass');


     Route::get('/Contact', 'InformationController@contact');
     
  Route::get('/Send_message', 'InformationController@contact');

    Route::post('/Send_message', function () {
        return view('/contact.send_message');
    });
	

    Route::get('/home', 'HomeController@index')->name('home');
});



//Route::get('/Newsfeed', 'HomeController@index')->name('Newsfeed');
//Route::get('/home', 'HomeController@index')->name('home');
