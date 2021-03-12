<?php

namespace App\Http\Controllers;

use App\Enums\Purchase;
use App\Enums\Whence;
use App\Http\Requests\StoreApplicationRequest;
use App\Services\ApplicationService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ApplicationController extends Controller
{
    public function __construct(protected ApplicationService $applicationService)
    {
    }

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

    public function store(StoreApplicationRequest $request)
    {
        try {
            $application = $this->applicationService->store(
                $request->validated(),
                $request
            );

//            $request->session()->put('application_id', $application->id);

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('front.thx.form')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
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
