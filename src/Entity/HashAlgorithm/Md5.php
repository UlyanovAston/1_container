<?php

namespace App\Entity\HashAlgorithm;

use App\Contract\HashAlgorithm;

class Md5 implements HashAlgorithm
{
    public function hash(string $data): string
    {
        return md5($data);
    }
}