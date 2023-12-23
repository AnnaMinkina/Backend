<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Задание 9.1
Route::get('/user/{id?}', function ($id = 0) {
    return "Передан параметр $id";
});

//Задание 9.2
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    $date = $year . "-" . $month . "-" . $day;
    $daysOfWeek = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
    $dayNumber = date('w', strtotime($date));
    return $daysOfWeek[$dayNumber];
})->where([
    'year' => '^(19|20)\d{2}$',
    'month' => '^(0?[1-9]|1[012])$',
    'day' => '^(0?[1-9]|[12][0-9]|3[01])$'
]);
//Задание 9.3
Route::get('/names/{name}', function ($name) {
    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5'
    ];
    if (array_key_exists($name, $users)) {
        return $users[$name];
    } else {
        return "Вы ввели неверное имя";
    }
});

//Задание 9.4
Route::get('/pages/show/', [PageController::class, 'showOne2'] );
Route::get('/pages/show/{id}', [PageController::class, 'showOne4'] );
Route::get('/pages/show/array/{id}', [PageController::class, 'showOne5'] );
Route::get('/pages/all', [PageController::class, 'showAll'] );
