<?php

namespace App\Entity;

use App\Contract\Newspaper;

final class Postman
{
    /** @var Newspaper[] */
    private $newspapers;

    public function __construct(array $newspapers)
    {
        $this->newspapers = $newspapers;
    }

    public function report(): string
    {
        if (empty($this->newspapers)) {
            return "I'm sorry, I'm just walking";
        }

        $newspaperNames = [];
        foreach ($this->newspapers as $newspaper) {
            $newspaperNames[] = $newspaper->getName();
        }

        return 'I brought: ' . join(', ', $newspaperNames);
    }
}