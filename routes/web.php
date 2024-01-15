<?php

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
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\KhitanController;
use App\Http\Controllers\AqiqahController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\CekresiController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InvitationController;



Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/service/{service}', [ServiceController::class, 'index']);

Route::get('/wpadmin-login', [SessionController::class, 'index'])->name('login');

Route::get('/register-resume', [ResumeController::class, 'registerResume']);

Route::get('/personal-profile/{id}', [ResumeController::class, 'personalProfile']);
Route::get('/admin/resume/edit/{id}', [ResumeController::class, 'AdminEdit']);
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/wpadmin', [WeddingController::class, 'wpadmin']);
//     Route::get('/admin/wedding/dashboard', [WeddingController::class, 'AdminDashboard']);
//     Route::get('/admin/wedding/list', [WeddingController::class, 'AdminList']);
//     Route::get('/admin/wedding/edit/{id}', [WeddingController::class, 'AdminEdit']);
//     Route::get('/admin/wedding/delete/{id}', [WeddingController::class, 'AdminDelete']);
// });

// Route::get('/user/wedding/edit/{id}/{couple1}/{couple2}', [WeddingController::class, 'UserEdit']);
Route::post('/update-resume', [ResumeController::class, 'updateResume']);


Route::get('/myprofile/{file}/{id}', [RequestController::class, 'myprofile']);

Route::get('/katalog/{type}', [InvitationController::class, 'katalog']);
// Route::get('/pending-invitation-wedding/{wedding}/{guest}', [WeddingController::class, 'pendinginvitationWedding']);
// Route::get('/list-guest-wedding/{wedding}', [WeddingController::class, 'listGuestWedding']);
// Route::post('/confirmation-wedding', [WeddingController::class, 'confirmationWedding']);


// Route::get('/register-wedding', [PortofolController::class, 'registerPortofol']);

// Route::get('/wpadmin-login', [SessionController::class, 'index'])->name('login');
// Route::post('/session/login', [SessionController::class, 'login']);
// Route::get('/session/logout', [SessionController::class, 'logout']);
// Route::get('/session/register', [SessionController::class, 'register']);
// Route::post('/session/register', [SessionController::class, 'createUser']);


// Route::get('/contact/{product}', [SessionController::class, 'contact']);
// Route::post('/contact/{product}', [SessionController::class, 'redirectwa']);
// Route::get('/order/{status}/{user}', [SessionController::class, 'order']);
// Route::get('/rating', [SessionController::class, 'admin_rating']);
// Route::get('/rating/{id}', [SessionController::class, 'rating']);
// Route::post('/rating/{id}', [SessionController::class, 'postrating']);

// Route::get('/{type}/konfirmasi', [ConfirmationController::class, 'konfirmasi']);
// Route::get('/{type}/konfirmasi/delete/{id}', [ConfirmationController::class, 'delete']);

// Route::get('/latihan', [WeddingController::class, 'latihan']);
// Route::get('/tria', [WeddingController::class, 'tria']);
// Route::get('/aboutus', [WeddingController::class, 'aboutus']);


// Route::get('/', [WeddingController::class, 'wedding']);
// Route::get('/weddingmuslim', [WeddingController::class, 'weddingmuslim']);
// Route::get('/katalog', [WeddingController::class, 'katalog']);
// Route::get('/sosmed', [WeddingController::class, 'sosmed']);
// Route::get('register', [WeddingController::class, 'register']);

// // wedding
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/wpadmin', [WeddingController::class, 'wpadmin']);
//     Route::get('/admin/wedding/dashboard', [WeddingController::class, 'AdminDashboard']);
//     Route::get('/admin/wedding/list', [WeddingController::class, 'AdminList']);
//     Route::get('/admin/wedding/edit/{id}', [WeddingController::class, 'AdminEdit']);
//     Route::get('/admin/wedding/delete/{id}', [WeddingController::class, 'AdminDelete']);
// });

// Route::get('/register-wedding', [WeddingController::class, 'registerWedding']);
// Route::get('/contoh-wedding', [WeddingController::class, 'contohWedding']);
// Route::post('/add-wedding', [WeddingController::class, 'addWedding']);
// Route::get('/list-wedding/{wedding}', [WeddingController::class, 'listWedding']);
// Route::get('/invitation-wedding/{wedding}/{guest}', [WeddingController::class, 'invitationWedding']);
// Route::get('/pending-invitation-wedding/{wedding}/{guest}', [WeddingController::class, 'pendinginvitationWedding']);
// Route::get('/list-guest-wedding/{wedding}', [WeddingController::class, 'listGuestWedding']);
// Route::post('/confirmation-wedding', [WeddingController::class, 'confirmationWedding']);

