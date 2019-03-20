<?php
use App\Player;
use Illuminate\Support\Facades\Input;
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
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/addPlayer', function () {
        return view('admin-dashboard.addPlayer');
    });
    Route::get('/addscout', function () { // change create instead of addscout
        return view('admin-dashboard.addscout');
    });
    Route::get('/addteam', function () {
        return view('admin-dashboard.addteam');
    });
    Route::get('/addacademic', function () {
        return view('admin-dashboard.addacademic');
    });
    Route::get('/addverification', function () {
        return view('admin-dashboard.addverification');
    });

    Route::get('/profile', 'DashboardController@profile');
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::get('/players/delete', 'PlayersController@view_delete_confirmation');
    Route::delete('/players/delete', 'PlayersController@delete');
    Route::get('/players/update', 'PlayersController@view_update_box');
    Route::resource('/players', 'PlayersController');
    Route::get('/players', 'PlayersController@players');
    Route::get('/scouts/delete', 'ScoutsController@view_delete_confirmation');
    Route::get('/scouts/update', 'ScoutsController@view_update_box');
    Route::post('/scouts/associate', 'ScoutsController@setAssociatePlayer');
    Route::resource('/scouts', 'ScoutsController');
    Route::get('/scouts', 'ScoutsController@scouts');
    Route::get('/teams/delete', 'TeamsController@view_delete_confirmation');
    Route::get('/teams/update', 'TeamsController@view_update_box');
    Route::post('/teams/associate', 'TeamsController@setAssociatePlayer');
    Route::resource('/teams', 'TeamsController');
    Route::get('/academics/delete', 'AcademicsController@view_delete_confirmation');
    Route::get('/academics/update', 'AcademicsController@view_update_box');
    Route::post('/academics/associate', 'AcademicsController@setAssociatePlayer');
    Route::resource('/academics', 'AcademicsController');
    Route::get('/notices', 'NoticesController@noticeView');
    Route::get('/notices/delete', 'NoticesController@view_delete_confirmation');
    Route::get('/notices/update', 'NoticesController@view_update_box');
    Route::get('/notices/read', 'NoticesController@adminReadNotice');
    Route::resource('/notices', 'NoticesController');
    Route::get('/pending', 'VerificationsController@pendingView');
    Route::get('/verified', 'VerificationsController@verifiedView');
    Route::get('/declined', 'VerificationsController@declinedView');
    Route::get('/verification/delete', 'VerificationsController@view_delete_confirmation');
    Route::get('/viewverification', 'VerificationsController@viewVerification');
    Route::get('/editverification', 'VerificationsController@editVerification');
    Route::get('/download/{name}', 'VerificationsController@download');
    Route::resource('/verification', 'VerificationsController');
    Route::get('/messages', 'MessagesController@inbox');
    Route::post('/messages', 'MessagesController@store');
    Route::get('/messages/sent', 'MessagesController@sent');
    Route::get('/details/{id}', 'MessagesController@details');
    Route::get('/compose', 'MessagesController@compose');
    Route::get('/usersByRole', 'UsersController@usersByRole');
    Route::resource('/users', 'UsersController');
    Route::get('/photos', 'DashboardController@photos');
    Route::get('/videos', 'DashboardController@videos');
});

// players route groups
Route::group(['middleware' => 'player', 'prefix' => 'player'], function () {
    Route::get('/', 'PlayersController@player_view')->name('player');
    Route::PATCH('/update/{id}', 'PlayersController@playerUpdate')->name('playerUpdate');
    Route::get('/update', 'PlayersController@playerUpdateForm');
    Route::post('/verify', 'VerificationsController@playerVerification');
    Route::get('/messages', 'MessagesController@playersInboxView');
    Route::post('/messages', 'MessagesController@playerSendMessage');
    Route::get('/sent', 'MessagesController@playersSentView');
    Route::get('/details/{id}', 'MessagesController@playersDetailsView');
    Route::get('/compose', 'MessagesController@playersComposeView');
    Route::get('/notices', 'NoticesController@playerNotices');
    Route::get('/notices/read', 'NoticesController@playerReadNotice');
    Route::get('/photos', 'PlayersController@photos');
    Route::get('/videos', 'PlayersController@videos');
});

// Teams route groups
Route::group(['middleware' => 'team', 'prefix' => 'team'], function () {
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
    Route::get('/photos', 'TeamsController@photos');
    Route::get('/videos', 'TeamsController@videos');
});

// Academics route groups
Route::group(['middleware' => 'academic', 'prefix' => 'academic'], function () {
    Route::get('/', 'AcademicsController@academic_view')->name('academic');
    Route::PATCH('/update/{id}', 'AcademicsController@academicUpdate')->name('academicUpdate');
    Route::get('/update', 'AcademicsController@academicUpdateForm');
    Route::post('/verify', 'VerificationsController@academicVerification');
    Route::get('/messages', 'MessagesController@academicInboxView');
    Route::post('/messages', 'MessagesController@academicendMessage');
    Route::get('/sent', 'MessagesController@academicSentView');
    Route::get('/details/{id}', 'MessagesController@academicDetailsView');
    Route::get('/compose', 'MessagesController@academicComposeView');
    Route::post('/messages', 'MessagesController@academicSendMessage');
    Route::get('/notices', 'NoticesController@academicNotices');
    Route::get('/notices/read', 'NoticesController@academicReadNotice');
    Route::get('/players', 'PlayersController@academicPlayersListView');
    Route::get('/photos', 'AcademicsController@photos');
    Route::get('/videos', 'AcademicsController@videos');
});

// Scouts route groups
Route::group(['middleware' => 'scout', 'prefix' => 'scout'], function () {
    Route::get('/', 'ScoutsController@scout_view')->name('scout');
    Route::PATCH('/update/{id}', 'ScoutsController@scoutUpdate')->name('scoutUpdate');
    Route::get('/update', 'ScoutsController@scoutUpdateForm');
    Route::post('/verify', 'VerificationsController@scoutVerification');
    Route::get('/messages', 'MessagesController@scoutInboxView');
    Route::post('/messages', 'MessagesController@scoutSendMessage');
    Route::get('/sent', 'MessagesController@scoutSentView');
    Route::get('/details/{id}', 'MessagesController@scoutDetailsView');
    Route::get('/compose', 'MessagesController@scoutComposeView');
    Route::get('/notices', 'NoticesController@scoutNotices');
    Route::get('/notices/read', 'NoticesController@scoutReadNotice');
    Route::get('/players', 'PlayersController@scoutPlayersListView');
    Route::get('/photos', 'ScoutsController@photos');
    Route::get('/videos', 'ScoutsController@videos');
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

Route::get('profile/{id}', "PlayersController@profile")->name('profile');

Route::get('resetpassword', function () {
    return view('resetpassword');
});

Route::get('about', function () {
    return view('about');
});

Route::post("contact", "PagesController@sendContact");
Route::get("/search", "SearchController@search");
Route::get("/players", "PlayersController@players");
Route::get("/profiles", "PlayersController@index")->name('profiles');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//universal player search
Route::any('/search_results', function () {
    $query = Input::get('query');
    $players = Player::where('player_name', 'LIKE', '%' . $query . '%')->get();
    return view('search_results')->with('players', $players)->withQuery($query);
});

//display player profile onclick
Route::get('view_profile', 'SearchController@view_profile');
Route::get('view_profile/{id}', 'SearchController@view_profile');

Route::get('/load_player_info', 'PlayersController@prayer_info');
Route::get('/404', 'PagesController@error404')->name('404');
