<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Contact;
use App\Http\Livewire\DesktopComponet;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LaptopComponet;
use App\Http\Livewire\Services\DataBackup;
use App\Http\Livewire\Services\HardwareUpdates;
use App\Http\Livewire\Services\LaptopRepair;
use App\Http\Livewire\Services\MacRepair;
use App\Http\Livewire\Services\PCRepair;
use App\Http\Livewire\Services\SoftwareInstallation;
use App\Http\Livewire\User\Userdashboard;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');

Route::get('/about',AboutComponent::class)->name('about');

Route::get('/contact',Contact::class)->name('contact');

Route::get('/laptop',LaptopComponet::class)->name('laptop');

Route::get('/desktop',DesktopComponet::class)->name('desktop');

Route::get('/srvices/laptop-repair',LaptopRepair::class)->name('services.laptop-repair');
Route::get('/srvices/pc-repair',PCRepair::class)->name('services.pc-repair');
Route::get('/srvices/mac-repair',MacRepair::class)->name('services.mac-repair');
Route::get('/srvices/data-backup',DataBackup::class)->name('services.data-backup');
Route::get('/srvices/software-installation',SoftwareInstallation::class)->name('services.software-installation');('services.laptop-repair');
Route::get('/srvices/hardware-updates',HardwareUpdates::class)->name('services.hardware-updates');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//for User or Customer
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/user/dashboard',Userdashboard::class)->name('user.dashboard');
});


//for Admin 
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
});