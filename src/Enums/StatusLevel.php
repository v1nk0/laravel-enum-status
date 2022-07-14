<?php

namespace V1nk0\LaravelEnumStatus\Enums;

enum StatusLevel: string
{
    case OPEN = 'OPEN';
    case PENDING = 'PENDING';
    case SUCCESS = 'SUCCESS';
    case FAILURE = 'FAILURE';

    public function color(): string
    {
        return match($this) {
            StatusLevel::OPEN => 'blue',
            StatusLevel::PENDING => 'yellow',
            StatusLevel::SUCCESS => 'green',
            StatusLevel::FAILURE => 'red',
        };
    }
}
