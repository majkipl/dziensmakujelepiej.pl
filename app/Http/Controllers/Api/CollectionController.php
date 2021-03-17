<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CollectionController extends Controller
{
    public function links(string $slug)
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
