<?php

/*
|--------------------------------------------------------------------------
| Web Routes6tyu
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });




Route::prefix('admin')->group(function() {

  //------------ ADMIN LOGIN SECTION ------------

  Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
  Route::get('/forgot', 'Admin\LoginController@showForgotForm')->name('admin.forgot');
  Route::post('/forgot', 'Admin\LoginController@forgot')->name('admin.forgot.submit');
  Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

  Route::get('/profile', 'Admin\AdminController@profile')->name('admin.profile');
  Route::post('/profile/update', 'Admin\AdminController@profileupdate')->name('admin.profile.update');

Route::get('/generalsettings/edit', 'Admin\AdminController@gsedit')->name('admin.gs.edit');
  Route::post('/generalsettings/update', 'Admin\AdminController@gsupdate')->name('admin-gs-update');

  Route::get('/password', 'Admin\AdminController@passwordreset')->name('admin.password');
  Route::post('/password/update', 'Admin\AdminController@changepass')->name('admin.password.update');

  Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');




  Route::get('/slider', 'Admin\SliderController@index')->name('admin-sl-index');
  Route::get('/slider/create', 'Admin\SliderController@create')->name('admin-sl-create');
  Route::post('/slider/create', 'Admin\SliderController@store')->name('admin-sl-store');
  Route::get('/slider/edit/{id}', 'Admin\SliderController@edit')->name('admin-sl-edit');
  Route::post('/slider/edit/{id}', 'Admin\SliderController@update')->name('admin-sl-update');
  Route::get('/slider/delete/{id}', 'Admin\SliderController@destroy')->name('admin-sl-delete');


  Route::get('/calculation', 'Admin\CalculationController@index')->name('admin-bcl-index');
  Route::get('/calculation/create', 'Admin\CalculationController@create')->name('admin-bcl-create');
  Route::post('/calculation/create', 'Admin\CalculationController@store')->name('admin-bcl-store');
  Route::get('/calculation/edit/{id}', 'Admin\CalculationController@edit')->name('admin-bcl-edit');
  Route::post('/calculation/edit/{id}', 'Admin\CalculationController@update')->name('admin-bcl-update');
  Route::get('/calculation/delete/{id}', 'Admin\CalculationController@destroy')->name('admin-bcl-delete');




  Route::get('/pgblood', 'Admin\PgBloodController@index')->name('admin-pgblood-index');
  Route::get('/pgblood/create', 'Admin\PgBloodController@create')->name('admin-pgblood-create');
  Route::post('/pgblood/create', 'Admin\PgBloodController@store')->name('admin-pgblood-store');
  Route::get('/pgblood/edit/{id}', 'Admin\PgBloodController@edit')->name('admin-pgblood-edit');
  Route::post('/pgblood/edit/{id}', 'Admin\PgBloodController@update')->name('admin-pgblood-update');
  Route::get('/pgblood/delete/{id}', 'Admin\PgBloodController@destroy')->name('admin-pgblood-delete');
  Route::post('/pgblood/status', 'Admin\PgBloodController@status')->name('admin-pgblood-status');



  Route::get('/pgclassification', 'Admin\PgClassificationController@index')->name('admin-pgclass-index');
  Route::get('/pgclassification/create', 'Admin\PgClassificationController@create')->name('admin-pgclass-create');
  Route::post('/pgclassification/create', 'Admin\PgClassificationController@store')->name('admin-pgclass-store');
  Route::get('/pgclassification/edit/{id}', 'Admin\PgClassificationController@edit')->name('admin-pgclass-edit');
  Route::post('/pgclassification/edit/{id}', 'Admin\PgClassificationController@update')->name('admin-pgclass-update');
  Route::get('/pgclassification/delete/{id}', 'Admin\PgClassificationController@destroy')->name('admin-pgclass-delete');
  Route::post('/pgclassification/status', 'Admin\PgClassificationController@status')->name('admin-pgclass-status');



  Route::get('/pgremedy', 'Admin\PgRemedyController@index')->name('admin-pgremedy-index');
  Route::get('/pgremedy/create', 'Admin\PgRemedyController@create')->name('admin-pgremedy-create');
  Route::post('/pgremedy/create', 'Admin\PgRemedyController@store')->name('admin-pgremedy-store');
  Route::get('/pgremedy/edit/{id}', 'Admin\PgRemedyController@edit')->name('admin-pgremedy-edit');
  Route::post('/pgremedy/edit/{id}', 'Admin\PgRemedyController@update')->name('admin-pgremedy-update');
  Route::get('/pgremedy/delete/{id}', 'Admin\PgRemedyController@destroy')->name('admin-pgremedy-delete');



  Route::get('/pgtreat', 'Admin\PgTreatController@index')->name('admin-pgtreat-index');
  Route::get('/pgtreat/create', 'Admin\PgTreatController@create')->name('admin-pgtreat-create');
  Route::post('/pgtreat/create', 'Admin\PgTreatController@store')->name('admin-pgtreat-store');
  Route::get('/pgtreat/edit/{id}', 'Admin\PgTreatController@edit')->name('admin-pgtreat-edit');
  Route::post('/pgtreat/edit/{id}', 'Admin\PgTreatController@update')->name('admin-pgtreat-update');
  Route::get('/pgtreat/delete/{id}', 'Admin\PgTreatController@destroy')->name('admin-pgtreat-delete');


  Route::get('/pgother', 'Admin\PgOtherController@index')->name('admin-pgother-index');
  Route::get('/pgother/create', 'Admin\PgOtherController@create')->name('admin-pgother-create');
  Route::post('/pgother/create', 'Admin\PgOtherController@store')->name('admin-pgother-store');
  Route::get('/pgother/edit/{id}', 'Admin\PgOtherController@edit')->name('admin-pgother-edit');
  Route::post('/pgother/edit/{id}', 'Admin\PgOtherController@update')->name('admin-pgother-update');
  Route::get('/pgother/delete/{id}', 'Admin\PgOtherController@destroy')->name('admin-pgother-delete');



  Route::get('/faqs', 'Admin\PgFaqController@index')->name('admin-faqs-index');
  Route::get('/faqs/create', 'Admin\PgFaqController@create')->name('admin-faqs-create');
  Route::post('/faqs/create', 'Admin\PgFaqController@store')->name('admin-faqs-store');
  Route::get('/faqs/edit/{id}', 'Admin\PgFaqController@edit')->name('admin-faqs-edit');
  Route::post('/faqs/edit/{id}', 'Admin\PgFaqController@update')->name('admin-faqs-update');
  Route::get('/faqs/delete/{id}', 'Admin\PgFaqController@destroy')->name('admin-faqs-delete');


  Route::get('/article', 'Admin\ArticleController@index')->name('admin-article-index');
  Route::get('/article/create', 'Admin\ArticleController@create')->name('admin-article-create');
  Route::post('/article/create', 'Admin\ArticleController@store')->name('admin-article-store');
  Route::get('/article/edit/{id}', 'Admin\ArticleController@edit')->name('admin-article-edit');
  Route::post('/article/edit/{id}', 'Admin\ArticleController@update')->name('admin-article-update');
  Route::get('/article/delete/{id}', 'Admin\ArticleController@destroy')->name('admin-article-delete');
  Route::post('/article/status', 'Admin\ArticleController@status')->name('admin-article-status');


  Route::get('/banner/edit/{slug}', 'Admin\BannerController@edit')->name('admin-banner-edit');
  Route::post('/banner/edit/{slug}', 'Admin\BannerController@update')->name('admin-banner-update');


  Route::get('/seotools/keywords', 'Admin\AdminController@keywords')->name('admin-seotool-keywords');
  Route::post('/seotools/keywords/update', 'Admin\AdminController@keywordsupdate')->name('admin-seotool-keywords-update');

    Route::get('/cache/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return redirect()->route('admin.dashboard')->with('cache','System Cache Has Been Removed.');
  })->name('admin-cache-clear');


});


Route::get('/', 'Front\FrontendController@index')->name('front.index');


Route::get('/bloodpressure/', 'Front\FrontendController@BloodPressureid')->name('front.pgblood.id');
Route::get('/bloodpressure/{slug}', 'Front\FrontendController@BloodPressure')->name('front.pgblood');

Route::get('/classifications/', 'Front\FrontendController@Classificationid')->name('front.classification.id');
Route::get('/classifications/{slug}', 'Front\FrontendController@Classification')->name('front.classification');

Route::get('/remedies/', 'Front\FrontendController@Remedyid')->name('front.remedy.id');
Route::get('/remedies/{slug}', 'Front\FrontendController@Remedy')->name('front.remedy');

Route::get('/treatments/', 'Front\FrontendController@Treatmentid')->name('front.treatment.id');
Route::get('/treatments/{slug}', 'Front\FrontendController@Treatment')->name('front.treatment');

Route::get('/articles/', 'Front\FrontendController@Articleid')->name('front.article.id');

Route::get('/articles/{slug}', 'Front\FrontendController@Article')->name('front.article');
Route::get('/faq', 'Front\FrontendController@faq')->name('front.faq');
Route::get('/readings/', 'Front\FrontendController@calculationCheck')->name('front.readings');
Route::get('/contact/', 'Front\FrontendController@Contact')->name('front.contact');
Route::post('/contact','Front\FrontendController@contactemail')->name('front.contact.submit');

Route::get('/{slug}/', 'Front\FrontendController@page')->name('front.page');

