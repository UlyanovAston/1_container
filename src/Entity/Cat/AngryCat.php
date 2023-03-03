<?php

namespace App\Entity\Cat;

use App\Contract\Cat;

class AngryCat implements Cat
{
    public function meow(): string
    {
        return 'AAAARRRGGH!!!! MEEEEOOW!';
    }
}