<?php

namespace App\Contract;

interface HashAlgorithm
{
    public function hash(string $data): string;
}