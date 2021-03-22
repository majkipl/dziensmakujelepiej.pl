<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\IndexCollectionRequest;
use App\Models\Collection;
use App\Models\Link;
use App\Traits\ApiRequestParametersTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CollectionController extends Controller
{
    use ApiRequestParametersTrait;

    /**
     * @param IndexCollectionRequest $request
     * @return JsonResponse
     */
    public function index(IndexCollectionRequest $request): JsonResponse
    {
        $params = $this->getRequestParameters($request);
        extract($params);

        $query = Collection::search($search, $searchable)->filter($filter)->orderBy($sort, $order);

        $collectionsCount = $query->count('id');
        $collections = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'total' => $collectionsCount,
            'rows' => $collections
        ], Response::HTTP_OK);
    }

    /**
     * @param string $slug
     * @return JsonResponse
     */
    public function links(string $slug): JsonResponse
    {
        $query = Link::with(['product.collection'])->whereHas('collection', function ($query) use ($slug) {
            $query->where('slug', $slug);
        });

        $linksCount = $query->count('id');
        $links = $query->get()->toArray();

        foreach ($links as &$item) {
            unset($item['id']);
            unset($item['product_id']);
            unset($item['product']['id']);
            unset($item['product']['collection_id']);
            unset($item['product']['collection']['id']);
        }

        unset($item);

        return response()->json([
            'total' => $linksCount,
            'rows' => $links
        ], Response::HTTP_OK);
    }
}
