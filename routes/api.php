<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Teams
    Route::apiResource('teams', 'TeamApiController');

    // Services
    Route::apiResource('services', 'ServicesApiController', ['except' => ['destroy']]);

    // Clients
    Route::apiResource('clients', 'ClientsApiController');

    // Payments
    Route::apiResource('payments', 'PaymentsApiController');
});
