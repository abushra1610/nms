<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\NgoController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\BoardController;
use App\Http\Controllers\Frontend\NoticeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\SshipController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DAController;
use App\Http\Controllers\Backend\AFDController;
use App\Http\Controllers\Frontend\DonateController;
use App\Http\Controllers\Frontend\MDHController;
use App\Http\Controllers\Frontend\DonationController;
use App\Http\Controllers\Frontend\LoanController;
use App\Http\Controllers\Frontend\ABookController;
use App\Http\Controllers\Backend\ConController;
use App\Http\Controllers\Backend\AFLController;
use App\Http\Controllers\Backend\AFBController;
use App\Http\Controllers\Backend\ScholarshipController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\NoteController;
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












    Route::get('admin/login',[LoginController::class,'login'])->name('admin.login');
    Route::post('admin/do/login',[LoginController::class,'doLogin'])->name('admin.do.login');

    Route::group(['prefix'=>'admin-portal'],function(){
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::get('/', function () {
        return view('admin.partials.dash');
    })->name('admin');
    Route::get('/sign out',[LoginController::class,'logout'])->name('admin.logout');

    Route::get('/products',[ProductController::class,'productList'])->name('admin.products');
    Route::get('/products/create',[ProductController::class,'productCreate'])->name('admin.products.create');
    Route::post('/products/create/store',[ProductController::class,'productStore'])->name('admin.products.store');

    // Category

    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
    Route::post('/category/add',[CategoryController::class,'add'])->name('category.add');

    Route::get('/admin',[NgoController::class,'create'])->name('scholarship.create');
    Route::post('/admin',[NgoController::class,'store'])->name('scholarship.store');
   //Route::get('/',[NgoController::class,'List'])->name('scholarship.information');


      Route::get('/message',[ConController::class,'contactlist'])->name('admin.message');
//amount

Route::get('/amount',[DAController::class,'amount'])->name('admin.amount');

// afdonation

Route::get('/adonation',[AFDController::class,'adonation'])->name('admin.adonation');

//loan

Route::get('/loan',[AFLController::class,'loan'])->name('admin.loan');

//book

Route::get('/book',[AFBController::class,'book'])->name('admin.book');

//route for All book list

Route::get('/books',[BookController::class,'create'])->name('allBook');
Route::get('/bookAdd/form',[BookController::class,'bookForm'])->name('bookForm');
Route::post('/book/add',[BookController::class,'addBook'])->name('addBook');
Route::put('/book/update/{id}',[BookController::class,'updateBook'])->name('updateBook');
Route::get('/book/delete/{id}',[BookController::class,'deleteBook'])->name('deleteBook');
Route::get('/book/detail/{id}',[BookController::class,'details'])->name('detailBook');


//Notice

Route::get('/note',[NoteController::class,'note'])->name('admin.Note.create');
Route::post('/note/store',[NoteController::class,'store'])->name('admin.Note.store');

Route::get('/note/delete/{id}',[NoteController::class,'delete'])->name('admin.layouts.note.delete');
Route::get('/note/edit/{id}',[NoteController::class,'edit'])->name('admin.layouts.note.edit');
Route::put('/note/edit/{id}',[NoteController::class,'update'])->name('admin.layouts.note.update');
// Route::get('/employee/employee-list/view/{id}',[EmployeeController::class,'view'])->name('backend.employee.view');

//scholarship

Route::get('/scholarshipp',[ScholarshipController::class,'scholarshipp'])->name('admin.scholarshipp.create');
Route::post('/scholarshipp/store',[ScholarshipController::class,'store'])->name('admin.scholarshipp.store');

//approve

Route::get('/approve/{id}',[DAController::class,'approve'])->name('admin.approve');
Route::get('/here/approve/{id}',[DAController::class,'hereApprove'])->name('here.admin.approve');


//member

Route::get('/member/form',[MemberController::class,'create'])->name('admin.member.create');
Route::post('/member/store',[MemberController::class,'store'])->name('admin.member.store');
Route::get('/member/list',[MemberController::class,'list'])->name('admin.member.list');
Route::get('/donar/list',[MDHController::class,'donarList'])->name('admin.donar.list');

// Route::get('/member/add',[MemberController::class,'add'])->name('admin.member.add');
// Route::post('/member/add',[MemberController::class,'add/store'])->name('admin.member.store');


});
});











Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/', function () {
    return redirect()->route('user');
 });
 Route::get('/user', function () {
    return view('frontend.index');
})->name('user');


Route::group(['prefix'=>'user-portal','middleware'=>['user']],function(){



Route::get('/logout',[UserController::class,'logout'])->name('user.logout');


Route::get('/home',[BoardController::class,'board'])->name('user.board');



Route::get('/contact',[ContactController::class,'Contact'])->name('user.contact');
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');

Route::get('/donate',[DonateController::class,'Donate'])->name('user.donate');
Route::post('/donate/store',[DonateController::class,'store'])->name('donate.store');

Route::get('/donatehere',[MDHController::class,'Here'])->name('user.donatehere');
Route::post('/donatehere/store',[MDHController::class,'store'])->name('donatehere.store');


Route::get('/profile/{id}',[ProfileController::class,'profile'])->name('user.profile');


Route::get('/notice',[NoticeController::class,'notice'])->name('user.notice');


Route::get('/scholarship',[SshipController::class,'ship'])->name('user.sship');
 Route::get('/scholarship/application',[SshipController::class,'page'])->name('user.page');
 Route::post('/scholarship/application/store',[ContactController::class,'store'])->name('user.store');


Route::get('/about',[AboutController::class,'about'])->name('user.about');


Route::get('/donation',[DonationController::class,'donation'])->name('user.donation');
Route::post('/donation',[DonationController::class,'store'])->name('user.donation.store');



Route::get('/loan',[LoanController::class,'loan'])->name('user.loan');
Route::post('/loan',[LoanController::class,'store'])->name('user.loan.store');


Route::get('/abook',[ABookController::class,'book'])->name('user.abook');
Route::post('/abook',[ABookController::class,'store'])->name('user.abook.store');


Route::get('/ourWork',[HomeController::class,'ourWork'])->name('user.ourWork');

Route::get('/ourWork/bookSector',[HomeController::class,'bookSector'])->name('user.bookSector');

Route::get('/ourWork/donationSector',[HomeController::class,'donationSector'])->name('user.donationSector');

Route::get('/ourWork/loanSector',[HomeController::class,'loanSector'])->name('user.loanSector');





});
