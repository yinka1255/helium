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

Route::get('/login', function () {
    return view('login');
});
Route::get('/', 'AdminsController@index');
Route::get('/admin/index', 'AdminsController@index');
Route::get('/admin/classes', 'AdminsController@classes');
Route::get('/admin/new_class', 'AdminsController@newClass');
Route::get('/admin/edit_class/{id}', 'AdminsController@editClass');
Route::post('/admin/save_class', 'AdminsController@saveClass');
Route::post('/admin/update_class', 'AdminsController@updateClass');
Route::get('/admin/delete_class/{id}', 'AdminsController@deleteClass');
Route::get('/admin/promote_class', 'AdminsController@promoteClass');



Route::get('/admin/students', 'AdminsController@students');
Route::get('/admin/new_student', 'AdminsController@newStudent');
Route::get('/admin/edit_student/{id}', 'AdminsController@editStudent');
Route::get('/admin/manage_student_bills/{id}', 'AdminsController@manageStudentBills');
Route::get('/admin/student_bills_manage/{id}', 'AdminsController@studentBillsManage');
Route::post('/admin/save_student', 'AdminsController@saveStudent');
Route::post('/admin/update_student', 'AdminsController@updateStudent');
Route::get('/admin/delete_student/{id}', 'AdminsController@deleteStudent');
Route::get('/admin/class_students/{id}', 'AdminsController@classStudent');

Route::get('/admin/bill_class_students/{id}', 'AdminsController@billClassStudent');

Route::get('/admin/new_class_bill/{class_id}', 'AdminsController@newClassBill');

Route::get('/admin/class_bill_details/{class_id}/{bill_id}', 'AdminsController@classBillDetails');

Route::get('/admin/bill_class_details/{class_id}/{bill_id}', 'AdminsController@billClassDetails');

Route::get('/admin/bills', 'AdminsController@bills');

Route::get('/admin/transactions', 'AdminsController@transactions');

Route::get('/admin/sessions', 'AdminsController@sessions');
Route::get('/admin/new_session', 'AdminsController@newSession');
Route::get('/admin/edit_session/{id}', 'AdminsController@editSession');
Route::get('/admin/delete_session/{id}', 'AdminsController@deleteSession');
Route::post('/admin/save_session', 'AdminsController@saveSession');
Route::post('/admin/update_session', 'AdminsController@updateSession');
Route::post('/admin/save_class_bill', 'AdminsController@saveClassBill');
Route::post('/admin/save_student_bill', 'AdminsController@saveStudentBill');
Route::post('/admin/manual_payment', 'AdminsController@manualPayment');
Route::post('/authenticate', 'LoginsController@authenticate');

Route::get('/admin/admins', 'AdminsController@admins');
Route::get('/admin/edit_admin/{id}', 'AdminsController@editAdmin');
Route::post('/admin/save_admin', 'AdminsController@saveAdmin');
Route::post('/admin/save_permissions', 'AdminsController@savePermissions');
Route::get('/admin/deactivate_admin/{id}', 'AdminsController@deactivateAdmin');
Route::get('/admin/activate_admin/{id}', 'AdminsController@activateAdmin');
Route::get('/admin/new_admin', 'AdminsController@newAdmin');

Route::get('/admin/profile', 'AdminsController@profile');
Route::post('/admin/update_profile', 'AdminsController@updateProfile');
Route::post('/admin/update_password', 'AdminsController@updatePassword');


Route::get('/admin/wards', 'AdminsController@wards');
Route::post('/admin/new_ward', 'AdminsController@newWard');
Route::post('/admin/edit_ward', 'AdminsController@editWard');
Route::post('/admin/promote', 'AdminsController@promote');
Route::get('/admin/manage_wards_students/{wards_id}', 'AdminsController@manageWardsStudents');






//mobile route

Route::post('/mobile/login', 'LoginsController@mobileLogin');
Route::get('/mobile/get_students/{guardian_id}', 'CustomersController@getStudents');
Route::get('/mobile/get_bills_total/{id}', 'CustomersController@getBillsTotal');
Route::get('/mobile/get_student/{id}', 'CustomersController@getStudent');
Route::get('/mobile/get_student_bills/{id}', 'CustomersController@getStudentBills');
Route::get('/mobile/get_bill_details/{type}/{type_id}/{student_id}', 'CustomersController@getBillDetails');

Route::get('/mobile/get_all_students_bills/{guardian_id}', 'CustomersController@getAllStudentsBills');