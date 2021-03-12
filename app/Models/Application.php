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
}
