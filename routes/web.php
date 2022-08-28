<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/', [StudentController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get("/register/{role}", [RegisterController::class, 'showRegistrationForm']);
Route::post("/register/{role}", [RegisterController::class, 'register'])->name('role');

// Course Routes
Route::get("/register/{role}", [CourseController::class, 'detail']);

// Apply as consultant
Route::get('apply-to-teach', [StudentController::class, 'applyToTeach'])->name('apply-to-teach');

// Group Classes
Route::get('group-classes', [StudentController::class, 'groupClasses'])->name('group-classes');
Route::get('view-group-class/{id}', [StudentController::class, 'viewGroupClass'])->name('view-group-class');

// Searching Consultants
Route::get("/find-consultant", [StudentController::class, 'searchConsultants'])->name('searchConsultants');

Route::get("/consultant-profile/{id}", [StudentController::class, 'consultantProfile'])->name('consultantProfile');

Route::get("/consultant-profile/{id}/callback", [StudentController::class, 'callback'])
    ->name('payment.callback');

Route::get('/change-language/{id}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('add-subjects', [AdminController::class, 'addSubjects'])->name('admin.addSubjects');
    Route::get('classes', [AdminController::class, 'classes'])->name('admin.classes');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('total-consultants', [AdminController::class, 'totaConsultants'])->name('admin.totaConsultants');
    Route::get('total-students', [AdminController::class, 'totalStudents'])->name('admin.totalStudents');
    Route::get('wallet', [AdminController::class, 'wallet'])->name('admin.wallet');

    // Subject Routes
    Route::post('add-subject', [AdminController::class, 'addNewSubject'])->name('addNewSubject');
    Route::get('/remove-subjects/{id}', [AdminController::class, 'removeSubject']);

    // Consultant Routes
    Route::get('/consultant-profile/{id}/edit', [AdminController::class, 'editConsultant'])
        ->name('admin.consultant-edit');
    Route::post('/consultant-profile/update', [AdminController::class, 'updateConsultant'])
        ->name('admin.consultant-update');
    Route::get('/consultant-profile/{id}/delete', [AdminController::class, 'deleteConsultant'])
        ->name('admin.consultant-delete');

    // Student Routes
    Route::get('/student-profile/{id}/edit', [AdminController::class, 'editStudent'])
        ->name('admin.student-edit');
    Route::post('/student-profile/update', [AdminController::class, 'updateStudent'])
        ->name('admin.student-update');
    Route::get('/student-profile/{id}/delete', [AdminController::class, 'deleteStudent'])
        ->name('admin.student-delete');

    // Order Routes
    Route::get('/edit-order/{id}', [AdminController::class, 'editOrder'])
        ->name('admin.edit-order');
    Route::post('/update-order', [AdminController::class, 'updateOrder'])
        ->name('admin.update-order');
    Route::get('/delete-order/{id}', [AdminController::class, 'deleteOrder'])
        ->name('admin.delete-order');

    // Group Classes CRUD
    Route::post('create-group-class', [AdminController::class, 'createGroupClass'])
        ->name('admin.createGroupClass');
    Route::post('update-group-class', [AdminController::class, 'updateGroupClass'])
        ->name('admin.updateGroupClass');
    Route::get('/delete-group-class/{id}', [AdminController::class, 'deleteGroupClass'])
        ->name('admin.deleteGroupClass');
});

// Student Routes
Route::group(['prefix' => 'student', 'middleware' => ['role:student', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('settings', [StudentController::class, 'settings'])->name('student.settings');
    Route::get('group-classes', [StudentController::class, 'classes'])->name('student.classes');
    Route::get('orders', [StudentController::class, 'orders'])->name('student.orders');
    Route::get('wallet', [StudentController::class, 'wallet'])->name('student.wallet');

    Route::post('update-profile', [StudentController::class, 'updateInfo'])->name('studentUpdateInfo');

    Route::post('book-student-order', [StudentController::class, 'studentBookOrder'])->name('studentBookOrder');

    Route::get('/join/{meeting_id}', [StudentController::class, 'joinMeeting']);

    Route::post('addReview', [StudentController::class, 'addReview'])->name('student.addReview');
});

// Seller Routes
Route::group(['prefix' => 'consultant', 'middleware' => ['role:consultant', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [ConsultantController::class, 'index'])->name('consultant.dashboard');
    Route::get('settings', [ConsultantController::class, 'settings'])->name('consultant.settings');
    Route::get('availability-calender', [ConsultantController::class, 'availability'])->name('consultant.availability');
    Route::get('group-classes', [ConsultantController::class, 'classes'])->name('consultant.classes');
    Route::get('orders', [ConsultantController::class, 'orders'])->name('consultant.orders');
    Route::get('order-price', [ConsultantController::class, 'orderPrice'])->name('consultant.orderPrice');
    Route::get('wallet', [ConsultantController::class, 'wallet'])->name('consultant.wallet');
    Route::get('total-students', [ConsultantController::class, 'totalStudents'])->name('consultant.totalStudents');

    Route::post('update-profile', [ConsultantController::class, 'updateInfo'])->name('consultantUpdateInfo');

    // Order Price CRUD
    Route::post('add-order-price', [ConsultantController::class, 'addOrderPrice'])->name('addOrderPrice');

    Route::post('update-order-info', [ConsultantController::class, 'updateOrderPrice'])->name('updateOrderPrice');

    Route::get('/delete-order/{id}', [ConsultantController::class, 'removeOrderPrice']);

    Route::get('/join/{meeting_id}', [ConsultantController::class, 'joinMeeting']);

    Route::get('/leave/{meeting_id}', [ConsultantController::class, 'leaveMeeting'])->name('consultant.leaveMeeting');

    // Group Classes CRUD
    Route::post('create-group-class', [ConsultantController::class, 'createGroupClass'])
        ->name('consultant.createGroupClass');
    Route::post('update-group-class', [ConsultantController::class, 'updateGroupClass'])
        ->name('consultant.updateGroupClass');
    Route::get('/delete-group-class/{id}', [ConsultantController::class, 'deleteGroupClass'])
        ->name('consultant.deleteGroupClass');
});

Route::get('/test', [\App\Http\Controllers\ZoomController::class, 'test']);
