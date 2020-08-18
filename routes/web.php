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

Route::get('/','MainController@index');
Route::get('/login','MainController@login');
Route::post('/login','MainController@loginPost');
Route::post('/logout','MainController@logout');

Route::get('/professorPage','MainController@professorPage');
Route::get('/studentPage','MainController@studentPage');

//////////////////////////////////////// Professor Routes ///////////////////////////////////////////////////////

//add Exam Routes
Route::get('/addExam','ProfessorController@addExam');
Route::post('/addExam','ProfessorController@addExamDone');
//delete Exam Routes
Route::get('/deleteExam','ProfessorController@deleteExam');
Route::post('/deleteExam','ProfessorController@deleteExamDone');
//add MCQ question Routes
Route::get('/addMcq','ProfessorController@addMcq');
Route::post('/addMcq','ProfessorController@addMcqDone');
//delete MCQ question Routes
Route::get('/deleteMcq','ProfessorController@deleteMcq');
Route::post('/deleteMcq','ProfessorController@deleteMcqDone');
//add T&F question Routes
Route::get('/addTf','ProfessorController@addTf');
Route::post('/addTf','ProfessorController@addTfDone');
//delete T & F question Routes
Route::get('/deleteTf','ProfessorController@deleteTf');
Route::post('/deleteTf','ProfessorController@deleteTfDone');
//choose exam to show
Route::get('/chooseExam','ProfessorController@chooseExam');
Route::post('/chooseExam','ProfessorController@chooseExamDone');
//show exam
Route::get('/showExam','ProfessorController@showExam');
Route::post('/showExam','ProfessorController@showExamDone');
//update MCQ question
Route::get('/mcq/edit/{id}','ProfessorController@editMcq');
Route::post('/mcq/edit/{id}','ProfessorController@updateMcq');
//delete MCQ question
Route::get('/mcq/delete/{id}','ProfessorController@destroyMcq');
//update T & F question
Route::get('/tf/edit/{id}','ProfessorController@editTf');
Route::post('/tf/edit/{id}','ProfessorController@updateTf');
//delete T & F question
Route::get('/tf/delete/{id}','ProfessorController@destroyTf');
//set timer for exam
Route::get('/setTimer','ProfessorController@setTimer');
Route::post('/setTimer','ProfessorController@setTimerDone');
//set password for exam
Route::get('/setPassword','ProfessorController@setPassword');
Route::post('/setPassword','ProfessorController@setPasswordDone');
//choose exam to show its results
Route::get('/examResult','ProfessorController@examResult');
Route::post('/examResult','ProfessorController@examResultDone');
//show results
Route::get('/showResult','ProfessorController@showResult');
Route::post('/showResult','ProfessorController@showResultDone');
