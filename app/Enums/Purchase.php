<?php

namespace App\Enums;

class Purchase
{
    const SS = 'w sklepie stacjonarnym';
    const SI = 'w sklepie internetowym';

    const ALL = [
        self::SS,
        self::SI
    ];
}
