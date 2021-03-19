<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Znck\Eloquent\Relations\BelongsToThrough;

class Link extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = ['url', 'product_id'];

    public $timestamps = false;

    /**
     * @param $query
     * @param $relation
     * @param $constraint
     * @return mixed
     */
    public function scopeWithWhereHas($query, $relation, $constraint){
        return $query->whereHas($relation, $constraint)
            ->with([$relation => $constraint]);
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsToThrough
     */
    public function collection(): BelongsToThrough
    {
        return $this->belongsToThrough(Collection::class, Product::class);
    }

    /**
     * @param $query
     * @param $search
     * @param $searchable
     * @return mixed
     */
    public function scopeSearch($query, $search, $searchable)
    {
        if ($search && $searchable) {
            $query->where(function ($query) use ($search, $searchable) {
                foreach ($searchable as $column) {
                    switch ($column) {
                        case 'id':
                        case 'product_id':
                            $query->orWhere($column, '=', $search);
                            break;
                        case 'url':
                            $query->orWhere($column, 'LIKE', '%' . $search . '%');
                            break;
                        case 'product.code':
                            $query->orWhereHas('product', function ($subQuery) use ($search) {
                                $subQuery->where('code', 'LIKE', '%' . $search . '%');
                            });
                            break;
                        case 'product.collection.name':
                            $query->orWhereHas('collection', function ($subQuery) use ($search) {
                                $subQuery->where('name', 'LIKE', '%' . $search . '%');
                            });
                            break;
                    }
                }
            });
        }

        return $query;
    }

    /**
     * @param $query
     * @param $filter
     * @return mixed
     */
    public function scopeFilter($query, $filter)
    {
        if ($filter) {
            $filters = json_decode($filter, true);

            foreach ($filters as $column => $value) {
                switch ($column) {
                    case 'id':
                    case 'product_id':
                        $query->where('id', '=', $value);
                        break;
                    case 'url':
                        $query->where($column, 'LIKE', "%$value%");
                        break;
                    case 'product.code':
                        $query->orWhereHas('product', function ($subQuery) use ($value) {
                            $subQuery->where('code', 'LIKE', '%' . $value . '%');
                        });
                        break;
                    case 'product.collection.name':
                        $query->orWhereHas('collection', function ($subQuery) use ($value) {
                            $subQuery->where('name', 'LIKE', '%' . $value . '%');
                        });
                        break;
                }
            }
        }

        return $query;
    }
}
