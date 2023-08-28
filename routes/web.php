<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\GestionnaireController;
use App\Http\Controllers\PermanencierController;
use App\Http\Controllers\Backend\RoleController;
use App\Models\User;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// start groupe Admin Middleware
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

}); // end groupe Admin Middleware




// start groupe gestionnaire Middleware
Route::middleware(['auth', 'roles:gestionnaire'])->group(function () {
    Route::get('/gestionnaire/dashboard', [GestionnaireController::class, 'GestionnaireDashboard'])->name('gestionnaire.dashboard');
    Route::get('/gestionnaire/logout', [GestionnaireController::class, 'GestionnaireLogout'])->name('gestionnaire.logout');
    Route::get('/gestionnaire/profile', [GestionnaireController::class, 'GestionnaireProfile'])->name('gestionnaire.profile');
    Route::post('/gestionnaire/profile/store', [GestionnaireController::class, 'GestionnaireProfileStore'])->name('gestionnaire.profile.store');
    Route::get('/gestionnaire/change/password', [GestionnaireController::class, 'GestionnaireChangePassword'])->name('gestionnaire.change.password');
    Route::post('/gestionnaire/update/password', [GestionnaireController::class, 'GestionnaireUpdatePassword'])->name('gestionnaire.update.password');
});
// end groupe gestionnaire Middleware

// start groupe Personnel Middleware
Route::middleware(['auth', 'roles:personnel'])->group(function () {
    Route::get('/personnel/dashboard', [PersonnelController::class, 'PersonnelDashboard'])->name('personnel.dashboard');
    Route::get('/personnel/logout', [PersonnelController::class, 'PersonnelLogout'])->name('personnel.logout');
    Route::get('/personnel/profile', [PersonnelController::class, 'PersonnelProfile'])->name('personnel.profile');
    Route::post('/personnel/profile/store', [PersonnelController::class, 'PersonnelProfileStore'])->name('personnel.profile.store');
    Route::get('/personnel/change/password', [PersonnelController::class, 'PersonnelChangePassword'])->name('personnel.change.password');
    Route::post('/personnel/update/password', [PersonnelController::class, 'PersonnelUpdatePassword'])->name('personnel.update.password');
});
// end groupe personnel Middleware


// start groupe permanencier Middleware
 Route::middleware(['auth', 'roles:permanencier'])->group(function () {
    Route::get('/permanencier/dashboard', [PermanencierController::class, 'PermanencierDashboard'])->name('permanencier.dashboard');
    Route::get('/permanencier/logout', [PermanencierController::class, 'PermanencierLogout'])->name('permanencier.logout');
    Route::get('/permanencier/profile', [PermanencierController::class, 'PermanencierProfile'])->name('permanencier.profile');
    Route::post('/permanencier/profile/store', [PermanencierController::class, 'PermanencierProfileStore'])->name('permanencier.profile.store');
    Route::get('/permanencier/change/password', [PermanencierController::class, 'PermanencierChangePassword'])->name('permanencier.change.password');
    Route::post('/permanencier/update/password', [PermanencierController::class, 'PermanencierUpdatePassword'])->name('permanencier.update.password');
});

// end groupe permanencier Middleware



Route::middleware(['auth', 'roles:admin'])->group(function () {


    // // profil admin
    // Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    // Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    // Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    // Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    // Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    // Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    // admin create users
    Route::controller(AdminController::class)->group(function(){
        Route::get('/all/admin','AllAdmin')->name('all.admin');
        Route::get('/add/admin','AddAdmin')->name('add.admin');
        Route::post('/store/admin','StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}','EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}','UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}','DeleteAdmin')->name('delete.admin');
    });


    // Permission All Route
    Route::controller(RoleController::class)->group(function(){
        Route::get('/all/permission','AllPermission')->name('all.permission');
        Route::get('/add/permission','AddPermission')->name('add.permission');
        Route::post('/store/permission','StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}','EditPermission')->name('edit.permission');
        Route::post('/update/permission','UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}','DeletePermission')->name('delete.permission');
        Route::get('/import/permission','ImportPermission')->name('import.permission');
        Route::get('/export','Export')->name('export');
        Route::post('/import','Import')->name('import');
    });


     // Roles All Route
     Route::controller(RoleController::class)->group(function(){
        Route::get('/all/roles','AllRole')->name('all.roles');
        Route::get('/add/roles','AddRole')->name('add.roles');
        Route::post('/store/roles','StoreRole')->name('store.roles');
        Route::get('/edit/roles/{id}','EditRole')->name('edit.roles');
        Route::post('/update/roles','UpdateRole')->name('update.roles');
        Route::get('/delete/roles/{id}','DeleteRole')->name('delete.roles');

        // Roles of permission All Route
        Route::get('/add/roles/permission','AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store','RolesPermissionStore')->name('role.permission.store');
        Route::get('/all/roles/permission','AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}','AdminEditRoles')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}','AdminRolesUpdate')->name('admin.roles.update');
        Route::get('/admin/delete/roles/{id}','AdminDeleteRoles')->name('admin.delete.roles');


    });



}); // end groupe Admin Middleware






