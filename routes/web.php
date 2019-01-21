<?php
use App\Http\Controllers\PlayersController as Players;
use App\Http\Controllers\ScoutsController as Scouts;
use App\Http\Controllers\NoticesController as Notices;
use App\Http\Controllers\AcademicsController as Academics;
use App\Http\Controllers\VerificationsController as Verifications;
use App\Http\Controllers\TeamsController as Teams;
use App\Http\Controllers\MessagesController as Messages;
use App\Http\Middleware;
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


// Admin route groups
Route::group(['prefix' => 'admin'], function()
{

    Route::get('/', 'DashboardController@index')->name('admin');


    Route::get('/addPlayer', function () {
        return view('admin-dashboard.addPlayer');
    });

    Route::get('/players/delete', 'PlayersController@view_delete_confirmation');
    Route::delete('/players/delete', 'PlayersController@delete');
    Route::get('/players/update', 'PlayersController@view_update_box');
    // Route::patch('/players', 'PlayersController@update');

    Route::resource('/players', 'PlayersController');

    Route::get('/players', 'PlayersController@players');
    // Route::post('/players', 'PlayersController@store');

    Route::get('/addscout', function () { // change create instead of addscout
        return view('admin-dashboard.addscout');
    });

    // Route::post('/scouts', 'ScoutsController@store');
    Route::get('/scouts/delete', 'ScoutsController@view_delete_confirmation');
    Route::get('/scouts/update', 'ScoutsController@view_update_box');
    Route::resource('/scouts', 'ScoutsController');
    // Route::delete('/scouts', 'ScoutsController@delete');
    Route::get('/scouts', 'ScoutsController@scouts');


    Route::get('/addteam', function () {
        return view('admin-dashboard.addteam');
    });
    
    
    
    Route::get('/teams/delete', 'TeamsController@view_delete_confirmation');
    Route::get('/teams/update', 'TeamsController@view_update_box');
    Route::resource('/teams', 'TeamsController');



    Route::get('/addacademic', function () {
        return view('admin-dashboard.addacademic');
    });
    Route::get('/academics/delete', 'AcademicsController@view_delete_confirmation');
    Route::get('/academics/update', 'AcademicsController@view_update_box');
    Route::resource('/academics', 'AcademicsController');

    Route::get('/notices', 'NoticesController@noticeView');
    // Route::post('/notices/add', 'NoticesController@store');
    Route::get('/notices/delete', 'NoticesController@view_delete_confirmation');
    Route::get('/notices/update', 'NoticesController@view_update_box');
    Route::get('/notices/read', 'NoticesController@adminReadNotice');
    Route::resource('/notices', 'NoticesController');

    Route::get('/addverification', function () {
        return view('admin-dashboard.addverification');
    });

    Route::get('/pending', 'VerificationsController@pendingView');

    Route::get('/verified', 'VerificationsController@verifiedView');

    Route::get('/declined', 'VerificationsController@declinedView');

    Route::get('/messages', 'MessagesController@inbox');
    Route::post('/messages', 'MessagesController@store');

    Route::get('/messages/sent', 'MessagesController@sent');

    Route::get('/details/{id}', 'MessagesController@details');

    Route::get('/compose', 'MessagesController@compose');

    Route::get('/profile', function () {
        return view('admin-dashboard.profile');
    });
});

// players route groups
Route::prefix('/player')->group(function()
{
    Route::get('/', 'PlayersController@player_view')->name('player');

    Route::PATCH('/update/{id}', 'PlayersController@playerUpdate')->name('playerUpdate');

    Route::get('/update', 'PlayersController@playerUpdateForm');

    Route::post('/verify', 'VerificationsController@playerVerification');

    Route::get('/messages', 'MessagesController@playersInboxView');
    Route::post('/messages', 'MessagesController@playerSendMessage');

    Route::get('/sent', 'MessagesController@playersSentView');

    Route::get('/details', 'MessagesController@playersDetailsView');

    Route::get('/compose', 'MessagesController@playersComposeView');

    Route::get('/notices', 'NoticesController@playerNotices');
    Route::get('/notices/read', 'NoticesController@playerReadNotice');

    Route::get('/users', function () {
        return view('players-dashboard.users');
    });
});


//  Other routes
Route::get('/', function () {
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('players', function () {
//     return view('profiles');
// });

Route::get('profile', function () {
    return view('profile');
});


Route::get('resetpassword', function () {
    return view('resetpassword');
});

Route::get('about', function () {
    return view('about');
});


Route::post("contact", "PagesController@sendContact");
Route::get("/search", "SearchController@search");
Route::get("/players", "PlayersController@players");
Route::get("/profiles", "PlayersController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');