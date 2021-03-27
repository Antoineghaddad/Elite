<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users' , 'UserController@userinfo');
Route::get('/currentt' , 'UserController@profile');
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::post('/logout', 'UserController@logout');
Route::post('/admin-register', 'AdminAuthController@register');
Route::post('/admin-login', 'AdminAuthController@login');
Route::post('/admin-logout', 'AdminAuthController@logout');
Route::match(['post' , 'put'] , '/admin-password/{id}' , 'AdminAuthController@updatePassword');
Route::resource('/admins' , 'AdminController');
Route::resource('/home' , 'HomeController');
Route::resource('/reviews' , 'ReviewController');
Route::resource('/contact' , 'ContactController');
Route::resource('/salon' , 'SalonController');
Route::resource('/therapist' , 'TherapistController');
Route::resource('/trainer' , 'TrainerController');
Route::resource('/massager' , 'MassagerController');
Route::resource('massage' , 'MassageController');
Route::resource('therapy' , 'TherapyController');
Route::resource('workout' , 'WorkoutController');
Route::resource('products' , 'ProductsController');
Route::resource('calendar-booking' , 'CalendarController');
Route::get('reviews-count5' , 'ReviewsCountController@countOf5');
Route::get('reviews-count4' , 'ReviewsCountController@countOf4');
Route::get('reviews-count3' , 'ReviewsCountController@countOf3');
Route::get('reviews-count2' , 'ReviewsCountController@countOf2');
Route::get('reviews-count1' , 'ReviewsCountController@countOf1');
Route::get('workout-fitness-count' , 'WorkoutCountController@fitnessCount');
Route::get('workout-weights-count' , 'WorkoutCountController@weightsCount');
Route::resource('user-products' , 'UserProductsController');
Route::resource('user-massage' , 'UserMassageController');
Route::resource('workout-user' , 'UserWorkoutController');
Route::resource('user-therapy' , 'UserTherapyController');
Route::resource('coupon' , 'CouponController');
Route::resource('challenge' , 'ChallengeController');
Route::get('category1' , 'CategoryCountController@category1');
Route::get('category2' , 'CategoryCountController@category2');
Route::get('category3' , 'CategoryCountController@category3');
Route::get('category4' , 'CategoryCountController@category4');
Route::get('category5' , 'CategoryCountController@category5');
Route::get('category6' , 'CategoryCountController@category6');
Route::get('category7' , 'CategoryCountController@category7');
Route::get('yoga1' , 'YogaCountController@yoga1');
Route::get('yoga2' , 'YogaCountController@yoga2');
Route::get('yoga3' , 'YogaCountController@yoga3');
Route::get('yoga4' , 'YogaCountController@yoga4');
Route::get('weight-workout' , 'WorkoutCountController@weightsCount1');
Route::get('fitness-workout' , 'WorkoutCountController@fitnessCount1');

Route::get('monday' , 'UserTimeController@monday');
Route::get('tuesday' , 'UserTimeController@tuesday');
Route::get('wednesday' , 'UserTimeController@wednesday');
Route::get('thursday' , 'UserTimeController@thursday');
Route::get('friday' , 'UserTimeController@friday');
Route::get('saturday' , 'UserTimeController@saturday');
Route::get('sunday' , 'UserTimeController@sunday');

Route::get('monday-massage' , 'MassageTimeController@monday');
Route::get('tuesday-massage' , 'MassageTimeController@tuesday');
Route::get('wednesday-massage' , 'MassageTimeController@wednesday');
Route::get('thursday-massage' , 'MassageTimeController@thursday');
Route::get('friday-massage' , 'MassageTimeController@friday');
Route::get('saturday-massage' , 'MassageTimeController@saturday');
Route::get('sunday-massage' , 'MassageTimeController@sunday');

Route::get('monday-therapy' , 'TherapyTimeController@monday');
Route::get('tuesday-therapy' , 'TherapyTimeController@tuesday');
Route::get('wednesday-therapy' , 'TherapyTimeController@wednesday');
Route::get('thursday-therapy' , 'TherapyTimeController@thursday');
Route::get('friday-therapy' , 'TherapyTimeController@friday');
Route::get('saturday-therapy' , 'TherapyTimeController@saturday');
Route::get('sunday-therapy' , 'TherapyTimeController@sunday');
Route::resource('user-salon' , 'UserSalonController');

Route::get('monday-salon' , 'SalonTimeController@monday');
Route::get('tuesday-salon' , 'SalonTimeController@tuesday');
Route::get('wednesday-salon' , 'SalonTimeController@wednesday');
Route::get('thursday-salon' , 'SalonTimeController@thursday');
Route::get('friday-salon' , 'SalonTimeController@friday');
Route::get('saturday-salon' , 'SalonTimeController@saturday');
Route::get('sunday-salon' , 'SalonTimeController@sunday');
Route::resource('subscribers' , 'SubscribersController');



Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{


});


Route::group(['prefix' => 'user', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{


});
