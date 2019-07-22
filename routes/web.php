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

Route::get('/', 'HomeyukbizController@index');

Route::get('/home', 'HomeyukbizController@index');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/abouts',                                 'Admin\AboutsController@index');
    Route::get('/admin/abouts/create',                          'Admin\AboutsController@create');
    Route::post('/admin/abouts',                                'Admin\AboutsController@store');
    Route::get('/admin/abouts/{about}/edit',                    'Admin\AboutsController@edit')->name('admin/abouts/edit');
    Route::post('/admin/abouts/{about}',                        'Admin\AboutsController@update')->name('admin/abouts/update');
    Route::delete('/admin/abouts/{about}',                      'Admin\AboutsController@destroy')->name('admin/abouts/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/skills',                                 'Admin\SkillsController@index');
    Route::get('/admin/skills/create',                          'Admin\SkillsController@create');
    Route::post('/admin/skills',                                'Admin\SkillsController@store');
    Route::get('/admin/skills/{skill}/edit',                    'Admin\SkillsController@edit')->name('admin/skills/edit');
    Route::post('/admin/skills/{skill}',                        'Admin\SkillsController@update')->name('admin/skills/update');
    Route::delete('/admin/skills/{skill}',                      'Admin\SkillsController@destroy')->name('admin/skills/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/pengalamen',                             'Admin\PengalamansController@index');
    Route::get('/admin/pengalamen/create',                      'Admin\PengalamansController@create');
    Route::post('/admin/pengalamen',                            'Admin\PengalamansController@store');
    Route::get('/admin/pengalamen/{pengalaman}/edit',           'Admin\PengalamansController@edit')->name('admin/pengalamen/edit');
    Route::post('/admin/pengalamen/{pengalaman}',               'Admin\PengalamansController@update')->name('admin/pengalamen/update');
    Route::delete('/admin/pengalamen/{pengalaman}',             'Admin\PengalamansController@destroy')->name('admin/pengalamen/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/pendidikans',                            'Admin\PendidikansController@index');
    Route::get('/admin/pendidikans/create',                     'Admin\PendidikansController@create');
    Route::post('/admin/pendidikans',                           'Admin\PendidikansController@store');
    Route::get('/admin/pendidikans/{pendidikan}/edit',          'Admin\PendidikansController@edit')->name('admin/pendidikans/edit');
    Route::post('/admin/pendidikans/{pendidikan}',              'Admin\PendidikansController@update')->name('admin/pendidikans/update');
    Route::delete('/admin/pendidikans/{pendidikan}',            'Admin\PendidikansController@destroy')->name('admin/pendidikans/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/wawasans',                               'Admin\WawasansController@index');
    Route::get('/admin/wawasans/create',                        'Admin\WawasansController@create');
    Route::post('/admin/wawasans',                              'Admin\WawasansController@store');
    Route::get('/admin/wawasans/{wawasan}/edit',                'Admin\WawasansController@edit')->name('admin/wawasans/edit');
    Route::post('/admin/wawasans/{wawasan}',                    'Admin\WawasansController@update')->name('admin/wawasans/update');
    Route::delete('/admin/wawasans/{wawasan}',                  'Admin\WawasansController@destroy')->name('admin/wawasans/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/portfolios',                             'Admin\PortfoliosController@index');
    Route::get('/admin/portfolios/create',                      'Admin\PortfoliosController@create');
    Route::post('/admin/portfolios',                            'Admin\PortfoliosController@store');
    Route::get('/admin/portfolios/{portfolio}/edit',            'Admin\PortfoliosController@edit')->name('admin/portfolios/edit');
    Route::post('/admin/portfolios/{portfolio}',                'Admin\PortfoliosController@update')->name('admin/portfolios/update');
    Route::delete('/admin/portfolios/{portfolio}',              'Admin\PortfoliosController@destroy')->name('admin/portfolios/destroy');
});