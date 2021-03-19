<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'collection_id'];

    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    /**
     * @return BelongsTo
     */
    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
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
                        case 'collection_id':
                            $query->orWhere($column, '=', $search);
                            break;
                        case 'code':
                            $query->orWhere($column, 'LIKE', '%' . $search . '%');
                            break;
                        case 'collection.name':
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
                    case 'collection_id':
                        $query->where($column, '=', $value);
                        break;
                    case 'code':
                        $query->where($column, 'LIKE', "%$value%");
                        break;
                    case 'collection.name':
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
