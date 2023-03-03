<?php

namespace App\Entity\Cat;

use App\Contract\Cat;

class HungryCat implements Cat
{
    public function meow(): string
    {
        return 'My bowl is empty. Meow...';
    }
}