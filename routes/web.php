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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('student.logout');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('student.logout');

// Admins
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


/* Student - Dashboard */
Route::prefix('dashboard')->group(function(){
    Route::get('/aptitude', 'StudentController@aptitude')->name('student-aptitude');
    Route::get('/group-discussion', 'StudentController@groupd')->name('student-groupd');
    Route::get('/communication', 'StudentController@communication')->name('student-communication');
    Route::get('/my-repo', 'StudentController@repo')->name('student-repo');
    Route::get('/', 'StudentController@dashboard')->name('student-dashboard');
});
// student Profile
Route::resource('/user', 'StudentController');
Route::get('/account', 'StudentController@profile')->name('student-profile');
Route::get('/resume', 'StudentController@resume')->name('student-resume');


// College
Route::prefix('college')->group(function() {
    Route::get('/login', 'Auth\CollegeLoginController@showLoginForm')->name('college.login');
    Route::post('/login', 'Auth\CollegeLoginController@login')->name('college.login.submit');
    Route::get('/', 'CollegeController@index')->name('college.dashboard');
    Route::get('/logout', 'Auth\CollegeLoginController@logout')->name('college.logout');
    Route::post('/logout', 'Auth\CollegeLoginController@logout')->name('college.logout');
});

// Company
Route::prefix('company')->group(function() {
    Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
    Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
    Route::get('/', 'CompanyController@index')->name('company.dashboard');
    Route::get('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');
    Route::post('/logout', 'Auth\CompanyLoginController@logout')->name('company.logout');
});

// Teacher
Route::prefix('teacher')->group(function() {
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/', 'TeacherController@index')->name('teacher.index');
    Route::get('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');
    Route::post('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');
});