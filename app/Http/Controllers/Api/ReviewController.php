<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddReviewRequest;
use App\Http\Requests\Api\IndexReviewRequest;
use App\Http\Requests\Api\UpdateReviewRequest;
use App\Models\Review;
use App\Traits\ApiRequestParametersTrait;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    use ApiRequestParametersTrait, ApiResponseTrait;

    public function index(IndexReviewRequest $request): JsonResponse
    {
        $params = $this->getRequestParameters($request);
        extract($params);

        $query = Review::with('collection')->search($search, $searchable)->filter($filter)->orderBy($sort, $order);

        $itemsCount = $query->count('id');
        $items = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'total' => $itemsCount,
            'rows' => $items
        ], Response::HTTP_OK);
    }

    /**
     * @param AddReviewRequest $request
     * @return JsonResponse
     */
    public function add(AddReviewRequest $request): JsonResponse
    {
        DB::beginTransaction();

        try {
            $review = new Review($request->validated());

            $review->save();

            DB::commit();

            Cache::forget('reviews');

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('back.review')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return $this->responseUnprocessable();
        }
    }

    /**
     * @param UpdateReviewRequest $request
     * @return JsonResponse
     */
    public function update(UpdateReviewRequest $request): JsonResponse
    {
        DB::beginTransaction();

        try {
            $review = Review::findOrFail($request->input('id'));

            $review->fill($request->validated());
            $review->save();

            DB::commit();

            Cache::forget('reviews');

            return response()->json(
                [
                    'status' => 'success',
                    'results' => [
                        'url' => route('back.review')
                    ]
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return $this->responseUnprocessable();
        }
    }

    public function delete(Review $review): JsonResponse
    {
        DB::beginTransaction();

        try {
            $review->delete();

            DB::commit();

            Cache::forget('reviews');

            return response()->json(
                [
                    'status' => 'success',
                    'message' => 'Rekord został pomyślnie usunięty.'
                ],
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            DB::rollBack();

            return $this->responseUnprocessable();
        }
    }
}
