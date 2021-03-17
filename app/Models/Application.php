<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'street', 'flat', 'zip', 'city', 'purchase',
        'whence', 'whence_other', 'img_receipt', 'img_ean', 'img_box',
        'legal_1', 'legal_2', 'legal_3', 'legal_4'
    ];

    public function setLegal1Attribute($value)
    {
        $this->attributes['legal_1'] = $value === 'on';
    }

    public function setLegal2Attribute($value)
    {
        $this->attributes['legal_2'] = $value === 'on';
    }

    public function setLegal3Attribute($value)
    {
        $this->attributes['legal_3'] = $value === 'on';
    }

    public function setLegal4Attribute($value)
    {
        $this->attributes['legal_4'] = $value === 'on';
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
                            $query->orWhere('id', '=', '%' . $search . '%');
                            break;
                        case 'name':
                        case 'email':
                        case 'phone':
                        case 'street':
                        case 'flat':
                        case 'zip':
                        case 'city':
                        case 'purchase':
                        case 'whence':
                        case 'whence_other':
                        case 'img_receipt':
                        case 'img_ean':
                        case 'img_box':
                            $query->orWhere($column, 'LIKE', '%' . $search . '%');
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
                        $query->where('id', $value);
                        break;
                    case 'name':
                    case 'email':
                    case 'phone':
                    case 'street':
                    case 'flat':
                    case 'zip':
                    case 'city':
                    case 'purchase':
                    case 'whence':
                    case 'whence_other':
                    case 'img_receipt':
                    case 'img_ean':
                    case 'img_box':
                        $query->where($column, 'LIKE', "%$value%");
                        break;
                    case 'legal_1':
                    case 'legal_2':
                    case 'legal_3':
                    case 'legal_4':
                        $query->orWhere($column, '=', $value === 'TAK');
                        break;
                }
            }
        }

        return $query;
    }
}
