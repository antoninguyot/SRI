<?php

namespace App\Traits;

interface Operation
{
    public function toTitle(): string;

    public function toNotes(): string;

    public function toAmount(): float;
}
