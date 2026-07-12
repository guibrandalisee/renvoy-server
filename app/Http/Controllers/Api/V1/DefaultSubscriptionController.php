<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DefaultSubscriptionResource;
use App\Models\DefaultSubscription;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DefaultSubscriptionController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $subscriptions = DefaultSubscription::query()
            ->with('group')
            ->where('is_active', true)
            ->when($request->filled('search'), function ($query) use ($request): void {
                $term = '%'.mb_strtolower($request->string('search')->toString()).'%';
                $query->where(function ($query) use ($term): void {
                    $query->whereRaw('LOWER(name) LIKE ?', [$term])
                        ->orWhereRaw('LOWER(slug) LIKE ?', [$term]);
                });
            })
            ->orderBy('sort')
            ->orderBy('name')
            ->get();

        return DefaultSubscriptionResource::collection($subscriptions)
            ->additional([])
            ->response()
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
