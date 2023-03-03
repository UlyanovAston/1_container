<?php

namespace App\Entity\Newspaper;

use App\Contract\Newspaper;

class DailyBugle implements Newspaper
{
    public function getName(): string
    {
        return 'Daily Bugle';
    }
}