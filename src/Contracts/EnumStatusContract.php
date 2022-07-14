<?php

namespace V1nk0\LaravelEnumStatus\Contracts;

use V1nk0\LaravelEnumStatus\Enums\StatusLevel;

interface EnumStatusContract
{
    public function level(): StatusLevel;

    public function presentable(): array;

    public function name(): string;
}
