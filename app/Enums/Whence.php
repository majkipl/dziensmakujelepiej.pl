<?php

namespace App\Enums;

class Whence
{
    const SS = 'z reklamy w sklepie stacjonarnym';
    const SI = 'z reklamy w sklepie internetowym';
    const OS = 'od sprzedawcy';
    const RI = 'z reklamy w internecie';
    const FB = 'z Facebooka';
    const NN = 'inne';


    const ALL = [
        self::SS,
        self::SI,
        self::OS,
        self::RI,
        self::FB,
        self::NN,
    ];
}
