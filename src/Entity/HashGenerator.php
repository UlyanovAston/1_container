<?php

namespace App\Entity;

use App\Contract\HashAlgorithm;

class HashGenerator
{
    /** @var HashAlgorithm */
    private $algorithm;

    public function __construct(HashAlgorithm $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function generate(string $data): string
    {
        return $this->algorithm->hash($data);
    }
}