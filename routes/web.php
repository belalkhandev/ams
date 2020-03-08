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

// frontendController
Route::namespace('Web')->group(function () {
    Route::get('/', 'FrontendController@index')->name('frontend.home');
    Route::get('/about', 'FrontendController@about')->name('frontend.about');
    Route::get('/under-construction', 'FrontendController@uncerConstruction')->name('frontend.under.construction');
    
    Route::prefix('notice')->group(function () {
        Route::get('/list', 'FrontendController@noticeList')->name('frontend.notice.list');
        Route::get('/show/{id}', 'FrontendController@showNotice')->name('frontend.notice.show');
    });
});

//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    
    Route::namespace('Web')->group(function () {         

        Route::prefix('admin')->group(function () {
            Route::get('/', 'DashboardController@index')->name('admin');
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('/home', 'DashboardController@index')->name('home');


            //Session manage
            Route::prefix('session')->group(function () {
                Route::get('/list', 'SessionController@index')->name('session.index');
                Route::get('/create', 'SessionController@create')->name('session.create');
                Route::post('/create', 'SessionController@store')->name('session.store');
                Route::get('/{id}/edit', 'SessionController@edit')->name('session.edit');
                Route::put('/{id}/edit', 'SessionController@update')->name('session.update');
                Route::delete('/{id}', 'SessionController@destroy')->name('session.destroy');
            });

            //Department manage
            Route::prefix('department')->group(function () {
                Route::get('/list', 'DepartmentController@index')->name('department.index');
                Route::get('/create', 'DepartmentController@create')->name('department.create');
                Route::post('/create', 'DepartmentController@store')->name('department.store');
                Route::get('/{id}/edit', 'DepartmentController@edit')->name('department.edit');
                Route::put('/{id}/edit', 'DepartmentController@update')->name('department.update');
                Route::delete('/{id}', 'DepartmentController@destroy')->name('department.destroy');
            });

            //class manage
            Route::prefix('class')->group(function () {
                Route::get('/list', 'AcademicClassController@index')->name('class.index');
                Route::get('/create', 'AcademicClassController@create')->name('class.create');
                Route::post('/create', 'AcademicClassController@store')->name('class.store');
                Route::get('/{id}/edit', 'AcademicClassController@edit')->name('class.edit');
                Route::put('/{id}/edit', 'AcademicClassController@update')->name('class.update');
                Route::delete('/{id}', 'AcademicClassController@destroy')->name('class.destroy');
            });

            //group manage
            Route::prefix('group')->group(function () {
                Route::get('/list', 'GroupController@index')->name('group.index');
                Route::get('/create', 'GroupController@create')->name('group.create');
                Route::post('/create', 'GroupController@store')->name('group.store');
                Route::get('/{id}/edit', 'GroupController@edit')->name('group.edit');
                Route::put('/{id}/edit', 'GroupController@update')->name('group.update');
                Route::delete('/{id}', 'GroupController@destroy')->name('group.destroy');
            });

            //Section manage
            Route::prefix('section')->group(function () {
                Route::get('/list', 'SectionController@index')->name('section.index');
                Route::get('/create', 'SectionController@create')->name('section.create');
                Route::post('/create', 'SectionController@store')->name('section.store');
                Route::get('/{id}/edit', 'SectionController@edit')->name('section.edit');
                Route::put('/{id}/edit', 'SectionController@update')->name('section.update');
                Route::delete('/{id}', 'SectionController@destroy')->name('section.destroy');
            });

            //Section manage
            Route::prefix('subject')->group(function () {
                Route::get('/list', 'SubjectController@index')->name('subject.index');
                Route::get('/create', 'SubjectController@create')->name('subject.create');
                Route::post('/create', 'SubjectController@store')->name('subject.store');
                Route::get('/{id}/edit', 'SubjectController@edit')->name('subject.edit');
                Route::put('/{id}/edit', 'SubjectController@update')->name('subject.update');
                Route::delete('/{id}', 'SubjectController@destroy')->name('subject.destroy');
            });

            //Section Class Manage manage
            Route::prefix('subject-class')->group(function () {
                Route::get('/list', 'SubjectClassController@index')->name('subject-class.index');
                Route::get('/create', 'SubjectClassController@create')->name('subject-class.create');
                Route::post('/create', 'SubjectClassController@store')->name('subject-class.store');
                Route::get('/{id}/edit', 'SubjectClassController@edit')->name('subject-class.edit');
                Route::put('/{id}/edit', 'SubjectClassController@update')->name('subject-class.update');
                Route::delete('/{id}', 'SubjectClassController@destroy')->name('subject-class.destroy');
            });

            //Admission manage
            Route::prefix('admission')->group(function () {
                Route::get('/', 'AdmissionController@index')->name('admission.index');
                Route::get('/create', 'AdmissionController@create')->name('admission.create');
                Route::post('/create', 'AdmissionController@store')->name('admission.store');
                // Route::get('/{id}/edit', 'AdmissionController@edit')->name('admission.edit');
                // Route::put('/{id}/edit', 'AdmissionController@update')->name('admission.update');
                // Route::delete('/{id}', 'AdmissionController@destroy')->name('admission.destroy');
            });

            Route::prefix('student')->group(function () {
                Route::get('/', 'StudentController@index')->name('student.index');
                Route::get('/{id}/show', 'StudentController@show')->name('student.show');           
                Route::get('/{id}/edit', 'StudentController@edit')->name('student.edit');           
                Route::post('/{id}/edit', 'StudentController@update')->name('student.update');           
                Route::delete('/{id}/show', 'StudentController@delete')->name('student.destroy');           
            });
            
            //teacher manage
            Route::prefix('teacher')->group(function () {
                Route::get('/', 'TeacherController@index')->name('teacher.index');
                Route::get('/create', 'TeacherController@create')->name('teacher.create');
                Route::post('/create', 'TeacherController@store')->name('teacher.store');
                Route::get('/{id}/show', 'TeacherController@show')->name('teacher.show');           
                Route::get('/{id}/edit', 'TeacherController@edit')->name('teacher.edit');           
                Route::post('/{id}/edit', 'TeacherController@update')->name('teacher.update');           
                Route::delete('/{id}/show', 'TeacherController@delete')->name('teacher.destroy');           
            });

            //frontend Notice  manage
            Route::prefix('notice')->group(function () {
                Route::get('/', 'NoticeController@index')->name('notice.index');
                Route::get('/show/{id}', 'NoticeController@show')->name('notice.show');
                Route::get('/create', 'NoticeController@create')->name('notice.create');
                Route::post('/create', 'NoticeController@store')->name('notice.store');
                Route::get('/{id}/edit', 'NoticeController@edit')->name('notice.edit');
                Route::put('/{id}/edit', 'NoticeController@update')->name('notice.update');
                Route::delete('/{id}', 'NoticeController@destroy')->name('notice.destroy');
            });

            //frontend slider  manage
            Route::prefix('slider')->group(function () {
                Route::get('/', 'SliderController@index')->name('slider.index');
                Route::get('/create', 'SliderController@create')->name('slider.create');
                Route::post('/create', 'SliderController@store')->name('slider.store');
                Route::get('/{id}/edit', 'SliderController@edit')->name('slider.edit');
                Route::put('/{id}/edit', 'SliderController@update')->name('slider.update');
                Route::delete('/{id}', 'SliderController@destroy')->name('slider.destroy');
            });

        });

        
    });
});
