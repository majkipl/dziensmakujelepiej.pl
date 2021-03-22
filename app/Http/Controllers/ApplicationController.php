<?php

namespace App\Http\Controllers;

use App\Enums\Purchase;
use App\Enums\Whence;
use App\Http\Requests\StoreApplicationRequest;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApplicationController extends Controller
{
    /**
     * @param ApplicationService $applicationService
     */
    public function __construct(protected ApplicationService $applicationService)
    {
    }

    /**
     * @return View
     */
    public function form(): View
    {
        return view(
            'application/form',
            [
                'whences' => Whence::ALL,
                'purchases' => Purchase::ALL,
            ]
        );
    }

    /**
     * @param StoreApplicationRequest $request
     * @return JsonResponse
     */
    public function store(StoreApplicationRequest $request): JsonResponse
    {
        try {
            $this->applicationService->store(
                $request->validated(),
                $request
            );

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('front.thx.form')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception) {
            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy dodać Twojego zgłoszenia, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }
}
