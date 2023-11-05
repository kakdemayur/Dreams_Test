<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\DesignationController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\manageEmployeeController;
use App\Http\Controllers\OrganizationController;
use App\Http\controllers\viewEmployeeController;


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

Route::get('admin/login', [UserController::class, 'login'])->name('admin.login');
Route::post('/login-form', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/', [HomeController::class, 'home'])->name('dashboard');
    Route::get('/manageEmployee/addEmployee', [manageEmployeeController::class, 'addEmployee'])->name('manageEmployee.addEmployee');
    Route::post('/manageEmployee/addEmployee/store', [manageEmployeeController::class, 'store'])->name('manageEmployee.addEmployee.store');
    Route::get('/manageEmployee/viewEmployee', [viewEmployeeController::class, 'viewEmployee'])->name('manageEmployee.ViewEmployee');
    Route::get('/attendance/addAttendance', [AttendanceController::class, 'attendance'])->name('attendance.addAttendance');
    Route::post('/addAttendance/store', [AttendanceController::class, 'store'])->name('addAttendance.store');
    Route::get('/attendance/viewAttendance', [AttendanceController::class, 'attendanceList'])->name('attendance.viewAttendance');
    Route::get('/organization/department', [OrganizationController::class, 'department'])->name('organization.department');
    Route::get('/organization/designation', [DesignationController::class, 'designation'])->name('organization.designation');
});
