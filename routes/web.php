<?php



Route::get('/logout',function(){
    Session::flush();
    return redirect()->route("home");
})->name('logout');




Route::get("/","App\Http\Livewire\Home")->name('home');

Route::get("category/{service}","App\Http\Livewire\Category\Home")->name('category');


require base_path('routes/links/user.php'); //Routes for Users if any
require base_path('routes/links/admin.php'); //Routes for Admin if any
