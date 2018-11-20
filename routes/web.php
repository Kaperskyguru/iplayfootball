<?php
use App\Http\Controllers\PlayersController as Players;
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
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin-dashboard.index');
    });

    Route::get('/addPlayer', function () {
        return view('admin-dashboard.addPlayer');
    });

    Route::get('/players', function () {
        $Players = new Players;
        return view('admin-dashboard.Players')->with('Players', $Players->players());
    });

    Route::get('/addscout', function () {
        return view('admin-dashboard.addscout');
    });

    Route::get('/scouts', function () {
        return view('admin-dashboard.scouts');
    });

    Route::get('/addteam', function () {
        return view('admin-dashboard.addteam');
    });

    Route::get('/teams', function () {
        return view('admin-dashboard.teams');
    });

    Route::get('/addacademic', function () {
        return view('admin-dashboard.addacademic');
    });

    Route::get('/academics', function () {
        return view('admin-dashboard.academics');
    });

    Route::get('/notices', function () {
        return view('admin-dashboard.notice');
    });

    Route::get('/addverification', function () {
        return view('admin-dashboard.addverification');
    });

    Route::get('/pending', function () {
        return view('admin-dashboard.pendingverification');
    });

    Route::get('/verified', function () {
        return view('admin-dashboard.verifiedverification');
    });

    Route::get('/declined', function () {
        return view('admin-dashboard.declinedverification');
    });

    Route::get('/messages', function () {
        return view('admin-dashboard.message');
    });

    Route::get('/sent', function () {
        return view('admin-dashboard.sentmail');
    });

    Route::get('/details', function () {
        return view('admin-dashboard.maildetails');
    });

    Route::get('/compose', function () {
        return view('admin-dashboard.compose');
    });

    Route::get('/profile', function () {
        return view('admin-dashboard.profile');
    });
});

// players route groups
Route::group(['prefix' => 'player'], function () {
    Route::get('/', function () {
        return view('players-dashboard.index');
    });

    Route::get('/messages', function () {
        return view('players-dashboard.messages');
    });

    Route::get('/sent', function () {
        return view('players-dashboard.sentmail');
    });

    Route::get('/details', function () {
        return view('players-dashboard.maildetails');
    });

    Route::get('/compose', function () {
        return view('players-dashboard.compose');
    });

    Route::get('/notices', function () {
        return view('players-dashboard.notices');
    });

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

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
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
Route::get("/store", "PlayersController@store");
