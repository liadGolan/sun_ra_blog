<?php

declare(strict_types=1);

namespace App\Contracts;

interface ReplyContract
{
    public function createReply(array $data);
}