<?php


use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CharacteristicsController;
use App\Http\Controllers\DinningController;
use App\Http\Controllers\HomeRoomsController;
use App\Http\Controllers\HotelChainsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\IngredientTypeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\MenuItemIngredientController;
use App\Http\Controllers\OrderMenuItemController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PeriodRoomRatesController;
use App\Http\Controllers\ResBookingsController;
use App\Http\Controllers\RefHotelCharacteristicsHotelsController;
use App\Http\Controllers\RefRoomTypeController;
use App\Http\Controllers\RefStarRatingsController;
use App\Http\Controllers\RoomBookingsController;
use App\Http\Controllers\RoomRatePeriodsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffRoleController;
use App\Http\Controllers\CustomerController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home/index');
});

// Route::get('/', function () {
//     return view('home');
// })->name('home');


// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/guest', [GuestController::class, 'index']);
Route::get('/guest/{id}', [GuestController::class, 'get']);
Route::post('/guest', [GuestController::class, 'create'])->withoutMiddleware('web');
Route::patch('/guest/{id}', [GuestController::class, 'update'])->withoutMiddleware('web');
Route::delete('/guest/{id}', [GuestController::class, 'delete'])->withoutMiddleware('web');


Route::get('/bookings', [BookingsController::class, 'index']);
Route::get('/bookings/{id}', [BookingsController::class, 'get']);
Route::post('/bookings', [BookingsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/bookings/{id}', [BookingsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/bookings/{id}', [BookingsController::class, 'delete'])->withoutMiddleware('web');


Route::get('/countries', [CountriesController::class, 'index']);
Route::get('/countries/{country_code}', [CountriesController::class, 'get']);
Route::post('/countries', [CountriesController::class, 'create'])->withoutMiddleware('web');
Route::patch('/countries/{country_code}', [CountriesController::class, 'update'])->withoutMiddleware('web');
Route::delete('/countries/{country_code}', [CountriesController::class, 'delete'])->withoutMiddleware('web');

Route::get('/characteristics', [CharacteristicsController::class, 'index']);
Route::get('/characteristics/{id}', [CharacteristicsController::class, 'get']);
Route::post('/characteristics', [CharacteristicsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/characteristics/{id}', [CharacteristicsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/characteristics/{id}', [CharacteristicsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{customer_id}', [CustomerController::class, 'get']);
Route::post('/customers', [CustomerController::class, 'create'])->withoutMiddleware('web');
Route::patch('/customers/{customer_id}', [CustomerController::class, 'update'])->withoutMiddleware('web');
Route::delete('/customers/{customer_id}', [CustomerController::class, 'delete'])->withoutMiddleware('web');

Route::get('/dinning', [DinningController::class, 'index']);
Route::get('/dinning/{dinning_table_id}', [DinningController::class, 'get']);
Route::post('/dinning', [DinningController::class, 'create'])->withoutMiddleware('web');
Route::patch('/dinning/{dinning_table_id}', [DinningController::class, 'update'])->withoutMiddleware('web');
Route::delete('/dinning/{dinning_table_id}', [DinningController::class, 'delete'])->withoutMiddleware('web');

Route::get('/hotelRoom', [HomeRoomsController::class, 'index']);
Route::get('/hotelRoom/{id}', [HomeRoomsController::class, 'get']);
Route::post('/hotelRoom', [HomeRoomsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/hotelRoom/{id}', [HomeRoomsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/hotelRoom/{id}', [HomeRoomsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/hotelChains', [HotelChainsController::class, 'index']);
Route::get('/hotelChains/{id}', [HotelChainsController::class, 'get']);
Route::post('/hotelChains', [HotelChainsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/hotelChains/{id}', [HotelChainsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/hotelChains/{id}', [HotelChainsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/hotels', [HotelsController::class, 'index']);
Route::get('/hotels/{id}', [HotelsController::class, 'get']);
Route::post('/hotels', [HotelsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/hotels/{id}', [HotelsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/hotels/{id}', [HotelsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/ingredient', [IngredientController::class, 'index']);
Route::get('/ingredient/{ingredient_id}', [IngredientController::class, 'get']);
Route::post('/ingredient', [IngredientController::class, 'create'])->withoutMiddleware('web');
Route::patch('/ingredient/{ingredient_id}', [IngredientController::class, 'update'])->withoutMiddleware('web');
Route::delete('/ingredient/{ingredient_id}', [IngredientController::class, 'delete'])->withoutMiddleware('web');

Route::get('/ingredientTypes', [IngredientTypeController::class, 'index']);
Route::get('/ingredientTypes/{ingredient_type_id}', [IngredientTypeController::class, 'get']);
Route::post('/ingredientTypes', [IngredientTypeController::class, 'create'])->withoutMiddleware('web');
Route::patch('/ingredientTypes/{ingredient_type_id}', [IngredientTypeController::class, 'update'])->withoutMiddleware('web');
Route::delete('/ingredientTypes/{iingredient_type_id}', [IngredientTypeController::class, 'delete'])->withoutMiddleware('web');

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/{menu_id}', [MenuController::class, 'get']);
Route::post('/menu', [MenuController::class, 'create'])->withoutMiddleware('web');
Route::patch('/menu/{menu_id}', [MenuController::class, 'update'])->withoutMiddleware('web');
Route::delete('/menu/{menu_id}', [MenuController::class, 'delete'])->withoutMiddleware('web');

Route::get('/MenuItem', [MenuItemController::class, 'index']);
Route::get('/MenuItem/{menu_item_id}', [MenuItemController::class, 'get']);
Route::post('/MenuItem', [MenuItemController::class, 'create'])->withoutMiddleware('web');
Route::patch('/MenuItem/{menu_item_id}', [MenuItemController::class, 'update'])->withoutMiddleware('web');
Route::delete('/MenuItem/{menu_item_id}', [MenuItemController::class, 'delete'])->withoutMiddleware('web');

Route::get('/orderMenuItem', [OrderMenuItemController::class, 'index']);
Route::get('/orderMenuItem/{order_menu_item_id}', [OrderMenuItemController::class, 'get']);
Route::post('/orderMenuItem', [OrderMenuItemController::class, 'create'])->withoutMiddleware('web');
Route::patch('/orderMenuItem/{order_menu_item_id}', [OrderMenuItemController::class, 'update'])->withoutMiddleware('web');
Route::delete('/orderMenuItem/{order_menu_item_id}', [OrderMenuItemController::class, 'delete'])->withoutMiddleware('web');

Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/{order_id}', [OrdersController::class, 'get']);
Route::post('/orders', [OrdersController::class, 'create'])->withoutMiddleware('web');
Route::patch('/orders/{order_id}', [OrdersController::class, 'update'])->withoutMiddleware('web');
Route::delete('/orders/{order_id}', [OrdersController::class, 'delete'])->withoutMiddleware('web');

Route::get('/periodRoomRate', [PeriodRoomRatesController::class, 'index']);
Route::get('/periodRoomRate/{id}', [PeriodRoomRatesController::class, 'get']);
Route::post('/periodRoomRate', [PeriodRoomRatesController::class, 'create'])->withoutMiddleware('web');
Route::patch('/periodRoomRate/{id}', [PeriodRoomRatesController::class, 'update'])->withoutMiddleware('web');
Route::delete('/periodRoomRate/{id}', [PeriodRoomRatesController::class, 'delete'])->withoutMiddleware('web');

Route::get('/ResBookings', [ResBookingsController::class, 'index']);
Route::get('/ResBookings/{bookings_id}', [ResBookingsController::class, 'get']);
Route::post('/ResBookings', [ResBookingsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/ResBookings/{bookings_id}', [ResBookingsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/ResBookings/{bookings_id}', [ResBookingsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/refHotelCharacteristicsHotels', [RefHotelCharacteristicsHotelsController::class, 'index']);
Route::get('/refHotelCharacteristicsHotels/{id}', [RefHotelCharacteristicsHotelsController::class, 'get']);
Route::post('/refHotelCharacteristicsHotels', [RefHotelCharacteristicsHotelsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/refHotelCharacteristicsHotels/{id}', [RefHotelCharacteristicsHotelsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/refHotelCharacteristicsHotels/{id}', [RefHotelCharacteristicsHotelsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/roomRefType', [RefRoomTypeController::class, 'index']);
Route::get('/roomRefType/{id}', [RefRoomTypeController::class, 'get']);
Route::post('/roomRefType', [RefRoomTypeController::class, 'create'])->withoutMiddleware('web');
Route::patch('/roomRefType/{id}', [RefRoomTypeController::class, 'update'])->withoutMiddleware('web');
Route::delete('/roomRefType/{id}', [RefRoomTypeController::class, 'delete'])->withoutMiddleware('web');

Route::get('/refStarRatings', [RefStarRatingsController::class, 'index']);
Route::get('/refStarRatings/{id}', [RefStarRatingsController::class, 'get']);
Route::post('/refStarRatings', [RefStarRatingsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/refStarRatings/{id}', [RefStarRatingsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/refStarRatings/{id}', [RefStarRatingsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/roomBookings', [RoomBookingsController::class, 'index']);
Route::get('/roomBookings/{id}', [RoomBookingsController::class, 'get']);
Route::post('/roomBookings', [RoomBookingsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/roomBookings/{id}', [RoomBookingsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/roomBookings/{id}', [RoomBookingsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/roomRatePeriods', [RoomRatePeriodsController::class, 'index']);
Route::get('/roomRatePeriods/{id}', [RoomRatePeriodsController::class, 'get']);
Route::post('/roomRatePeriods', [RoomRatePeriodsController::class, 'create'])->withoutMiddleware('web');
Route::patch('/roomRatePeriods/{id}', [RoomRatePeriodsController::class, 'update'])->withoutMiddleware('web');
Route::delete('/roomRatePeriods/{id}', [RoomRatePeriodsController::class, 'delete'])->withoutMiddleware('web');

Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff/{staff_id}', [StaffController::class, 'get']);
Route::post('/staff', [StaffController::class, 'create'])->withoutMiddleware('web');
Route::patch('/staff/{staff_id}', [StaffController::class, 'update'])->withoutMiddleware('web');
Route::delete('/staff/{staff_id}', [StaffController::class, 'delete'])->withoutMiddleware('web');

Route::get('/staffRoles', [StaffRoleController::class, 'index']);
Route::get('/staffRoles/{staff_role_id}', [StaffRoleController::class, 'get']);
Route::post('/staffRoles', [StaffRoleController::class, 'create'])->withoutMiddleware('web');
Route::patch('/staffRoles/{staff_role_id}', [StaffRoleController::class, 'update'])->withoutMiddleware('web');
Route::delete('/staffRoles/{staff_role_id}', [StaffRoleController::class, 'delete'])->withoutMiddleware('web');

Route::get('/menuItemIngredients', [MenuItemIngredientController::class, 'index']);
Route::get('/menuItemIngredients/{menuItemIngredient_id}', [MenuItemIngredientController::class, 'get']);
Route::post('/menuItemIngredients', [MenuItemIngredientController::class, 'create'])->withoutMiddleware('web');
Route::patch('/menuItemIngredients/{menuItemIngredient_id}', [MenuItemIngredientController::class, 'update'])->withoutMiddleware('web');
Route::delete('/menuItemIngredients/{menuItemIngredient_id}', [MenuItemIngredientController::class, 'delete'])->withoutMiddleware('web');

