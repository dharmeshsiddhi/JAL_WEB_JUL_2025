<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\LangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\BlankController;

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

//=====================================================================================
//------------------------------|| Projeact Clear Cache Routes ||---------------------------
//=====================================================================================
Route::get('/clear-all', function() {
    $CatchallError1 = Artisan::call('cache:clear');
    echo '<h4>1. Your All Cache facade value cleared</h4>';
    $CatchallError2 = Artisan::call('optimize');
    echo '<h4>2. Your All Reoptimized class loader</h4>';
    $CatchallError3 = Artisan::call('route:cache');
    echo '<h4>3. Your All Routes cached</h4>';
    $CatchallError4 = Artisan::call('route:clear');
    echo '<h4>4. Your All Route cache cleared</h4>';
    $CatchallError5 = Artisan::call('view:clear');
    echo '<h4>5. View cache cleared</h4>';
    $CatchallError6 = Artisan::call('config:cache');
    echo '<h4>6. Your All Empty Config cleared</h4>';
});

//=====================================================================================
//------------------------------|| App Language Routes ||------------------------------------
//=====================================================================================

//------------------------------|| Language Routes ||---------------------------------
Route::get('language-change', [LangController::class, 'changeLanguage'])->name('changeLanguage');


//=====================================================================================
//------------------------------|| Dashboard Routes ||---------------------------------
//=====================================================================================
Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/sp-message', [HomeController::class, 'spmessage']);
Route::get('/100-day-program', [HomeController::class, 'program100Day']);
Route::get('/register-complaint', [HomeController::class, 'registerComplaint']);
Route::post('/ajax-submit-complaint-Detail', [HomeController::class, 'ajaxSubmitNewCompalaintDetail']);
Route::get('/track-complaint', [HomeController::class, 'trackComplaint']);
Route::post('/ajax-track-complaint-Detail', [HomeController::class, 'ajaxTrackCompalaintDetail']);
Route::get('/about-district', [AboutController::class, 'aboutdistrict']);
Route::get('/hall-of-fame', [OfficerController::class, 'halloffame']);
Route::get('/organization-structure', [AboutController::class, 'orgstructure']);
Route::get('/police-stations', [StationController::class, 'stationDetail']);
Route::get('/police-rank', [BlankController::class, 'blankPage']);
Route::get('/police-flag', [BlankController::class, 'blankPage']);
Route::get('/anti-terrorism-cell', [BlankController::class, 'blankPage']);
Route::get('/bdds', [HomeController::class, 'bdds']);
Route::get('/control-room', [HomeController::class, 'controlroom']);
Route::get('/cctns', [HomeController::class, 'cctns']);
Route::get('/district-special-branch', [HomeController::class, 'dsbranch']);
Route::get('/economic-offence-wing', [HomeController::class, 'eowbranch']);
Route::get('/foreigner-registration-office', [BlankController::class, 'blankPage']);
Route::get('/local-crime-branch', [HomeController::class, 'lcbbranch']);
Route::get('/motor-transport-section', [BlankController::class, 'blankPage']);
Route::get('/police-head-quarter', [BlankController::class, 'blankPage']);
Route::get('/traffic-branch', [HomeController::class, 'trafficbranch']);
Route::get('/women-children-cell', [BlankController::class, 'blankPage']);
Route::get('/wireless-section', [BlankController::class, 'blankPage']);
Route::get('/senior-officers', [OfficerController::class, 'seniorOfficersList']);
Route::get('/press-release', [NewsController::class, 'pressList']);
Route::post('/press-release/ajax-paginate-press-release-list', [NewsController::class, 'pressListPaging']);
Route::get('/accident-detail-receipt', [HomeController::class, 'accidentreceipt']);
Route::get('/citizen-charter', [BlankController::class, 'blankPage']);
Route::get('/noise-pollution', [BlankController::class, 'blankPage']);
Route::get('/scheduled-cast-tribe', [HomeController::class, 'scstact']);
Route::post('/scheduled-cast-tribe/ajax-paginate-scheduled-cast-tribe-list', [HomeController::class, 'scstactPaging']);
Route::get('/right-to-information', [BlankController::class, 'blankPage']);
Route::get('/traffic-rules', [HomeController::class, 'trafficrules']);
Route::get('/traffic-fines', [HomeController::class, 'trafficfines']);
Route::get('/traffice-fines', [BlankController::class, 'blankPage']);
Route::get('/women-safety', [BlankController::class, 'blankPage']);
Route::get('/police-patil', [StationController::class, 'policePatil']);
Route::get('/screen-reader', [AboutController::class, 'screenReader']);
Route::post('/police-patil/get-bit-dropdown-list-by-station-id', [StationController::class, 'getBitListByStationId']);
Route::post('/police-patil/ajax-filter-paginate-police-patil-list', [StationController::class, 'getFilterPolicePatilListPaging']);
Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/recruitments', [NewsController::class, 'recruitmentList']);
Route::post('/recruitment/ajax-paginate-recruitment-list', [NewsController::class, 'recruitmentListPaging']);

Route::get('/initiatives', [HomeController::class, 'initiatives']);
Route::post('/initiatives/ajax-paginate-initiatives-list', [HomeController::class, 'initiativesPaging']);

Route::get('/photo-gallery', [HomeController::class, 'photoGallery']);
Route::post('/photo-gallery/ajax-paginate-photo-gallery-list', [HomeController::class, 'photoGalleryPaging']);
Route::get('/photo-gallery/view-photo-gallery/{id}', [HomeController::class, 'viewPhotoGalleryDetail']);
Route::post('/photo-gallery/ajax-view-photo-gallery', [HomeController::class, 'ajaxViewPhotoGalleryDetail']);

Route::get('/police-map', [HomeController::class, 'policeMap']);
Route::get('/cyber-safety', [HomeController::class, 'cyberSafety']);
Route::get('/women-safety', [HomeController::class, 'womenSafety']);
Route::get('/anti-narcotics', [HomeController::class, 'antiNarcotics']);
Route::get('/useful-websites', [HomeController::class, 'usefulWebsites']);

Route::get('/gradation-list', [HomeController::class, 'gradationList']);
Route::post('/gradation-list/ajax-paginate-gradation-list', [HomeController::class, 'gradationListPaging']);
