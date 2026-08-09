use App\Http\Controllers\Admin\SponsorController;

Route::prefix('admin')->group(function(){

    Route::resource(
        'sponsors',
        SponsorController::class
    );

});
