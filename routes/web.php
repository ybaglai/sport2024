<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Competition Participants
    Route::delete('competition-participants/destroy', 'CompetitionParticipantsController@massDestroy')->name('competition-participants.massDestroy');
    Route::post('competition-participants/media', 'CompetitionParticipantsController@storeMedia')->name('competition-participants.storeMedia');
    Route::post('competition-participants/ckmedia', 'CompetitionParticipantsController@storeCKEditorImages')->name('competition-participants.storeCKEditorImages');
    Route::post('competition-participants/parse-csv-import', 'CompetitionParticipantsController@parseCsvImport')->name('competition-participants.parseCsvImport');
    Route::post('competition-participants/process-csv-import', 'CompetitionParticipantsController@processCsvImport')->name('competition-participants.processCsvImport');
    Route::resource('competition-participants', 'CompetitionParticipantsController');

    // Competition Card First
    Route::delete('competition-card-firsts/destroy', 'CompetitionCardFirstController@massDestroy')->name('competition-card-firsts.massDestroy');
    Route::resource('competition-card-firsts', 'CompetitionCardFirstController');

    // Year Category
    Route::delete('year-categories/destroy', 'YearCategoryController@massDestroy')->name('year-categories.massDestroy');
    Route::resource('year-categories', 'YearCategoryController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');

    // Type Of Competition
    Route::delete('type-of-competitions/destroy', 'TypeOfCompetitionController@massDestroy')->name('type-of-competitions.massDestroy');
    Route::post('type-of-competitions/media', 'TypeOfCompetitionController@storeMedia')->name('type-of-competitions.storeMedia');
    Route::post('type-of-competitions/ckmedia', 'TypeOfCompetitionController@storeCKEditorImages')->name('type-of-competitions.storeCKEditorImages');
    Route::resource('type-of-competitions', 'TypeOfCompetitionController');

    // Judging Panel
    Route::delete('judging-panels/destroy', 'JudgingPanelController@massDestroy')->name('judging-panels.massDestroy');
    Route::resource('judging-panels', 'JudgingPanelController');

    // Competition Group
    Route::delete('competition-groups/destroy', 'CompetitionGroupController@massDestroy')->name('competition-groups.massDestroy');
    Route::resource('competition-groups', 'CompetitionGroupController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
