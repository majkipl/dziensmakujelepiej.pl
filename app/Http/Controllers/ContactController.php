<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSendRequest;
use App\Services\ContactService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * @param ContactService $contactService
     */
    public function __construct(protected ContactService $contactService)
    {
    }

    /**
     * @param ContactSendRequest $request
     * @return JsonResponse
     */
    public function send(ContactSendRequest $request): JsonResponse
    {
        try {
            $request->validated();

            $this->contactService->sendMail(env('APP_CONTACT_MAIL'), $request->all(['name', 'email', 'message']));

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'message' => 'Twoja wiadomość została wysłana.'
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception) {
            return response()->json(
                [
                    'errors' => [
                        'main' => [
                            'Nie możemy wysłać Twojej wiadomości, aby rozwiązać problem skontaktuj się z administratorem serwisu.'
                        ]
                    ],
                    'message' => 'Wewnętrzny błąd serwisu.'
                ],
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }
}
