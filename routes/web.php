<?php

use Illuminate\Support\Facades\Route;

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

// page dynamic
Route::group(['prefix' => 'acy'], function(){
  Route::get('/{name}',[App\Http\Controllers\ui\MainController::class,'index']);
});


 Route::get('/p', function () {
    phpinfo(); 
})->name('phpmyinfo');

Route::any('/contact-store', [App\Http\Controllers\ContactController::Class, 'stores'])->name('contactstore');
Route::any('/enuire-store', [App\Http\Controllers\ContactController::Class, 'enqstores'])->name('enquirestore');


Route::get('/c',function(){
   Artisan::call('cache:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   Artisan::call('route:clear');
   dd('clear');
});


Route::get('/',function(){
   return view('ui.index');
});

Route::get('/about-us',function(){
   return view('ui.about');
});

Route::get('/dining',function(){
   return view('ui.dining');
});


Route::get('/accommodations',function(){
   return view('ui.accommodations');
});

Route::get('/eventbanquet',function(){
   return view('ui.eventbanquet');
});

Route::get('/specialoffers',function(){
   return view('ui.specialoffers');
});

Route::get('/gallery',function(){
   return view('ui.gallery');
});


Route::get('/blog',function(){
   return view('ui.blog');
});

Route::get('/contact',function(){
   return view('ui.contact');
});



//   Accomodation Detail Page

   Route::get('/accommodation/detail/{slug?}',[App\Http\Controllers\AccommodationController::class,'accommodationDetail'])->name('accommodation.detail');

// Route::get('/projects/{property_type}',[App\Http\Controllers\ui\MainController::class,'index']); 


Route::post('/contact',[App\Http\Controllers\ui\MainController::class,'contact'])->name('contact'); 
 
Route::get('/landing',function(){
    return view('ui.landing');
 });
 Route::get('/landing2',function(){
   return view('ui.landing2');
});





Route::view('/tools','ui.new-pages.tools');
Route::view('/nri','ui.new-pages.nri-corner');
Route::view('/404','ui.404');
Route::view('/sitemap','ui.sitemap');



 

//  // admin route

Auth::routes();

Route::get('/User-Register', [App\Http\Controllers\Auth\RegisterController::class, 'userRegister'])->name('user.register');
Route::post('/User-Register-store', [App\Http\Controllers\Auth\RegisterController::class, 'userRegisterStore'])->name('register.store');
Route::get('/User-Register-resend/resend/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'VerifiyOTPsend'])->name('register.resend');
Route::post('/User-Register-verfiy', [App\Http\Controllers\Auth\RegisterController::class, 'RegisterVerifiyOTP'])->name('register.verify');
Route::post('/User-Register-redirect-deshboard', [App\Http\Controllers\Auth\RegisterController::class, 'userRedirectDeshboard'])->name('register.redirect');
Route::get('/User-forget/password/view/{id?}', [App\Http\Controllers\Auth\RegisterController::class, 'forgetpassword'])->name('forgetpassword.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');

Route::group(['middleware'=>'is_admin','prefix'=>'home/admin/covent'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('/menu',App\Http\Controllers\MenuController::class);
    Route::get('/menu-add',[App\Http\Controllers\MenuController::class,'add'])->name('menu');
    Route::get('/menuget',[App\Http\Controllers\MenuController::class,'menuget']);
   
    //Homepage route
    Route::resource('/homepage',App\Http\Controllers\HomePageController::class);
    Route::get('/homepage-add/{id?}',[App\Http\Controllers\HomePageController::class,'addEdit'])->name('homepage.addEdit');
    Route::post('/homepage-store',[App\Http\Controllers\HomePageController::class,'store'])->name('homepage.store');
    Route::delete('/homepage-delete/{id?}',[App\Http\Controllers\HomePageController::class,'homepagedestroy'])->name('homepagedestroy');


//  specialoffers

    Route::resource('/specialoffers',App\Http\Controllers\SpecialoffercController::class);
    Route::get('/specialoffers-add',[App\Http\Controllers\SpecialoffercController::class,'add'])->name('specialoffers.add');
    Route::post('/specialoffers-banner',[App\Http\Controllers\SpecialoffercController::class,'store'])->name('specialoffers.store');
    Route::get('/editspecialoffers/{id?}',[App\Http\Controllers\SpecialoffercController::class,'edit'])->name('specialoffers.edit');
    

   //  All Banners

   Route::resource('/allbanners',App\Http\Controllers\BigbannersController::class);
   Route::get('/allbanners-add',[App\Http\Controllers\BigbannersController::class,'add'])->name('allbanners.add');
   Route::post('/allbanners-banner',[App\Http\Controllers\BigbannersController::class,'store'])->name('allbanners.store');
   Route::get('/editallbanners/{id?}',[App\Http\Controllers\BigbannersController::class,'edit'])->name('allbanners.edit');

      //  About Page 

      Route::resource('/aboutpage',App\Http\Controllers\AboutController::class);
      Route::get('/aboutpage-add',[App\Http\Controllers\AboutController::class,'add'])->name('aboutpage.add');
      Route::post('/aboutpage-banner',[App\Http\Controllers\AboutController::class,'store'])->name('aboutpage.store');
      Route::get('/editaboutpage/{id?}',[App\Http\Controllers\AboutController::class,'edit'])->name('aboutpage.edit');
      
     
      //  About Location 

      Route::resource('/aboutlocation',App\Http\Controllers\AboutlocationController::class);
      Route::get('/aboutlocation-add',[App\Http\Controllers\AboutlocationController::class,'add'])->name('aboutlocation.add');
      Route::post('/aboutlocation-banner',[App\Http\Controllers\AboutlocationController::class,'store'])->name('aboutlocation.store');
      Route::get('/editaboutlocation/{id?}',[App\Http\Controllers\AboutlocationController::class,'edit'])->name('aboutlocation.edit');
      Route::delete('/aboutlocation-delete/{id?}',[App\Http\Controllers\AboutlocationController::class,'destroy'])->name('aboutlocation.destroy');
      Route::any('/loca-tion/{id?}',[App\Http\Controllers\AboutlocationController::class,'popups'])->name('popup');
   
   
      // Accommodations 
   Route::resource('/accommodation',App\Http\Controllers\AccommodationController::class);
   Route::get('/accommodation-add',[App\Http\Controllers\AccommodationController::class,'add'])->name('accommodation.add');
   Route::post('/accommodation-store',[App\Http\Controllers\AccommodationController::class,'store'])->name('accommodation.store');
   Route::get('/editaccommodation/{id?}',[App\Http\Controllers\AccommodationController::class,'edit'])->name('accommodation.edit');
   Route::delete('/editaccommodation-delete/{id?}',[App\Http\Controllers\AccommodationController::class,'destroy'])->name('accommodation.destroy');
   


      // Events and Banquets 
      Route::resource('/eventbanquet',App\Http\Controllers\EventsController::class);
      Route::get('/eventbanquet-add',[App\Http\Controllers\EventsController::class,'add'])->name('eventbanquet.add');
      Route::post('/eventbanquet-store',[App\Http\Controllers\EventsController::class,'store'])->name('eventbanquet.store');
      Route::get('/editeventbanquet/{id?}',[App\Http\Controllers\EventsController::class,'edit'])->name('eventbanquet.edit');
      Route::delete('/eventbanquet-delete/{id?}',[App\Http\Controllers\EventsController::class,'destroy'])->name('eventbanquet.destroy');



// Meta

   Route::resource('/meta',App\Http\Controllers\MetasController::class);
   Route::get('/meta-add',[App\Http\Controllers\MetasController::class,'add'])->name('meta.add');
   Route::post('/meta-footer',[App\Http\Controllers\MetasController::class,'store'])->name('meta.store');
   Route::get('/editmeta/{id?}',[App\Http\Controllers\MetasController::class,'edit'])->name('meta.edit');




   //  Banner

   Route::resource('/banner',App\Http\Controllers\BannersController::class);
   Route::get('/banner-add',[App\Http\Controllers\BannersController::class,'add'])->name('banner.add');
   Route::post('/store-banner',[App\Http\Controllers\BannersController::class,'store'])->name('store.banner');
   Route::get('/editbanner/{id?}',[App\Http\Controllers\BannersController::class,'edit'])->name('banner.edit');
   Route::delete('/deletebanner/{id?}',[App\Http\Controllers\BannersController::class,'destroy'])->name('banner.delete');


   // Gallery

   Route::resource('/gallery',App\Http\Controllers\GalleryController::class);
   Route::get('/gallery-add',[App\Http\Controllers\GalleryController::class,'add'])->name('gallery.add');
   Route::post('/gallery-banner',[App\Http\Controllers\GalleryController::class,'store'])->name('store.gallery');
   Route::get('/editgallery/{id?}',[App\Http\Controllers\GalleryController::class,'edit'])->name('gallery.edit');
   Route::delete('/deletegallery/{id?}',[App\Http\Controllers\GalleryController::class,'destroy'])->name('gallery.delete');

//   Menu Add

     Route::resource('/menu',App\Http\Controllers\MenusController::class);
     Route::get('/menu-add',[App\Http\Controllers\MenusController::class,'add'])->name('menu.add');
     Route::post('/store-menu',[App\Http\Controllers\MenusController::class,'store'])->name('menu.store');
     Route::get('/editmenu/{id?}',[App\Http\Controllers\MenusController::class,'edit'])->name('menu.edit');
     Route::delete('/deletemenu/{id?}',[App\Http\Controllers\MenusController::class,'destroy'])->name('menu.delete');


//  Submenu Add

      Route::resource('/submenu',App\Http\Controllers\SubmenuController::class);
      Route::get('/submenu-add',[App\Http\Controllers\SubmenuController::class,'add'])->name('submenu.add');
      Route::post('/store-submenu',[App\Http\Controllers\SubmenuController::class,'store'])->name('submenu.store');
      Route::get('/editsubmenu/{id?}',[App\Http\Controllers\SubmenuController::class,'edit'])->name('submenu.edit');
      Route::delete('/deletesubmenu/{id?}',[App\Http\Controllers\SubmenuController::class,'destroy'])->name('submenu.delete');
  
//   pagedetails page

    Route::resource('/pagedetails',App\Http\Controllers\PagedetailsController::class);
    Route::get('/pagedetails-add',[App\Http\Controllers\PagedetailsController::class,'add'])->name('pagedetails.add');
    Route::get('/pagedetailindex/{id?}',[App\Http\Controllers\PagedetailsController::class,'pagedetailindex'])->name('pagedetailindex');
    Route::post('/store-pagedetail',[App\Http\Controllers\PagedetailsController::class,'store'])->name('pagedetail.store');
    Route::delete('/deletepagedetails/{id?}',[App\Http\Controllers\PagedetailsController::class,'destroy'])->name('pagedetails.delete');
    Route::get('/editpagedetails/{id?}',[App\Http\Controllers\PagedetailsController::class,'edit'])->name('pagedetails.edit');



   //  Blog 

      Route::resource('/blog',App\Http\Controllers\BlogController::class);
      Route::get('/blog-add',[App\Http\Controllers\BlogController::class,'add'])->name('blog.add');
      Route::post('/store-blog',[App\Http\Controllers\BlogController::class,'store'])->name('blog.store');
      Route::get('/editblog/{id?}',[App\Http\Controllers\BlogController::class,'edit'])->name('blog.edit');
      Route::delete('/deleteblog/{id?}',[App\Http\Controllers\BlogController::class,'destroy'])->name('blog.delete');
      Route::any('/blogdetail/{id?}',[App\Http\Controllers\BlogController::class,'blogdetail'])->name('blogdetail');


   //   Home Heading

      Route::resource('/homeheading',App\Http\Controllers\HomeheadingController::class);
      Route::get('/homeheading-add',[App\Http\Controllers\HomeheadingController::class,'add'])->name('homeheading.add');
      Route::post('/store-homeheading',[App\Http\Controllers\HomeheadingController::class,'store'])->name('homeheading.store');
      Route::get('/edithomeheading/{id?}',[App\Http\Controllers\HomeheadingController::class,'edit'])->name('homeheading.edit');



   //  Testimonial
    
      Route::resource('/testimonial',App\Http\Controllers\TestimonialController::class);
      Route::get('/testimonial-add',[App\Http\Controllers\TestimonialController::class,'add'])->name('testimonial.add');
      Route::post('/store-testimonial',[App\Http\Controllers\TestimonialController::class,'store'])->name('testimonial.store');
      Route::get('/edittestimonial/{id?}',[App\Http\Controllers\TestimonialController::class,'edit'])->name('testimonial.edit');
      Route::delete('/deletetestimonial/{id?}',[App\Http\Controllers\TestimonialController::class,'destroy'])->name('testimonial.delete');


   // Services

   Route::resource('/service',App\Http\Controllers\ServicesController::class);
   Route::get('/service-add',[App\Http\Controllers\ServicesController::class,'add'])->name('service.add');
   Route::post('/store-service',[App\Http\Controllers\ServicesController::class,'store'])->name('service.store');
   Route::get('/editservice/{id?}',[App\Http\Controllers\ServicesController::class,'edit'])->name('service.edit');
   Route::delete('/deleteservice/{id?}',[App\Http\Controllers\ServicesController::class,'destroy'])->name('service.delete');

  
   // route news
    Route::resource('/news',App\Http\Controllers\NewsController::class);
    Route::get('/news-add',[App\Http\Controllers\NewsController::class,'add'])->name('newsadd');




   
    //  contact
    Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
    Route::get('/contacts/{page}',[App\Http\Controllers\ContactController::class,'show'])->name('contact.show');
    Route::get('/contact-del/{id}',[App\Http\Controllers\ContactController::class,'destroy'])->name('contact.destroy');

    
   //  newsletter
   Route::get('/newsletter',[App\Http\Controllers\NewsLetterController::class,'index'])->name('newsletter.index');
   Route::get('/newsletter-del/{id}',[App\Http\Controllers\NewsLetterController::class,'destroy'])->name('newsletter.destroy');

   Route::get('/formdata',function(){
      return view('admin.formdata.formdata');
    })->name('formdata');

    Route::get('/facebookduplicated',function(){
      return view('admin.facebook.facebookduplicated');
   });
   
   Route::get('/facebookfailed',function(){
      return view('admin.facebook.facebookfailed');
   });
   
   Route::get('/facebookinserted',function(){
      return view('admin.facebook.facebookinserted');
   });

});


 