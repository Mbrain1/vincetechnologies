<?php


Route::group(['prefix'=>'admin','middleware'=> ['isAdminLoggedIn']],function () {

    // Route::get('login',Login::class)->name('admin.login');

});
    
    

Route::group(['prefix'=>'admin','middleware'=> ['isAdminNotLoggedIn']],function () {

  // Route::get('dashboard',Dashboard::class)->name('admin.dashboard');

    
        
});