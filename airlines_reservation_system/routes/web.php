<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
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
//
Route::get('/', function (){
    return view('front.index');
});
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLogin']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegister']);
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'AddMember']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'showMember']);

Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});
Route::get('/update', [App\Http\Controllers\UpdateController::class, 'showUpdate']);
Route::put('/update', [App\Http\Controllers\UpdateController::class, 'update']);
//khuyen mai
Route::get('/ctkhuyenmai',[App\Http\Controllers\KhuyenMaiController::class,"ShowKhuyenMai"]);
Route::get('/ctkhuyenmai/{id}',[App\Http\Controllers\KhuyenMaiController::class,'NDKhuyenMai']);
//Cam nang
Route::get('/camnang', [App\Http\Controllers\CamNangController::class,"ShowCamNang"]);
Route::get('/camnang/{id}', [App\Http\Controllers\CamNangController::class,"ShowNDCamNang"]);
//Diem den
Route::get('/diemDenYeuThich', [App\Http\Controllers\DiemDenController::class, 'ShowDiemDen']);
Route::get('/diemDenYeuThich/{id}', [App\Http\Controllers\DiemDenController::class, 'ShowND_DiemDen']);
//Chon Chuyen
Route::prefix('datVe')->group(function (){
    Route::get('/chonchuyen', [App\Http\Controllers\SearchController::class, 'search'])->name('sSearch');
    Route::get('/', [App\Http\Controllers\SearchController::class, 'search'])->name('Search');
});
Route::get('/thanhtoan/{machuyenbay}', [App\Http\Controllers\PayController::class, 'Select2']);
//Route::get('/chonchuyen/add/{machuyenbay}', [Controllers\CartController::class, 'add']);
//Route::get('/front/datVe/chonchuyen/{machuyenbay}', [Controllers\PayController::class, 'Select1']);
Route::get('/thanhtoan', [App\Http\Controllers\PayController::class, 'Show'])->name('show');
Route::get('/thanhcong', [App\Http\Controllers\PayController::class, 'AddVe']);
Route::get('/member/{mave}', [App\Http\Controllers\MemberController::class, 'cancel']);

//adminkhuyenmai
Route::get('/adminCTKM',[App\Http\AdminControllers\CtkhuyenmaiController::class,"AdminKM"]);
Route::prefix('addCTKM')->group(function (){
    Route::get('/',[App\Http\AdminControllers\CtkhuyenmaiController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\CtkhuyenmaiController::class,"AddRecord"]);
});
Route::prefix('editCTKM/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\CtkhuyenmaiController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\CtkhuyenmaiController::class,"UpdateRecord"]);
});
Route::get('/deleteCTKM/{id}',[App\Http\AdminControllers\CtkhuyenmaiController::class,"DeleteRecord"]);
Route::post("/searchCTKM",[App\Http\AdminControllers\CtkhuyenmaiController::class,"search"]);

//admindiemden
Route::get('/adminDD',[App\Http\AdminControllers\DiemDenController::class,"AdminDD"]);
Route::prefix('addDD')->group(function (){
    Route::get('/',[App\Http\AdminControllers\DiemDenController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\DiemDenController::class,"AddRecord"]);
});
Route::prefix('editDD/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\DiemDenController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\DiemDenController::class,"UpdateRecord"]);
});
Route::get('/deleteDD/{id}',[App\Http\AdminControllers\DiemDenController::class,"DeleteRecord"]);
Route::post("/searchDD",[App\Http\AdminControllers\DiemDenController::class,"search"]);
//admincamnang
Route::get('/adminCN',[App\Http\AdminControllers\CamNangController::class,"AdminCN"]);
Route::prefix('addCN')->group(function (){
    Route::get('/',[App\Http\AdminControllers\CamNangController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\CamNangController::class,"AddRecord"]);
});
Route::prefix('/editCN/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\CamNangController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\CamNangController::class,"UpdateRecord"]);
});
Route::get('/deleteCN/{id}',[App\Http\AdminControllers\CamNangController::class,"DeleteRecord"]);
Route::post("/searchCN",[App\Http\AdminControllers\CamNangController::class,"search"]);

