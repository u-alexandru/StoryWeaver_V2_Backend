<?php

namespace App\Http\Controllers\API\Novels;

use App\Contracts\Reportable;
use App\Http\Controllers\Controller;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\ReportRequest;
use App\Http\Requests\UnlikeRequest;
use App\Models\Novels\Report;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class ReportController extends Controller
{
    public function report(ReportRequest $request): JsonResponse
    {
        abort_if(Gate::denies('create-novel'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = $request->user();

        if ($user->hasReported($request->reportable())) {
           // cant report again the same thing, return error
            return response()->json([
                'reports' => $request->reportable()->reports()->count(),
            ], 403);
        }


        (new Report($request->all()))
            ->user()->associate($user)
            ->reportable()->associate($request->reportable())
            ->save();

            return response()->json([
                'reports' => $request->reportable()->reports()->count(),
            ]);
    }
}
