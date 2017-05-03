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

Route::get('/' ,[
    	'uses' => 'UserController@welcome',
		'as' => 'welcome'
])->middleware('auth');

Route::get('/home', function(){
    return view('welcome');
})->name('home');

/*advise*/
Route::get('/advicewelcome', function(){
    return view('advise');
})->name('advicewelcome');

Route::get('/planswelcome', function(){
    return view('plans');
})->name('planswelcome');

Route::get('/auctionwelcome', function(){
    return view('auction');
})->name('auctionwelcome');


Route::get('/viewer', function () {
    return view('viewer');
})->name('pdf');

/*returns the login view*/
Route::get('/loginView', function(){
	return view('loginView');
})->name('loginView');

/*login to the system*/
Route::post('/login', [
    'uses' => 'UserController@logIn',
    'as' => 'login'
]);

Route::get('/registerView', function(){
	return view('registerView');
})->name('registerView');

Route::get('/forgotEmail', function(){
	return view('forgotEmail');
})->name('forgotEmail');


Route::post('/Dashboard', [
    	'uses' => 'UserController@adminSignIn',
		'as' => 'adminSignIn'
		]);

Route::post('/emailCheck', [
    	'uses' => 'UserController@emailCheck',
		'as' => 'emailCheck'
		]);

		
Route::get('/signout', [
		'uses' => 'UserController@signout',
		'as' => 'signout'
		]);
		
Route::post('/changePass', [
		'uses' => 'UserController@changePass',
		'as' => 'changePass'
		]);	
				
Route::post('/changeName', [
		'uses' => 'UserController@changeName',
		'as' => 'changeName'
		]);	

Route::post('/addImage', [
    	'uses' => 'UserController@addImage',
		'as' =>'addImage'
		]);

Route::get('/verifyMail/{data?}',[
    'uses' => 'UserController@verifyMail',
    'as' => 'verifyMail',
	'middleware' => 'email'
	]);

Route::get('/pay', function(){
    return view('paywithpaypal');
})->name('pay');

	///////////////////////////////////////////////
Route::get('/forgotPass', function(){
		return view('forgotPass');
		})->name('forgotPass');



Route::post('/forgot', [
		'uses' => 'UserController@forgot',
		'as' => 'forgot'
		]);

Route::get('/forgotPassword/{data?}',[
    'uses' => 'UserController@forgotPassword',
    'as' => 'forgotPassword',
	'middleware' => 'email'
	]);

Route::post('/forgotFinal', [
		'uses' => 'UserController@forgotFinal',
		'as' => 'forgotFinal'
		]);	


////////////////////////////////Admin Routes//////////////////////////////////////////////////////
Route::get('firstlogin', [
    'uses' => 'UserController@firstlogin',
    'as' => 'firstlogin'
])->middleware('auth');

Route::get('/admindashboard',function(){
   return view('admin/admindashboard');
})->name('admindashboard')->middleware('auth');
/*
display Add money lender interface
*/
Route::get('/lenderAdd', function(){
    return view('admin/lenderAdd');
})->name('lenderAdd')->middleware('auth');

/*
display Add city interface
*/
Route::get('/addCity', function(){
    return view('admin/addCity');
})->name('addCity')->middleware('auth');

Route::get('/message', function(){
    return view('admin/message');
})->name('message')->middleware('auth');

/*
display Add Advisor interface
*/
//Route::get('/advisorAdd', function(){
 //   return view('advisorAdd');
//})->name('advisorAdd');

/*
display Add Auction interface
*/
Route::get('/addAuction', function(){
    return view('admin/addAuction');
})->name('addAuction')->middleware('auth');

/*
direct to get advisor details via usercontrooler
*/
Route::get('/getAdvisor',[
    'uses' => 'AdminController@getAdvisor',
    'as' => 'getAdvisor'
])->middleware('auth');

