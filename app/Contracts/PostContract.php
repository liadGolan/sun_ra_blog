<?php

declare(strict_types=1);

namespace App\Contracts;

interface PostContract
{
    public function getAllPosts(): array;
}