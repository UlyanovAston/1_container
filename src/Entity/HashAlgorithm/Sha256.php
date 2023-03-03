<?php

namespace App\Entity\HashAlgorithm;

use App\Contract\HashAlgorithm;

class Sha256 implements HashAlgorithm
{

    public function hash(string $data): string
    {
        return hash('sha256', $data);
    }
}