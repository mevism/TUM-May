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

Route::prefix('courses')->group(function() {
    Route::get('/', 'CoursesController@index')->name('courses.index');
    Route::get('/addIntake', 'CoursesController@addIntake')->name('courses.addIntake');
    Route::post('/storeIntake', 'CoursesController@storeIntake')->name('courses.storeIntake');
    Route::get('/showIntake', 'CoursesController@showIntake')->name('courses.showIntake');
    Route::get('/editIntake/{id}', 'CoursesController@editIntake')->name('courses.editIntake');
    Route::put('/updateIntake/{id}', 'CoursesController@updateIntake')->name('courses.updateIntake');
    Route::get('/destroyIntake/{id}', 'CoursesController@destroyIntake')->name('courses.destroyIntake');


    Route::get('/addSchool', 'CoursesController@addSchool')->name('courses.addSchool');
    Route::post('/storeSchool', 'CoursesController@storeSchool')->name('courses.storeSchool');
    Route::get('/showSchool', 'CoursesController@showSchool')->name('courses.showSchool');
    Route::get('/editSchool/{id}', 'CoursesController@editSchool')->name('courses.editSchool');
    Route::put('/updateSchool/{id}', 'CoursesController@updateSchool')->name('courses.updateSchool');
    Route::get('/destroySchool/{id}', 'CoursesController@destroySchool')->name('courses.destroySchool');


    Route::get('/addDepartment', 'CoursesController@addDepartment')->name('courses.addDepartment');
    Route::post('/storeDepartment', 'CoursesController@storeDepartment')->name('courses.storeDepartment');
    Route::get('/showDepartment', 'CoursesController@showDepartment')->name('courses.showDepartment');
    Route::get('/editDepartment/{id}', 'CoursesController@editDepartment')->name('courses.editDepartment');
    Route::put('/updateDepartment/{id}', 'CoursesController@updateDepartment')->name('courses.updateDepartment');
    Route::get('/destroyDepartment/{id}', 'CoursesController@destroyDepartment')->name('courses.destroyDepartment');


    Route::get('/addCourse', 'CoursesController@addCourse')->name('courses.addCourse');
    Route::post('/storeCourse', 'CoursesController@storeCourse')->name('courses.storeCourse');
    Route::get('/showCourse', 'CoursesController@showCourse')->name('courses.showCourse');
    Route::get('/editCourse/{id}', 'CoursesController@editCourse')->name('courses.editCourse');
    Route::put('/updateCourse/{id}', 'CoursesController@updateCourse')->name('courses.updateCourse');
    Route::get('/destroyCourse/{id}', 'CoursesController@destroyCourse')->name('courses.destroyCourse');


    Route::get('/addClasses', 'CoursesController@addClasses')->name('courses.addClasses');
    Route::post('/storeClasses', 'CoursesController@storeClasses')->name('courses.storeClasses');
    Route::get('/showClasses', 'CoursesController@showClasses')->name('courses.showClasses');
    Route::get('/editClasses/{id}', 'CoursesController@editClasses')->name('courses.editClasses');
    Route::put('/updateClasses/{id}', 'CoursesController@updateClasses')->name('courses.updateClasses');
    Route::get('/destroyClasses/{id}', 'CoursesController@destroyClasses')->name('courses.destroyClasses');
});