// Route::get('/user/wedding/edit/{id}/{couple1}/{couple2}', [WeddingController::class, 'UserEdit']);
// Route::post('/update-wedding', [WeddingController::class, 'updateWedding']);
// // khitan
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/admin/khitan/dashboard', [KhitanController::class, 'AdminDashboard']);
//     Route::get('/admin/khitan/list', [KhitanController::class, 'AdminList']);
//     Route::get('/admin/khitan/edit/{id}', [KhitanController::class, 'AdminEdit']);
//     Route::get('/admin/khitan/delete/{id}', [KhitanController::class, 'AdminDelete']);
//     Route::post('/update-khitan', [KhitanController::class, 'update']);
// });

// Route::get('/register-khitan', [KhitanController::class, 'registerKhitan']);
// Route::get('/contoh-khitan', [KhitanController::class, 'contohKhitan']);
// Route::post('/add-khitan', [KhitanController::class, 'addKhitan']);
// Route::get('/list-khitan/{khitan}', [KhitanController::class, 'listKhitan']);
// Route::get('/invitation-khitan/{khitan}/{guest}', [KhitanController::class, 'invitationKhitan']);
// Route::get('/list-guest-khitan/{khitan}', [KhitanController::class, 'listGuestKhitan']);
// Route::post('/confirmation-khitan', [KhitanController::class, 'confirmationKhitan']);

// // aqiqah
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/admin/aqiqah/dashboard', [AqiqahController::class, 'AdminDashboard']);
//     Route::get('/admin/aqiqah/list', [AqiqahController::class, 'AdminList']);
//     Route::get('/admin/aqiqah/edit/{id}', [AqiqahController::class, 'AdminEdit']);
//     Route::get('/admin/aqiqah/delete/{id}', [AqiqahController::class, 'AdminDelete']);
//     Route::post('/update-aqiqah', [AqiqahController::class, 'update']);
// });

// Route::get('/register-aqiqah', [AqiqahController::class, 'registerAqiqah']);
// Route::get('/contoh-aqiqah', [AqiqahController::class, 'contohAqiqah']);
// Route::post('/add-aqiqah', [AqiqahController::class, 'addAqiqah']);
// Route::get('/list-aqiqah/{aqiqah}', [AqiqahController::class, 'listAqiqah']);
// Route::get('/invitation-aqiqah/{aqiqah}/{guest}', [AqiqahController::class, 'invitationAqiqah']);
// Route::get('/list-guest-aqiqah/{aqiqah}', [AqiqahController::class, 'listGuestAqiqah']);
// Route::post('/confirmation-aqiqah', [AqiqahController::class, 'confirmationAqiqah']);

// // polaroid
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/polaroid/home', [PolaroidController::class, 'home_polaroid']);
//     Route::post('/polaroid/upload', [PolaroidController::class, 'upload_polaroid']);
//     Route::get('/polaroid/background', [PolaroidController::class, 'background_polaroid']);
//     Route::get('/polaroid/background/detail/{id}', [PolaroidController::class, 'detail_background_polaroid']);
//     Route::get('/polaroid/background/delete/{id}', [PolaroidController::class, 'delete_background_polaroid']);
//     Route::get('/polaroid/background/edit/{id}', [PolaroidController::class, 'edit_background_polaroid']);
//     Route::get('/polaroid/background/create', [PolaroidController::class, 'create_background_polaroid']);
//     Route::post('/polaroid/background/add', [PolaroidController::class, 'add_background_polaroid']);
//     Route::post('/polaroid/background/update/{id}', [PolaroidController::class, 'update_background_polaroid']);
//     Route::get('/polaroid/list/{photo}/{page}/{size}', [PolaroidController::class, 'list_polaroid']);
//     Route::get('/polaroid/symlink', [PolaroidController::class, 'symlink']);
// });

// // code
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/code', [CodeController::class, 'index']);
//     Route::get('/code/create', [CodeController::class, 'create']);
//     Route::get('/code/delete/{redeem}', [CodeController::class, 'delete']);
//     Route::get('/code/update/{id}', [CodeController::class, 'update']);
// });