/*
direct to get Money Lender details via usercontrooler
*/
Route::get('/getLender',[
    'uses' => 'AdminController@getLender',
    'as' => 'getLender'
])->middleware('auth');

/*
direct to edit advisor details via usercontrooler
*/
Route::get('/editUser/{id}', [
    'uses' => 'AdminController@editUser',
    'as' => 'editUser'
])->middleware('auth');
/*
direct to edit Lender details via usercontrooler
*/
Route::get('/editLender/{id}', [
    'uses' => 'AdminController@editLender',
    'as' => 'editLender'
])->middleware('auth');

/*
save Advisor details to the database
*/
Route::post('/savelegal', [
		'uses' => 'AdminController@savelegal',
		'as' => 'savelegal'
		])->middleware('auth');

/*
save money lender details to the database
*/
Route::post('/savelender', [
    'uses' => 'AdminController@savelender',
    'as' => 'savelender'
])->middleware('auth');

/*
save city details to the database
*/
Route::post('/saveCity', [
    'uses' => 'AdminController@saveCity',
    'as' => 'saveCity'
])->middleware('auth');

Route::post('/sendEdit', [
    'uses' => 'AdminController@sendEdit',
    'as' => 'sendEdit'
])->middleware('auth');

Route::post('/sendLender', [
    'uses' => 'AdminController@sendLender',
    'as' => 'sendLender'
])->middleware('auth');

Route::post('/sendMessage', [
    'uses' => 'AdminController@sendMessage',
    'as' => 'sendMessage'
])->middleware('auth');

Route::post('/saveAuction', [
    'uses' => 'AdminController@saveAuction',
    'as' => 'saveAuction'
])->middleware('auth');

/**
 * ************************************Seller Routes
 */

/**
 * seller login
 */
Route::get('/loginSeller', function(){
    return view('seller/loginSeller');
})->name('loginSeller');

/**
 * seller Register view
 */
Route::get('/registerSeller', function(){
    return view('seller/registerSeller');
})->name('registerSeller');

/**
 * seller Registering
 */
Route::post('/sellerRegister', [
    'uses' => 'SellerController@sellerRegister',
    'as' => 'sellerRegister'
]);

/**
 * Return seller view
 */
Route::get('/sellerdashboard', function(){
    return view('seller/sellerdashboard');
})->name('sellerdashboard')->middleware('auth');

/**
 * Return view add property
 */
/*Route::get('/addproperty', function(){
    return view('seller/property');
})->name('addproperty')->middleware('auth');
*/
Route::get('/addproperty',[
    'uses' => 'SellerController@Plans',
    'as' => 'addproperty'
])->middleware('auth');


Route::get('/advertisements', function(){
    return view('seller/advertisements');
})->name('advertisements')->middleware('auth');

Route::get('/myadvertisement/{id}',[
    'uses' => 'SellerController@getHouseData',
    'as' => 'myadvertisement'
])->middleware('auth');

Route::get('/guestView', function(){
    return view('advertisedProperty');
})->name('guestView');

Route::get('/search', function(){
    return view('seller/search');
})->name('search');

/*
 * post property details to the database*/
Route::post('/saveproperty', [
    'uses' => 'SellerController@saveProperty',
    'as' => 'saveproperty'
])->middleware('auth');

/*
 * view legal adviosrs*/
Route::get('/viewlegaladvisors', [
    'uses'=>'SellerController@viewlegaladvisors',
    'as'=>'viewlegaladvisors'
])->middleware('auth');

/*
 *view advisor details */
Route::get('/viewadvisor/{id}', [
    'uses' => 'SellerController@getAdvisorData',
    'as' => 'viewadvisor'
])->middleware('auth');

/*
 * view my advertisements
 * */
Route::get('/myadvertisements', [
    'uses'=>'SellerController@viewadvertisements',
    'as'=>'advertisements'
])->middleware('auth');

/*edit properties*/
Route::get('/editadvertisements/{id}', [
    'uses' => 'SellerController@editProperty',
    'as' => 'edit'
])->middleware('auth');

