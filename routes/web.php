<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VeterinarianController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\MedicalHistoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PetController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/veterinarios', [VeterinarianController::class, 'index'])
    ->name('veterinarians.index');


/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


/*
|--------------------------------------------------------------------------
| Rutas Protegidas
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Panel del usuario
    Route::get('/panel', [AuthController::class, 'panel'])->name('user.panel');

    // Historial médico
    Route::get('/historial', [MedicalHistoryController::class, 'index'])
        ->name('medical.history');

    // Recordatorios
    Route::get('/recordatorios', [ReminderController::class, 'index'])
        ->name('reminders.index');

    Route::post('/recordatorios', [ReminderController::class, 'store'])
        ->name('reminders.store');

    // Citas
    Route::get('/citas', [AppointmentController::class, 'index'])
        ->name('appointments.index');

    Route::post('/citas', [AppointmentController::class, 'store'])
        ->name('appointments.store');

    // Mascotas
    Route::get('/mascotas', [PetController::class, 'index'])
        ->name('pets.index');

    Route::post('/mascotas', [PetController::class, 'store'])
        ->name('pets.store');
});

Route::get('/test-ai', function () {
    $client = OpenAI::client(env('OPENAI_API_KEY'));

    $response = $client->chat()->create([
        'model' => 'gpt-4.1-mini',
        'messages' => [
            ['role' => 'user', 'content' => 'Hola IA']
        ]
    ]);

    return $response['choices'][0]['message']['content'];
});
