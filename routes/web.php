<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

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

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Competition Participants
    Route::delete('competition-participants/destroy', 'CompetitionParticipantsController@massDestroy')->name('competition-participants.massDestroy');
    Route::post('competition-participants/media', 'CompetitionParticipantsController@storeMedia')->name('competition-participants.storeMedia');
    Route::post('competition-participants/ckmedia', 'CompetitionParticipantsController@storeCKEditorImages')->name('competition-participants.storeCKEditorImages');
    Route::post('competition-participants/parse-csv-import', 'CompetitionParticipantsController@parseCsvImport')->name('competition-participants.parseCsvImport');
    Route::post('competition-participants/process-csv-import', 'CompetitionParticipantsController@processCsvImport')->name('competition-participants.processCsvImport');
    Route::resource('competition-participants', 'CompetitionParticipantsController');

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/parse-csv-import', 'CategoryController@parseCsvImport')->name('categories.parseCsvImport');
    Route::post('categories/process-csv-import', 'CategoryController@processCsvImport')->name('categories.processCsvImport');
    Route::resource('categories', 'CategoryController');

    // Competition Card First
    Route::delete('competition-card-firsts/destroy', 'CompetitionCardFirstController@massDestroy')->name('competition-card-firsts.massDestroy');
    Route::post('competition-card-firsts/parse-csv-import', 'CompetitionCardFirstController@parseCsvImport')->name('competition-card-firsts.parseCsvImport');
    Route::post('competition-card-firsts/process-csv-import', 'CompetitionCardFirstController@processCsvImport')->name('competition-card-firsts.processCsvImport');
    Route::resource('competition-card-firsts', 'CompetitionCardFirstController');

    // Judging Panel
    Route::delete('judging-panels/destroy', 'JudgingPanelController@massDestroy')->name('judging-panels.massDestroy');
    Route::resource('judging-panels', 'JudgingPanelController');

    // Ivent
    Route::delete('ivents/destroy', 'IventController@massDestroy')->name('ivents.massDestroy');
    Route::post('ivents/media', 'IventController@storeMedia')->name('ivents.storeMedia');
    Route::post('ivents/ckmedia', 'IventController@storeCKEditorImages')->name('ivents.storeCKEditorImages');
    Route::post('ivents/parse-csv-import', 'IventController@parseCsvImport')->name('ivents.parseCsvImport');
    Route::post('ivents/process-csv-import', 'IventController@processCsvImport')->name('ivents.processCsvImport');
    Route::resource('ivents', 'IventController');

    // Competition Group
    Route::delete('competition-groups/destroy', 'CompetitionGroupController@massDestroy')->name('competition-groups.massDestroy');
    Route::post('competition-groups/media', 'CompetitionGroupController@storeMedia')->name('competition-groups.storeMedia');
    Route::post('competition-groups/ckmedia', 'CompetitionGroupController@storeCKEditorImages')->name('competition-groups.storeCKEditorImages');
    Route::post('competition-groups/parse-csv-import', 'CompetitionGroupController@parseCsvImport')->name('competition-groups.parseCsvImport');
    Route::post('competition-groups/process-csv-import', 'CompetitionGroupController@processCsvImport')->name('competition-groups.processCsvImport');
    Route::resource('competition-groups', 'CompetitionGroupController');

    // Listindex
    Route::delete('listindices/destroy', 'ListindexController@massDestroy')->name('listindices.massDestroy');
    Route::resource('listindices', 'ListindexController');
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
