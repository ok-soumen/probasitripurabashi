<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Banner\Bannercontroller;
use App\Http\Controllers\Cmcorner\Cmcontroller;
use App\Http\Controllers\Gallery\Imagecontroller;
use App\Http\Controllers\Service\Servicecontroller;
use App\Http\Controllers\Minister\Ministercontroller;
use App\Http\Controllers\Footer\Footerslidercontroller;
use App\Models\Registration;

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

Route::get('/', function () {
    return view('frontend.Home.indexhome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::controller(Admincontroller::class)->group(function () {
        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'edit')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        // Route::get('/add/manager', 'Manager')->name('manager');
        // Route::post('/store/manager', 'AddManager')->name('add.manager');
        // Route::get('/index', 'Index')->name('index');
        // Route::get('/edit/manager/{id}', 'Editmanager')->name('edit.managerprofile');
        // Route::post('/update/manager', 'UpdateManager')->name('update.managerprofile');
        // Route::get('/delete/manager/{id}', 'deleteManager');
    });
});

Route::middleware(['auth'])->group(
    function () {

        Route::controller(Bannercontroller::class)->group(
            function () {
                Route::get('/banner', 'Banner')->name('banner');
                Route::post('/add/banner', 'Addbanner')->name('addbanner');
                Route::get('/edit/banner/{id}', 'EditBanner');
                Route::post('/Update/banner', 'UpdateBanner')->name('Updatebanner');
                Route::get('/delete/banner/{id}', 'DeleteBanner');
                //=================registration view=============
                Route::get('/view/registration', 'Viewregistration')->name('view.registration');
                Route::get('/get/registration/data/{id}', 'Viewdata')->name('get.registration');
                //====================contactus=================
                Route::get('/query/feedbacks', 'Feedback')->name('view.Feedbacks');
                Route::get('/view/feedbacks/{id}', 'Viewfeedback')->name('All.feedback');
            }
        );
    }
);
Route::middleware(['auth'])->group(
    function () {

        Route::controller(Footerslidercontroller::class)->group(
            function () {

                Route::get('/footerslider', 'Slider')->name('footer.slider');
                Route::post('/add/footerslider', 'Addslider')->name('footer.Addslider');
                Route::get('/edit/footerslider/{id}', 'Editslider')->name('footer.edit');
                Route::post('/update/footerslider', 'Updateslider')->name('footer.update');
                Route::get('/delete/footerslider/{id}', 'Deleteslider')->name('footer.delete');
            }
        );
    }
);
Route::middleware(['auth'])->group(
    function () {
        Route::controller(Ministercontroller::class)->group(
            function () {
                ///===================PM==========
                Route::get('/minister-details', 'Minister')->name('minister');
                Route::post('/add/minister-details', 'AddMinister')->name('addminister');
                Route::get('/edit/minister-details/{id}', 'EditMinister');
                Route::post('/update/minister-details', 'UpdateMinister')->name('updateminister');
                Route::get('/delete/minister-details/{id}', 'DeleteMinister');
            }
        );
    }
);
Route::middleware(['auth'])->group(
    function () {
        Route::controller(Imagecontroller::class)->group(
            function () {


                Route::get('/thumbnail', 'Thumbnail')->name('image.thumbnail');
                Route::post('/add/thumbnail', 'Addthumbnail')->name('image.addthumbnail');
                Route::get('/edit/thumbnail/{id}', 'Editthumbnail')->name('image.editthumbnail');
                Route::post('/update/thumbnail', 'Updatethumbnail')->name('image.update');
                Route::get('delete/thumbnail/{id}', 'Deletethumbnail');
                Route::get('/all/gallery/{id}', 'Allgallery');


                //=====================gallery image===============

                Route::get('/main/gallery/{id}', 'Maingallery')->name('main.gallery');
                Route::post('/add/gallery/', 'Addgallery')->name('add.gallery');
                Route::get('/edit/gallery/{id}', 'Editgallery')->name('edit.gallery');
                Route::get('/delete/gallery/{id}', 'DeleteGallery');

                //==============================Event Page=================
                Route::get('/view/event', 'Events')->name('event');
                Route::post('/enter/events', 'AddEvent')->name('add.events');
                Route::get('/edit/events/{id}', 'Editevents')->name('edit.events');
                Route::post('/update/event', 'Updateevent')->name('update.event');
                Route::get('/add/event-thumbnail/{id}', 'Eventthumbnail')->name('add.eventthumbnail');
                Route::get('/delete/eventgallery/{id}', 'DeleteEventGallery');
                Route::post('/add/event-thumbnail', 'Addeventthumbnail')->name('store.thumbnail');
                Route::get('/delete/events/{id}', 'Deleteevents');
            }
        );
    }
);

Route::middleware(['auth'])->group(
    function () {
        Route::controller(Servicecontroller::class)->group(
            function () {
                Route::get('/view/Services', 'Service')->name('services');
                Route::post('/add/Services', 'Addservices')->name('Addservices');
                Route::get('/edit/services/{id}', 'Editservices')->name('edit.services');
                Route::post('/update/services', 'Updateservices')->name('services.update');
                Route::get('/delete/services/{id}', 'Deleteservices')->name('service.delete');
            }
        );
    }
);

//===================cmconer image  ====================
Route::middleware(['auth'])->group(
    function () {
        Route::controller(Cmcontroller::class)->group(
            function () {
                Route::get('/view/cmcorner', 'Cmcorner')->name('Cmcorner');
                Route::post('/add/cmcorner', 'Addcmcorner')->name('Add.cmcorner');

                Route::get('/delete/cmcorner/{id}', 'Deletecmcorner')->name('delete.cmcorner');
            }
        );
    }
);

//=============frontend================

Route::controller(Homecontroller::class)->group(
    function () {
        Route::get('/', 'Visitors');
        Route::get('/Services', 'FrontService')->name('Front.service');
        Route::get('/registration', 'Registration')->name('registration');
        Route::post('/add/registration', 'Addregistration')->name('Add.registration');
        Route::get('/thankyou', 'Thankyou')->name('thankyou');


        //==========aboutus============
        Route::get('/aboutus', 'Aboutus')->name('home.aboutus');
        //=============contactus======
        Route::get('/contactus', 'Contactus')->name('home.contactus');
        Route::post('/add/contactus', 'Addcontactus')->name('home.Addcontactus');
        //===============gallery ==================
        Route::get('/gallery', 'Thumbnail')->name('home.thumbnail');
        Route::get('/gallery/{id}', 'Gallery')->name('home.gallery');
        //=====================event===========
        Route::get('/event', 'Events')->name('home.event');
        Route::get('/view-event/{id}', 'ViewEvent')->name('home.viewEvent');
    }

);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
