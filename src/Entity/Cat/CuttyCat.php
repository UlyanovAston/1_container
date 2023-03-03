<?php

namespace App\Entity\Cat;

use App\Contract\Cat;

class CuttyCat implements Cat
{
    public function meow(): string
    {
        return 'Meow-meow! ^_^';
    }
}