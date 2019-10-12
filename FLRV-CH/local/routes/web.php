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

// use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Database\Schema\Blueprint;
use Faker\Provider\ka_GE\DateTime;
//use Illuminate\Support\Facades\App;

Route::get('', 'WellcomeController@StartLRV');
Route::get('xx/{ab?}', 'WellcomeController@xx');
Route::group(['prefix' => 'account'], function () {
    Route::get('login', 'AccountController@login');
    Route::get('/', 'AccountController@M1login');
    Route::get('signup', 'AccountController@signup');
    Route::get('master', 'AccountController@master');
    Route::post('login', 'AccountController@Getlogin');
    Route::get('logout', 'AccountController@GetLogout');
});
Route::group(['prefix' => 'cs'], function () {
    Route::get('/', 'CSController@Getx');
    Route::get('home','CSController@GetHome');
    Route::get('DOM', 'CSController@GetDom');
    Route::get('logout', 'AccountController@GetLogout');
});
Route::group(['prefix' => 'query'], function () {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    Route::get('insertAcc', function () {
        // $datet=new DateTime();

        DB::table('account')->insert([
        'Username'=>'nhavbnm',
        'Password'=>'123456789',
        'name'=>'Nguyen Hai Nhan',
        'SDT'=>339898292,
        'Dob'=>'2000-06-03',
        'Avt'=>'.',
        'created_at'=>date('Y-m-d h:i:s')]);


    });
    Route::get('createcomments', function () {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('IDBV');
            $table->integer('IDNBL');
            $table->string('Content');
            $table->timestamps();
        });
    });
    Route::get('news', function () {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('IDBV',255)->autoIncrement();
            $table->bigInteger('IDND');
            $table->longText('Content');
            $table->string('Img');
            $table->integer('CLike');
            $table->timestamps();
        });
    });
});
Route::group(['prefix' => 'tmd'], function () {
    Route::get('all', function () {
        $user=App\account::find(1)->toArray();
        dd($user);
    });
});
Route::get('convert', function () {
    $us=App\account::where('ID',1)->update(['Password'=>bcrypt("123456")]);
    // $us->name='abc';
    // $us->save();
    dd($us);
});
