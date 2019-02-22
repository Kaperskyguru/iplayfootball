<?php
use App\Http\Controllers\PlayersController as Players;
use App\Http\Controllers\ScoutsController as Scouts;
use App\Http\Controllers\NoticesController as Notices;
use App\Http\Controllers\AcademicsController as Academics;
use App\Http\Controllers\VerificationsController as Verifications;
use App\Http\Controllers\TeamsController as Teams;
use App\Http\Controllers\MessagesController as Messages;
use App\Http\Middleware;
use Illuminate\Support\Facades\Input;
use App\Player;
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
Route::group(['middleware' => 'player', 'prefix' => 'player'], function()
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

// Teams route groups
Route::group(['middleware' => 'team', 'prefix' => 'team'], function()
{
    Route::get('/', 'TeamsController@team_view')->name('team');

    Route::PATCH('/update/{id}', 'TeamsController@teamUpdate')->name('teamUpdate');

    Route::get('/update', 'TeamsController@teamUpdateForm');

    Route::post('/verify', 'VerificationsController@teamVerification');

    Route::get('/messages', 'MessagesController@teamsInboxView');
    Route::post('/messages', 'MessagesController@teamSendMessage');

    Route::get('/sent', 'MessagesController@teamsSentView');

    Route::get('/details/{id}', 'MessagesController@teamDetailsView');

    Route::get('/compose', 'MessagesController@teamComposeView');

    Route::get('/notices', 'NoticesController@teamNotices');
    Route::get('/notices/read', 'NoticesController@teamReadNotice');

    Route::get('/players', 'PlayersController@teamPlayersListView');
});

// Academics route groups
Route::group(['middleware' => 'academic', 'prefix' => 'academic'], function()
{
    Route::get('/', 'AcademicsController@academic_view')->name('academic');

    Route::PATCH('/update/{id}', 'AcademicsController@academicUpdate')->name('academicUpdate');

    Route::get('/update', 'AcademicsController@academicUpdateForm');

    Route::post('/verify', 'VerificationsController@academicVerification');

    Route::get('/messages', 'MessagesController@academicInboxView');
    Route::post('/messages', 'MessagesController@academicendMessage');

    Route::get('/sent', 'MessagesController@academicSentView');

    Route::get('/details', 'MessagesController@academicDetailsView');

    Route::get('/compose', 'MessagesController@academicComposeView');
    Route::post('/messages', 'MessagesController@academicSendMessage');

    Route::get('/notices', 'NoticesController@academicNotices');
    Route::get('/notices/read', 'NoticesController@academicReadNotice');

    Route::get('/players', 'PlayersController@academicPlayersListView');
});

// Teams route groups
Route::group(['middleware' => 'scout', 'prefix' => 'scout'], function()
{
    Route::get('/', 'ScoutsTeamsController@team_view')->name('scout');

    Route::PATCH('/update/{id}', 'ScoutsController@playerUpdate')->name('playerUpdate');

    Route::get('/update', 'ScoutsController@playerUpdateForm');

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

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//search players
Route::any('/search_results',function(){
    $query = Input::get ( 'query' );
        $players = Player::where('player_name','LIKE','%'.$query.'%')->get();
            return view('search_results')->with('players', $players)->withQuery($query);
});