//user
Route::get('/adminUser',[App\Http\AdminControllers\UserController::class,"AdminUser"]);
Route::prefix('addUser')->group(function (){
    Route::get('/',[App\Http\AdminControllers\UserController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\UserController::class,"AddRecord"]);
});
Route::prefix('editUser/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\UserController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\UserController::class,"UpdateRecord"]);
});
Route::get('/deleteUser/{id}',[App\Http\AdminControllers\UserController::class,"DeleteRecord"]);
Route::post("/searchUser",[App\Http\AdminControllers\UserController::class,"search"]);

//admin dichvu
Route::get('/adminDV',[App\Http\AdminControllers\DichVuController::class,"AdminDichVu"]);
Route::prefix('addDV')->group(function (){
    Route::get('/',[App\Http\AdminControllers\DichVuController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\DichVuController::class,"AddRecord"]);
});
Route::prefix('editDV/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\DichVuController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\DichVuController::class,"UpdateRecord"]);
});
Route::get('/deleteDV/{id}',[App\Http\AdminControllers\DichVuController::class,"DeleteRecord"]);
Route::post("/searchDV",[App\Http\AdminControllers\DichVuController::class,"search"]);

//Admin MB
Route::get('/adminMB',[App\Http\AdminControllers\MayBayController::class,"AdminMB"]);
Route::prefix('addMB')->group(function (){
    Route::get('/',[App\Http\AdminControllers\MayBayController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\MayBayController::class,"AddRecord"]);
});
Route::prefix('editMB/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\MayBayController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\MayBayController::class,"UpdateRecord"]);
});
Route::get('/deleteMB/{id}',[App\Http\AdminControllers\MayBayController::class,"DeleteRecord"]);
Route::post("/searchMB",[App\Http\AdminControllers\MayBayController::class,"search"]);

//Admin CB
Route::get('/adminCB',[App\Http\AdminControllers\ChuyenBayController::class,"AdminCB"]);
Route::prefix('addCB')->group(function (){
    Route::get('/',[App\Http\AdminControllers\ChuyenBayController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\ChuyenBayController::class,"AddRecord"]);
});
Route::prefix('editCB/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\ChuyenBayController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\ChuyenBayController::class,"UpdateRecord"]);
});
Route::get('/deleteCB/{id}',[App\Http\AdminControllers\ChuyenBayController::class,"DeleteRecord"]);
Route::post("/searchCB",[App\Http\AdminControllers\ChuyenBayController::class,"search"]);


//admin San bay
Route::get('/adminSB',[App\Http\AdminControllers\SanBayController::class,"AdminSB"]);
Route::prefix('addSB')->group(function (){
    Route::get('/',[App\Http\AdminControllers\SanBayController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\SanBayController::class,"AddRecord"]);
});
Route::prefix('editSB/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\SanBayController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\SanBayController::class,"UpdateRecord"]);
});
Route::get('/deleteSB/{id}',[App\Http\AdminControllers\SanBayController::class,"DeleteRecord"]);
Route::post("/searchSB",[App\Http\AdminControllers\SanBayController::class,"search"]);

//ve
Route::get('/adminVe',[App\Http\AdminControllers\VeController::class,"AdminVe"]);
Route::prefix('addVe')->group(function (){
    Route::get('/',[App\Http\AdminControllers\VeController::class,"viewadd"]);
    Route::post('/',[App\Http\AdminControllers\VeController::class,"AddRecord"]);
});
Route::prefix('editVe/{id}')->group(function (){
    Route::get('/',[App\Http\AdminControllers\VeController::class,"viewedit"]);
    Route::post('/',[App\Http\AdminControllers\VeController::class,"UpdateRecord"]);
});
Route::get('/deleteVe/{id}',[App\Http\AdminControllers\VeController::class,"DeleteRecord"]);
Route::post("/searchVe",[App\Http\AdminControllers\VeController::class,"search"]);


//trangphu
//lienhe
Route::get('/lienhe', function (){
    return view('front.trangphu.lienhe');
});
//trogiup
Route::get('/trogiup', function (){
    return view('front.trangphu.trogiup');
});
//aboutus
Route::get('/aboutus', function (){
    return view('front.trangphu.aboutus');
});
//dashboar
Route::get('/dashboard', function (){
    return view('front.admin.dashboar.dashboar');
});

