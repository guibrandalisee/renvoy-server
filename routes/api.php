<?php

use App\Http\Controllers\Api\V1\DefaultSubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/v1/default-subscriptions', [DefaultSubscriptionController::class, 'index']);
