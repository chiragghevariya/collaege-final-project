<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login',function() {
        return view('site.auth.login');
    });

    Route::post('/login','AuthController@attempt');

    Route::get('/register',function() {
        return "Under Consttuction";
    }); 

    
});



/* ******************************** Course Routes ****************** */
Route::group(['prefix'=>'panel','middleware'=>'auth'],function() {
    
    Route::resource('dashboard','DashboardController@index');
    Route::resource('courses','CoursesController');
    Route::resource('courses.lectures','LecturesController');
    Route::resource('courses.assignments','AssignmentsController');

    Route::resource('courses.assignments.questions','QuestionsController');
    Route::resource('courses.assignments.submissions','SubmissionsController');
    Route::resource('courses.assignments.submissions.questions.answers','AnswersController');


    Route::get('/course/enrolled',['as'=>'courses.enrolled','uses'=>'EnrollmentController@enrolled']);
    Route::get('/course/{slug}/enrollme',['as'=>'courses.enroll','uses'=>'EnrollmentController@enroll']);
    Route::get('/course/{slug}/resource',['as'=>'courses.resource','uses'=>'EnrollmentController@resource']);


    Route::resource('post','PostController');
    Route::resource('result','ResultController');
});
/* ******************************************************************** */