// Route::get('/wedding/khakim-ika/{guest}', [RequestController::class, 'khakimtoika']);
// Route::get('/wedding/luthfi-ichwan/{guest}', [RequestController::class, 'luthfitoichwan']);
// Route::get('/wedding/indri-ari/{guest}', [RequestController::class, 'indriari']);
// Route::get('/wedding/febri-novia/{guest}', [RequestController::class, 'febrinovia']);
// Route::get('/wedding/angga-rizki/{guest}', [RequestController::class, 'anggatorizki']);
// Route::get('/wedding/oded-ayang/{guest}', [RequestController::class, 'odedtoayang']);
// Route::get('/wedding/kholid-sari/{guest}', [RequestController::class, 'kholidtosari']);
// Route::get('/wedding/ana-rizki/{id}/{guest}', [RequestController::class, 'anatorizki']);
// Route::get('/undangan/{couple}/{id}/{guest}', [RequestController::class, 'undangan']);
// Route::get('/invitation/{type}/{couple}/{id}/{guest}', [RequestController::class, 'invitation']);

// Route::get('/undangan/bani-asnawi', [RequestController::class, 'banitoasnawi']);
// Route::get('/undangan/harisantri-tulungagung', [RequestController::class, 'harisantritulungagung']);

// Route::get('/wedding/dewi-jabir', [RequestController::class, 'dewitojabir']);
// Route::post('/wedding/dewi-jabir', [RequestController::class, 'confirmationWedding']);

// Route::get('/cekresi', [CekresiController::class, 'cekresi']);


// Route::get('/linkstorage', function (){
//     \Illuminate\Support\Facades\Artisan::call('storage:link');
//     echo 'storage linked!';
// });

// Route::get('/midtrans/{idtransaction}/{nilai}', [MidtransController::class, 'make']);
// // Route::get('/midtransstatus/{idtransaction}', [MidtransController::class, 'check']);
// Route::get('/midtranssukses/{id}', [MidtransController::class, 'sukses']);

// // require __DIR__.'/auth.php';

// // Song
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/song', [SongController::class, 'index']);
//     Route::get('/song/create', [SongController::class, 'create']);
//     Route::post('/song/create', [SongController::class, 'store']);
//     Route::get('/song/delete/{id}', [SongController::class, 'delete']);
//     Route::get('/song/edit/{id}', [SongController::class, 'edit']);
//     Route::post('/song/update/{id}', [SongController::class, 'update']);
// });

// // Video
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/video', [VideoController::class, 'index']);
//     Route::get('/video/create', [VideoController::class, 'create']);
//     Route::post('/video/create', [VideoController::class,'store']);
//     Route::get('/video/delete/{id}', [VideoController::class, 'delete']);
//     Route::get('/video/edit/{id}', [VideoController::class, 'edit']);
//     Route::post('/video/update/{id}', [VideoController::class, 'update']);
// });
// Route::get('/video/show/{id}', [VideoController::class, 'show']);

// // Catalog
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/catalog', [CatalogController::class, 'index']);
//     Route::get('/catalog/create', [CatalogController::class, 'create']);
//     Route::post('/catalog/create', [CatalogController::class,'store']);
//     Route::get('/catalog/delete/{id}', [CatalogController::class, 'delete']);
//     Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit']);
//     Route::post('/catalog/update/{id}', [CatalogController::class, 'update']);
// });

// use App\Http\Controllers\AttendanceController;
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/myattendance', [AttendanceController::class, 'index']);
//     Route::get('/create-myattendance', [AttendanceController::class, 'createMyattendance']);
//     Route::post('/add-myattendance', [AttendanceController::class, 'addMyattendance']);
//     Route::get('/edit-myattendance/{id}', [AttendanceController::class, 'editMyattendance']);
//     Route::post('/update-myattendance/{user}', [AttendanceController::class, 'updateMyattendance']);
//     Route::get('/delete-myattendance/{user}', [AttendanceController::class, 'deleteMyattendance']);
// });

// //Pending Payment
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/pendingpayment', [PendingpaymentController::class, 'index']);
//     Route::get('/pendingpayment/delete/{id}', [PendingpaymentController::class, 'delete']);
//     Route::get('/pendingpayment/accept/{id}', [PendingpaymentController::class, 'accept']);
// });