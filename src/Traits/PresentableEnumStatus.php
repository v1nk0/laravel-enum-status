<?php

namespace V1nk0\LaravelEnumStatus\Traits;

trait PresentableEnumStatus
{
    public function presentable(): array
    {
        return [
            'level' => $this->level()->value,
            'code' => $this->name,
            'color' => $this->level()->color(),
            'name' => $this->name(),
        ];
    }
}