Route::post('/updateproperty', [
    'uses' => 'SellerController@updateProperty',
    'as' => 'updatep'
]);

/*get all the auction data*/
Route::get('/auctions', [
    'uses'=>'SellerController@addAuctions',
    'as'=>'auctions'
])->middleware('auth');

/*get single auction*/
Route::get('/auction/{id}',[
    'uses' => 'Sellercontroller@getAnAuction',
    'as' => 'anauction'
]);

/////////////////////////////////////////////////

/*post ajax city */
Route::post('/cityfinder', [
    'uses' => 'UserController@cityFinder',
    'as' => 'cityfinder'
]);

Route::get('/messagereq', [
    'uses' => 'SellerController@messageRequest',
    'as' => 'messagereq'
]);

Route::get('/messageAll', [
    'uses' => 'SellerController@messageAll',
    'as' => 'messageall'
]);

/*general home search  for buyers and sellers*/
Route::post('/searchHome', [
    'uses' => 'UserController@searchHome',
    'as' => 'searchHome'
]);
/*general search result display for buyers and sellers*/
Route::get('/mysearchresult/{id}',[
    'uses' => 'Usercontroller@getHouseData',
    'as' => 'mysearchresult'
]);

/*view financial plans*/
Route::get('/plans', [
    'uses'=>'UserController@Plans',
    'as'=>'plans'
])->middleware('auth');

/*view financial plan*/
Route::get('/plandetail/{id}',[
    'uses' => 'UserController@FinancialDetails',
    'as' => 'plandetail'
])->middleware('auth');

/*rate lernder*/
Route::get('/rate/{id}',[
    'uses' => 'UserController@RateLender',
    'as' => 'ratelender'
])->middleware('auth');

Route::post('/saverateLender', [
    'uses' => 'UserController@saveRateLender',
    'as' => 'saverateLender'
])->middleware('auth');

/* buyer get single auction**/
Route::get('/auctionbuyer/{id}',[
    'uses' => 'Buyercontroller@getAnAuction',
    'as' => 'anbuyerauction'
]);


////////////////////////buyer action///////////////////////////////////

Route::get('/buyerdashboard', function(){
    return view('buyer/buyerdashboard');
})->name('buyerdashboard')->middleware('auth');

/*
 * view legal adviosrs*/
Route::get('/advisors', [
    'uses'=>'BuyerController@viewlegaladviosrs',
    'as'=>'buyerlegaladvisors'
])->middleware('auth');

/*view the advisor*/
Route::get('/viewadvisor/{id}', [
    'uses' => 'BuyerController@getAdvisorData',
    'as' => 'viewadvisor'
])->middleware('auth');


Route::get('/buyerauctions', [
    'uses'=>'BuyerController@addAuctions',
    'as'=>'buyerauctions'
])->middleware('auth');

///////////////////////////////////////////////////////////////////
Route::get('/contact', function(){
    return view('contact');
})->name('contactus');




///////////////////////////////////////////////////////
Route::get('/lenderdashboard', function(){
    return view('lender/lenderdashboard');
})->name('lenderdashboard')->middleware('auth');



Route::get('/myplans', [
    'uses'=>'LenderController@myPlans',
    'as'=>'myplans'
])->middleware('auth');

Route::get('/addplans', function(){
    return view('lender/addplan');
})->name('addplans')->middleware('auth');

/*save financial plans in the database*/
Route::post('/saveFinancialPlan', [
    'uses' => 'LenderController@savePlan',
    'as' => 'savePlan'
])->middleware('auth');

/*get specific financial plan*/
Route::get('/fplandetail/{id}',[
    'uses' => 'LenderController@FinancialDetails',
    'as' => 'fplandetail'
])->middleware('auth');

	
Route::get('paypalmessage', array('as' => 'paypalmessage','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('addmoney/paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('addmoney/paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));