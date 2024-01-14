<?php

namespace App\Http\Controllers\API\Novels;

use App\Http\Controllers\Controller;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(LikeRequest $request): JsonResponse
    {
        $request->user()->like($request->likeable());

            return response()->json([
                'likes' => $request->likeable()->likes()->count(),
            ]);
    }

    public function unlike(UnlikeRequest $request): JsonResponse
    {
        $request->user()->unlike($request->likeable());

            return response()->json([
                'likes' => $request->likeable()->likes()->count(),
            ]);

    }
}
