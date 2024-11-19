<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LayoutIndoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SheController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\LelalangController;
use App\Http\Controllers\AdminlelangController;
use App\Http\Controllers\AdminBuyerController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\EmailController;
use App\Models\English;
use App\Models\Post;
use App\Models\Number;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return redirect('home');
});

Route::get('home', function () {
    $data = file_get_contents(public_path('assets/she.txt'));
    $sheData = json_decode($data, true); // Ubah data dari JSON ke array

    // Ubah array menjadi string sebelum mengirimkannya ke tampilan
    $sheDataString = implode(', ', $sheData);

    $about  = English::firstWhere('slug','=','COMPANYPROFILE');
    $vision  = English::firstWhere('slug','=','COMPANYVISION,MISSION&VALUES');
    $quality   = English::firstWhere('slug','=','COMPANYGROUPVIDEO');
    $grupiwp = English::firstWhere('slug','SUBSIDIARIESPT.ISPATWIREPRODUCT');
    $grupibb = English::firstWhere('slug','SUBSIDIARIESPT.ISPATBUKITBAJA');

    return view('layout.home.index',[
        'quality' => $quality,
        'vision' => $vision,
        'about' => $about,
        'shedata' => $sheData,
        'grupiwp' => $grupiwp,
        'grupibb' => $grupibb,
        'url' => 'home',
        'class' => '',
        'navbar' =>'',
        'sub' => 'EN',
    ]);
})->name('home');

Route::get('home_indo', function () {
    $data = file_get_contents(public_path('assets/she.txt'));
    $sheData = json_decode($data, true); // Ubah data dari JSON ke array

    // Ubah array menjadi string sebelum mengirimkannya ke tampilan
    $sheDataString = implode(', ', $sheData);


    $about  = Post::firstWhere('slug','=','COMPANYPROFILE');
    $vision  = Post::firstWhere('slug','=','COMPANYVISION,MISSION&VALUES');
    $quality   = Post::firstWhere('slug','=','COMPANYGROUPVIDEO');
    $grupiwp = Post::firstWhere('slug','SUBSIDIARIESPT.ISPATWIREPRODUCT');
    $grupibb = Post::firstWhere('slug','SUBSIDIARIESPT.ISPATBUKITBAJA');

    return view('layout.home.index_indo',[
        'quality' => $quality,
        'vision' => $vision,
        'about' => $about,
        'shedata' => $sheData,
        'grupiwp' => $grupiwp,
        'grupibb' => $grupibb,
        'url' =>'home',
        'class' => '',
        'navbar' =>'',
        'sub' => 'ID',
    ]);
})->name('home_indo');

