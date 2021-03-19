<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\IndexProductRequest;
use App\Models\Product;
use App\Traits\ApiRequestParametersTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    use ApiRequestParametersTrait;

    public function index(IndexProductRequest $request): JsonResponse
    {
        $params = $this->getRequestParameters($request);
        extract($params);

        $query = Product::with(['collection'])->search($search, $searchable)->filter($filter)->orderBy($sort, $order);

        $productsCount = $query->count('id');
        $products = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'total' => $productsCount,
            'rows' => $products
        ], Response::HTTP_OK);
    }

}
