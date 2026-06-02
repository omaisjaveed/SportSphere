<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::group(['middleware' => ['install']], function () {

	//Webiste Routes
	Route::get('/', 'Website\WebsiteController@Home');
	Route::get('/AboutUs', 'Website\WebsiteController@About');
	Route::get('/services', 'Website\WebsiteController@services');
	Route::get('/trending', 'Website\WebsiteController@trending');
	Route::get('/coaching-plans', 'Website\WebsiteController@coaching_plans');
	Route::get('/merchandise', 'Website\WebsiteController@merchandise');
	Route::get('/muscle-mental', 'Website\WebsiteController@muscle_mental');
	Route::get('/contact-us', 'Website\WebsiteController@contact_us');
	Route::get('/testimonials', 'Website\WebsiteController@testimonials');
	Route::get('/privacy-policy', 'Website\WebsiteController@privacy_policy');
	Route::get('/terms-candition', 'Website\WebsiteController@terms_candition');
	Route::get('/the-shop', 'Website\WebsiteController@shop');
	Route::get('/product/{slug}', 'Website\WebsiteController@product');
	Route::get('/categories/{slug}', 'Website\WebsiteController@categories');
	Route::get('/brands/{slug?}', 'Website\WebsiteController@brands');
	Route::get('/tags/{slug}', 'Website\WebsiteController@tags');
	Route::get('/cart', 'Website\WebsiteController@cart');
	Route::get('/checkout', 'Website\WebsiteController@checkout');
	Route::post('/send_message', 'Website\WebsiteController@send_message');
	Route::post('/subscribe_newsletter', 'Website\WebsiteController@subscribe_newsletter');
	Route::match(['get', 'post'], '/sign_in', 'Website\CustomerController@sign_in');
	Route::match(['get', 'post'], '/sign_up', 'Website\CustomerController@sign_up');
	Route::post('/user/update-favorite-teams', 'Website\CustomerController@updateFavoriteTeams')->name('user.updateFavoriteTeams');
	Route::post('/user/update-profile', 'Website\CustomerController@updateProfile')->name('user.updateProfile');
	Route::post('/user/update-username', 'Website\CustomerController@updateUsername')->name('user.updateUsername');
	Route::post('/update-bio', 'Website\CustomerController@updateBio')->name('user.updateBio');
	Route::post('/update-location', 'Website\CustomerController@updateLocation')->name('user.updateLocation');

    

	Route::get('/sign_out', 'Website\CustomerController@sign_out');
	
// 	Route::get('/profile/posts/', 'Website\WebsiteController@posts');
	Route::get('/profile/notifications/', 'Website\WebsiteController@notifications');
	Route::get('/profile/messages/', 'Website\WebsiteController@messages');
	Route::get('/profile/settings/', 'Website\WebsiteController@settings');
	Route::get('/profile/premium/', 'Website\WebsiteController@premium');
	Route::get('/profile/edit-profile/', 'Website\WebsiteController@edit_profile');
	Route::get('/profile/favourite-teams/', 'Website\WebsiteController@favourite-teams');
	Route::post('/profile/become-verified/', 'Website\WebsiteController@become_verified')->name('become_verified');
	Route::post('/profile/become-premium/', 'Website\WebsiteController@become_premium')->name('become_premium');
	Route::get('/verified_user_payment/{user_id}', 'Website\CheckoutController@verified_user_payment');
	Route::get('/premium_user_payment/{user_id}', 'Website\CheckoutController@premium_user_payment');
	Route::post('/cancel-premium', 'Website\WebsiteController@cancel_premium')->name('cancel.premium');
	
	Route::get('/chat-rooms', 'Website\ChatRoomController@index')->name('chat.rooms.index');
    Route::post('/chat-rooms', 'Website\ChatRoomController@store')->name('chat.rooms.store');
    Route::get('/chat-rooms/{id}', 'Website\ChatRoomController@show')->name('chat.rooms.show');
    Route::delete('/chat-rooms/{id}','Website\ChatRoomController@destroy')->name('chat.rooms.destroy');
    Route::post('/chat-rooms/{chatRoom}/message', 'Website\MessageController@store')->name('chat.rooms.message');
    Route::get('/chat-rooms/{chatRoom}/messages', 'Website\MessageController@poll')->name('chat.rooms.poll');


    // post Route
    Route::post('/posts/store', 'Website\PostController@store')->name('posts.store');
    Route::get('/team-suggestions', 'Website\TeamController@suggest');
    Route::get('/profile/posts/', 'Website\PostController@index');
    Route::get('/team/{slug}/posts','Website\TeamController@showPosts')->name('team.posts');
    Route::get('/admin/posts', 'Website\PostController@admin_index')->name('admin.posts.index');
    Route::delete('/admin/posts/{post}', 'Website\PostController@destroy')->name('admin.posts.destroy');
    
    Route::post('/posts/{post}/like', 'Website\PostController@toggleLike');



    Route::get('/teams/create', 'Website\TeamController@create')->name('teams.create');
    Route::post('/teams/store', 'Website\TeamController@store')->name('teams.store');
    Route::get('/teams', 'Website\TeamController@index')->name('teams.index');
    
    // Teams Page Routes
    // Route::get('/buffalo-bills', 'Website\PostController@buffalo_bills');
    // Teams Page Routes

    // post Route




	//Need to login for View this page
	Route::group(['middleware' => ['verified']], function () {
		Route::get('/wish_list/{product_id?}', 'Website\WebsiteController@wish_list');
		Route::get('/remove_wishlist/{product_id?}', 'Website\WebsiteController@remove_wishlist');
		Route::get('/my_account/{page?}', 'Website\CustomerController@my_account');
		Route::get('/download_product/{product_id}', 'Website\CustomerController@download_product');
		Route::get('/order_details/{order_id}', 'Website\CustomerController@order_details');
		Route::post('/update_account', 'Website\CustomerController@update_account');
		Route::post('/update_password', 'Website\CustomerController@update_password');
		Route::match(['get', 'post'], '/add_new_address', 'Website\CustomerController@add_new_address');
		Route::match(['get', 'patch'], '/update_address/{address_id}', 'Website\CustomerController@update_address');
		Route::get('/delete_address/{address_id}', 'Website\CustomerController@delete_address');
		Route::post('comments/store', 'Website\CommentController@store')->name('comments.store');
		Route::post('reviews/store', 'Website\ReviewsController@store')->name('reviews.store');
	});


	//Apply Tax
	Route::get('/apply_tax/{shipping_state?}/{billing_state?}', 'Website\CheckoutController@apply_tax');
	Route::post('/make_order', 'Website\CheckoutController@make_order');
	Route::get('/payment/{order_id}', 'Website\CheckoutController@payment');

	//Get Variation Price
	Route::post('products/get_variation_price/{product_id}', 'ProductController@get_variation_price');

	//Add to Cart
	Route::post('/add_to_cart/{product_id}', 'Website\CartController@add_to_cart');
	Route::post('/update_cart', 'Website\CartController@update_cart');
	Route::post('/apply_coupon', 'Website\CartController@apply_coupon');
	Route::get('/remove_coupon/{name}', 'Website\CartController@remove_coupon');
	Route::get('/remove_cart_item/{id}', 'Website\CartController@remove_cart_item');
	Route::get('/shipping_method/{name}', 'Website\CartController@shipping_method');

	//Payment Gateways
	Route::get('gateway/paypal_payment_authorize/{paypal_order_id}/{order_id}', 'Website\GatewayController@paypal_payment_authorize');
	Route::post('gateway/stripe_payment_authorize/{user_id}', 'Website\GatewayController@stripe_payment_authorize');
	Route::post('gateway/razorpay_payment_authorize/{order_id}', 'Website\GatewayController@razorpay_payment_authorize');
	Route::get('gateway/paystack_payment_authorize/{order_id}/{reference}', 'Website\GatewayController@paystack_payment_authorize');
	Route::get('gateway/confirm_order/{type}/{order_id}', 'Website\GatewayController@confirm_order'); //This route is for manual payment


	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', function () {
			return redirect('admin/login');
		});
		Auth::routes(['verify' => true]);
	});

	Route::get('/logout', 'Auth\LoginController@logout');
	Route::get('/{slug?}', 'Website\WebsiteController@index');

	Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin'], function () {

		Route::get('dashboard', 'DashboardController@index')->middleware('groupPermission:admin,user,customer');

		//Profile Controller
		Route::get('profile/edit', 'ProfileController@edit')->middleware('groupPermission:admin,user');
		Route::post('profile/update', 'ProfileController@update')->middleware(['groupPermission:admin,user', 'demo']);
		Route::get('profile/change_password', 'ProfileController@change_password')->middleware('groupPermission:admin,user');
		Route::post('profile/update_password', 'ProfileController@update_password')->middleware(['groupPermission:admin,user', 'demo']);


		/** Admin Only Route **/
		Route::group(['middleware' => ['admin', 'demo']], function () {

			//User Management
			Route::resource('users', 'UserController');

			//User Roles
			Route::resource('roles', 'RoleController');

			//Permission Controller
			Route::get('permission/control/{user_id?}', 'PermissionController@index')->name('permission.index');
			Route::post('permission/store', 'PermissionController@store')->name('permission.store');


			//Language Controller
			Route::resource('languages', 'LanguageController');

			//Utility Controller
			Route::match(['get', 'post'], 'general_settings/{store?}', 'UtilityController@settings')->name('settings.update_settings');
			Route::match(['get', 'post'], 'theme_option/{page?}/{store?}', 'UtilityController@theme_option')->name('theme_option.update');
			Route::post('upload_logo', 'UtilityController@upload_logo')->name('settings.uplaod_logo');
			Route::get('database_backup_list', 'UtilityController@database_backup_list')->name('database_backups.list');
			Route::get('create_database_backup', 'UtilityController@create_database_backup')->name('database_backups.create');
			Route::delete('destroy_database_backup/{id}', 'UtilityController@destroy_database_backup');
			Route::get('download_database_backup/{id}', 'UtilityController@download_database_backup')->name('database_backups.download');
			Route::post('remove_cache', 'UtilityController@remove_cache')->name('settings.remove_cache');

			//Email Template
			Route::resource('email_templates', 'EmailTemplateController')->only([
				'index',
				'show',
				'edit',
				'update'
			]);

			//Shipping Methods
			Route::get('shipping_methods', 'UtilityController@shipping_methods')->name('settings.shipping_methods');
		});

		/** Dynamic Permission **/
		Route::group(['middleware' => ['permission', 'demo']], function () {

			Route::get('dashboard/total_sales_widget', 'DashboardController@total_sales_widget')->name('dashboard.total_sales_widget');
			Route::get('dashboard/current_day_sales_widget', 'DashboardController@current_day_sales_widget')->name('dashboard.current_day_sales_widget');
			Route::get('dashboard/pending_order_widget', 'DashboardController@pending_order_widget')->name('dashboard.pending_order_widget');
			Route::get('dashboard/total_product_widget', 'DashboardController@total_product_widget')->name('dashboard.total_product_widget');
			Route::get('dashboard/weekly_sales_widget', 'DashboardController@weekly_sales_widget')->name('dashboard.weekly_sales_widget');
			Route::get('dashboard/top_view_items_widget', 'DashboardController@top_view_items_widget')->name('dashboard.top_view_items_widget');
			Route::get('dashboard/recent_order_widget', 'DashboardController@recent_order_widget')->name('dashboard.recent_order_widget');

			//Media Controller
			Route::get('media/get_table_data/{type?}/{select_type?}', 'MediaController@get_table_data');
			Route::resource('media', 'MediaController')->except([
				'edit',
				'update'
			]);

			//Order Controller
			Route::get('orders/get_table_data', 'OrderController@get_table_data');
			Route::resource('orders', 'OrderController')->except([
				'create',
				'store',
				'edit'
			]);

			//Transaction Controller
			Route::get('transactions/get_table_data', 'TransactionController@get_table_data');
			Route::get('transactions', 'TransactionController@index')->name('transactions.index');

			//Product Controller
			Route::post('products/generate_variations', 'ProductController@generate_variations');
			Route::get('products/get_table_data', 'ProductController@get_table_data');
			Route::resource('products', 'ProductController');

			//Comments Controller
			Route::get('product_comments/get_table_data', 'CommentController@get_table_data');
			Route::get('product_comments/destroy/{id}', 'CommentController@destroy')->name('product_comments.destroy');
			Route::resource('product_comments', 'CommentController')->only([
				'index',
				'show'
			]);

			//Reviews Controller
			Route::get('product_reviews/get_table_data', 'ReviewsController@get_table_data');
			Route::post('product_reviews/bulk_action', 'ReviewsController@bulk_action')->name('product_reviews.bulk_action');
			Route::resource('product_reviews', 'ReviewsController')->except([
				'create',
				'store',
			]);

			//Category Controller
			Route::resource('category', 'CategoryController');

			//Brand Controller
			Route::resource('brands', 'BrandController');

			//Tag Controller
			Route::resource('tags', 'TagController');

			// Services
			// Route::get('/service', 'ServiceController@service')->name('service');
			Route::get('/service', [ServiceController::class, 'index'])->name('service');
			Route::get('/services/create', [ServiceController::class, 'create'])->name('backend.services.create');
			Route::post('/services', [ServiceController::class, 'store'])->name('backend.services.store');
			Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('backend.services.edit');
			Route::patch('/services/{id}', [ServiceController::class, 'update'])->name('backend.services.update');
			Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('backend.services.destroy');
			Route::get('/create', 'ServiceController@create')->name('create');

			// Testimonials routes 
        	Route::get('testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
        	Route::get('testimonials/create', [TestimonialsController::class, 'create'])->name('testimonials.create');
        	Route::post('testimonials/store', [TestimonialsController::class, 'store'])->name('testimonials.store');
        	Route::delete('testimonials/{testimonials}', [TestimonialsController::class, 'delete'])->name('testimonials.delete');
        	Route::get('testimonials/edit/{id}', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
        	Route::post('testimonials/update/{id}', [TestimonialsController::class, 'update'])->name('testimonials.update');
        	Route::get('/testimonials_detail/{id}', [TestimonialsController::class,'testimonials_detail'])->name('testimonials_detail');


			//Coupon Controller
			Route::resource('coupons', 'CouponController');

			//Customer Controller
			Route::resource('customers', 'CustomerController');

			//Currency Controller
			Route::resource('currency', 'CurrencyController');

			//Tax Vontroller
			Route::get('taxes/get_states/{country_id}', 'TaxController@get_states');
			Route::resource('taxes', 'TaxController');

			//Page Controller
			Route::resource('pages', 'PageController');

			//Navigation Controller
			Route::resource('navigations', 'NavigationController');
			Route::post('navigations/store_sorting', 'NavigationController@store_sorting');
			Route::get('navigation_items/{navigation_id}/create', 'NavigationItemController@create')->name('navigation_items.create');
			Route::post('navigation_items/store/{navigation_id}', 'NavigationItemController@store')->name('navigation_items.store');
			Route::get('navigation_items/edit/{id}', 'NavigationItemController@edit')->name('navigation_items.edit');
			Route::patch('navigation_items/update/{id}', 'NavigationItemController@update')->name('navigation_items.update');
			Route::get('navigation_items/destroy/{id}', 'NavigationItemController@destroy')->name('navigation_items.destroy');

			//Reports Controller
			Route::match(['get', 'post'], 'reports/order_report', 'ReportController@order_report')->name('reports.order_report');
			Route::match(['get', 'post'], 'reports/sales_report', 'ReportController@sales_report')->name('reports.sales_report');
			Route::match(['get', 'post'], 'reports/product_sales_report', 'ReportController@product_sales_report')->name('reports.product_sales_report');
			Route::match(['get', 'post'], 'reports/product_stock_report', 'ReportController@product_stock_report')->name('reports.product_stock_report');
			Route::match(['get', 'post'], 'reports/coupons_report', 'ReportController@coupons_report')->name('reports.coupons_report');
			Route::match(['get', 'post'], 'reports/tax_report', 'ReportController@tax_report')->name('reports.tax_report');
			Route::match(['get', 'post'], 'reports/shipping_report', 'ReportController@shipping_report')->name('reports.shipping_report');
			Route::match(['get', 'post'], 'reports/product_views_report', 'ReportController@product_views_report')->name('reports.product_views_report');
		});
	});
});

//Socila Login
Route::get('/login/{provider}', 'Auth\SocialController@redirect');
Route::get('/login/{provider}/callback', 'Auth\SocialController@callback');

//Get State By Country
Route::get('get_states/{country_id}', 'Website\WebsiteController@get_states');

//Search Products Route
Route::get('shop/search_products', 'Website\WebsiteController@search_products')->name('shop.search');

//Ajax Select2 Controller
Route::get('ajax/get_table_data', 'Select2Controller@get_table_data');

//Change Language
Route::get('select_language/{language}', 'UtilityController@select_language');

Route::get('installation/start', 'Install\InstallController@index');
Route::get('install/database', 'Install\InstallController@database');
Route::post('install/process_install', 'Install\InstallController@process_install');
Route::get('install/create_user', 'Install\InstallController@create_user');
Route::post('install/store_user', 'Install\InstallController@store_user');
Route::get('install/system_settings', 'Install\InstallController@system_settings');
Route::post('install/finish', 'Install\InstallController@final_touch');

//Update System
Route::get('migration/update', 'Install\UpdateController@update_migration');