//Uji Coba test template tanpa DRL
Route::get('/test', function () {
    return view('layout');
});
//Login
Route::get('/when-you-admin-please-login-and-input-username-password',[LoginCOntroller::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Admin routes
Route::resource('admin/number', NumberController::class)->middleware('auth');
Route::resource('admin/grade', GradeController::class)->middleware('auth');
Route::resource('admin/certificate', CertificateController::class)->middleware('auth');
Route::resource('admin/posts', PostController::class)->middleware('auth');
Route::resource('admin/english',EnglishController::class)->middleware('auth');
Route::resource('admin/customer', CustomerController::class)->middleware('auth');
Route::resource('admin/news', NewsController::class)->middleware('auth');
Route::resource('admin/careers',CareerController::class)->middleware('auth');
Route::resource('admin/lelang', AdminlelangController::class)->middleware('auth');
Route::resource('admin/buyer',AdminBuyerController::class)->middleware('auth');
Route::resource('admin/email', EmailController::class);
Route::get('/admin/buyer/{id}', [AdminBuyerController::class, 'show'])->name('lelang.show');


// Route::post('admin/english/{slug}/images', [EnglishController::class, 'uploadFileAttachment'])->middleware('auth');


Route::get('admin/she',[SheController::class,'index'])->middleware('auth')->name('she');
Route::middleware(['auth'])->group(function () {
    Route::get('admin/nearmiss', [SheController::class, 'nearMiss'])->name('nearmiss');
    Route::get('admin/firstaid', [SheController::class, 'FirstAID'])->name('firstaid');
    Route::get('admin/medical', [SheController::class, 'MedicalTreatment'])->name('medical');
    Route::get('admin/lostworkdays', [SheController::class, 'LostWorkdays'])->name('lostworkdays');
    Route::get('admin/fatalitycases', [SheController::class, 'fatalitycases'])->name('fatalitycases');
   Route::post('admin/nearmiss', [SheController::class, 'updateNearMiss'])->name('update.nearmiss');
   Route::post('admin/firstaidcases', [SheController::class, 'updatefirstAID'])->name('update.firstaidcases');
   Route::post('admin/update/medicaltreatment', [SheController::class, 'updateMedicalTreatment'])->name('update.medicaltreatment');
   Route::post('admin/update/lostworkdays', [SheController::class, 'updateLostWorkdays'])->name('update.lostworkdays');
    Route::post('admin/update/fatalitycases', [SheController::class, 'updateFatalityCases'])->name('update.fatalitycases');


});


//layout Rutes english
Route::get('/customer-center',[LayoutController::class,'customer'])->middleware('guest')->name('customer-center');
Route::post('/customer-post',[LayoutController::class,'postcustomer'])->middleware('guest');
Route::get('bod',[LayoutController::class,'bod'])->middleware('guest')->name('bod');
Route::get('profilindo',[LayoutController::class,'profilindo'])->middleware('guest')->name('profilindo');
Route::get('vision',[LayoutController::class,'vision'])->middleware('guest')->name('vision');
Route::get('highlight',[LayoutController::class,'highlight'])->middleware('guest')->name('highlight');
Route::get('milestone',[LayoutController::class,'milestone'])->middleware('guest')->name('milestone');
Route::get('she',[LayoutController::class,'she'])->middleware('guest')->name('she');
Route::get('isocertification',[LayoutController::class,'isocertification'])->middleware('guest')->name('isocertification');
Route::get('jisapproval',[LayoutCOntroller::class,'jisapproval'])->middleware('guest')->name('jisapproval');
Route::get('sni',[LayoutController::class,'sni'])->middleware('guest')->name('sni');
Route::get('kan',[LayoutController::class,'kan'])->middleware('guest')->name('kan');
Route::get('tkdn',[LayoutController::class,'tkdn'])->middleware('guest')->name('tkdn');
Route::get('sirim',[LayoutCOntroller::class,'sirim'])->middleware('guest')->name('sirim');

route::get('environment', function(){
    return view('layout.environment.index',[
        'url' =>'environment',
        'class' => 'sub_page',
        'navbar' =>'timpanav',
        'sub' => 'EN',
    ]);
})->name('environment');

Route::get('highcarbon',[LayoutController::class,'highcarbon'])->middleware('guest')->name('highcarbon');
Route::get('lowcarbon',[LayoutController::class,'lowcarbon'])->middleware('guest')->name('lowcarbon');
Route::get('clodheading',[LayoutController::class,'clodheading'])->middleware('guest')->name('clodheading');
Route::get('generalpw',[LayoutController::class,'generalpw'])->middleware('guest')->name('generalpw');
Route::get('welding',[LayoutController::class,'welding'])->middleware('guest')->name('welding');
Route::get('pline',[LayoutController::class,'pline'])->middleware('guest')->name('pline');
Route::get('structure',[LayoutController::class,'structure'])->middleware('guest')->name('structure');
Route::get('nails',[LayoutController::class,'nails'])->middleware('guest')->name('nails');
Route::get('detailproduk/{grade}',[LayoutController::class,'detailproduk'])->middleware('guest')->name('detailproduk');


Route::get('ispatwireproduct',[LayoutController::class,'ispatwireproduct'])->middleware('guest')->name('ispatwireproduct');
Route::get('ispatpancaputra',[LayoutController::class,'ispatpancaputra'])->middleware('guest')->name('ispatpancaputra');
Route::get('ispatbukitbaja',[LayoutController::class,'ispatbukitbaja'])->middleware('guest')->name('ispatbukitbaja');


Route::get('fasilitas',[LayoutController::class,'fasilitas'])->middleware('guest')->name('fasilitas');
Route::get('steelmaking',[LayoutController::class,'steelmaking'])->middleware('guest')->name('steelmaking');
Route::get('rolling',[LayoutController::class,'rolling'])->middleware('guest')->name('rolling');
Route::get('fasilitaspancaputra',[LayoutController::class,'fasilitaspancaputra'])->middleware('guest')->name('fasilitaspancaputra');
Route::get('fasilitasbukitnaja',[LayoutController::class,'fasilitasbukitnaja'])->middleware('guest')->name('fasilitasbukitnaja');
Route::get('fasilitaswire',[LayoutController::class,'fasilitaswire'])->middleware('guest')->name('fasilitaswire');

Route::get('karir',[LayoutController::class,'karir'])->middleware('guest')->name('karir');
Route::get('applyjob',[LayoutController::class,'applyjob'])->middleware('guest')->name('applyjob');
Route::get('news',[LayoutController::class,'news'])->middleware('guest')->name('news');
Route::get('detailnews/{news}',[LayoutController::class,'detailnews'])->middleware('guest')->name('detailnews');
Route::get('booking/{lelang}',[BuyerController::class,'index'])->middleware('guest')->name('booking');
Route::post('pelelang/store/{lelang}', [BuyerController::class, 'store'])->name('pelelang.store');

Route::get('lelang',[LelalangController::class,'view'])->middleware('guest')->name('lelang');
Route::get('lelangdetail/{lelang}', [LelalangController::class, 'detail'])->middleware('guest')->name('lelangdetail');




////layout Rutes indonesia
Route::get('/customer-center_indo',[LayoutIndoController::class,'customer_indo'])->middleware('guest')->name('customer_indo');
Route::post('/customer-post_indo',[LayoutIndoController::class,'postcustomer_indo'])->middleware('guest');

Route::get('profilindo_indo',[LayoutIndoController::class,'profilindo_indo'])->middleware('guest')->name('profilindo_indo');
Route::get('bod_indo',[LayoutIndoController::class,'bod_indo'])->middleware('guest')->name('bod_indo');
Route::get('vision_indo',[LayoutIndoController::class,'vision_indo'])->middleware('guest')->name('vision_indo');
Route::get('highlight_indo',[LayoutIndoController::class,'highlight_indo'])->middleware('guest')->name('highlight_indo');
Route::get('milestone_indo',[LayoutIndoController::class,'milestone_indo'])->middleware('guest')->name('milestone_indo');
Route::get('she_indo',[LayoutIndoController::class,'she_indo'])->middleware('guest')->name('she_indo');
Route::get('isocertification_indo',[LayoutIndoController::class,'isocertification_indo'])->middleware('guest')->name('isocertification_indo');
Route::get('jisapproval_indo',[LayoutIndoController::class,'jisapproval_indo'])->middleware('guest')->name('jisapproval_indo');
Route::get('sni_indo',[LayoutIndoController::class,'sni_indo'])->middleware('guest')->name('sni_indo');
Route::get('kan_indo',[LayoutIndoController::class,'kan_indo'])->middleware('guest')->name('kan_indo');
Route::get('tkdn_indo',[LayoutIndoController::class,'tkdn_indo'])->middleware('guest')->name('tkdn_indo');
Route::get('sirim_indo',[LayoutIndoController::class,'sirim_indo'])->middleware('guest')->name('sirim_indo');

route::get('environment_indo', function(){
    return view('layout.environment.index_indo',[
        'url' =>'environment',
        'class' => 'sub_page',
        'navbar' =>'timpanav',
        'sub' => 'ID',
    ]);
})->name('environment_indo');

Route::get('highcarbon_indo',[LayoutIndoController::class,'highcarbon_indo'])->middleware('guest')->name('highcarbon_indo');
Route::get('lowcarbon_indo',[LayoutIndoController::class,'lowcarbon_indo'])->middleware('guest')->name('lowcarbon_indo');
Route::get('clodheading_indo',[LayoutIndoController::class,'clodheading_indo'])->middleware('guest')->name('clodheading_indo');
Route::get('generalpw_indo',[LayoutIndoCOntroller::class,'generalpw_indo'])->middleware('guest')->name('generalpw_indo');
Route::get('welding_indo',[LayoutIndoCOntroller::class,'welding_indo'])->middleware('guest')->name('welding_indo');
Route::get('pline_indo',[LayoutIndoController::class,'pline_indo'])->middleware('guest')->name('pline_indo');
Route::get('structure_indo',[LayoutIndoController::class,'structure_indo'])->middleware('guest')->name('structure_indo');
Route::get('nails_indo',[LayoutIndoController::class,'nails_indo'])->middleware('guest')->name('nails_indo');
Route::get('detailproduk_indo/{grade}',[LayoutIndoController::class,'detailproduk_indo'])->middleware('guest')->name('detailproduk_indo');

Route::get('ispatwireproduct_indo',[LayoutIndoController::class,'ispatwireproduct_indo'])->middleware('guest')->name('ispatwireproduct_indo');
Route::get('ispatpancaputra_indo',[LayoutIndoController::class,'ispatpancaputra_indo'])->middleware('guest')->name('ispatpancaputra_indo');
Route::get('ispatbukitbaja_indo',[LayoutIndoController::class,'ispatbukitbaja_indo'])->middleware('guest')->name('ispatbukitbaja_indo');

Route::get('fasilitas_indo',[LayoutIndoController::class,'fasilitas_indo'])->middleware('guest')->name('fasilitas_indo');
Route::get('steelmaking_indo',[LayoutIndoController::class,'steelmaking_indo'])->middleware('guest')->name('steelmaking_indo');
Route::get('rolling_indo',[LayoutIndoController::class,'rolling_indo'])->middleware('guest')->name('rolling_indo');
Route::get('fasilitaspancaputra_indo',[LayoutIndoController::class,'fasilitaspancaputra_indo'])->middleware('guest')->name('fasilitaspancaputra_indo');
Route::get('fasilitasbukitnaja_indo',[LayoutIndoController::class,'fasilitasbukitnaja_indo'])->middleware('guest')->name('fasilitasbukitnaja_indo');
Route::get('fasilitaswire_indo',[LayoutIndoController::class,'fasilitaswire_indo'])->middleware('guest')->name('fasilitaswire_indo');
Route::get('applyjob_indo',[LayoutIndoController::class,'applyjob_indo'])->middleware('guest')->name('applyjob_indo');
Route::get('karir_indo',[LayoutIndoController::class,'karir_indo'])->middleware('guest')->name('karir_indo');
Route::get('news_indo',[LayoutIndoController::class,'news_indo'])->middleware('guest')->name('news_indo');
Route::get('detailnews_indo/{news}',[LayoutIndoController::class,'detailnews_indo'])->middleware('guest')->name('detailnews_indo');








