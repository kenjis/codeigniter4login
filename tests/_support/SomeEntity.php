<?php

declare(strict_types=1);

namespace Tests\Support;

use CodeIgniter\Entity;

class SomeEntity extends Entity
{
    protected $attributes = [
        'foo' => null,
        'bar' => null,
    ];
}
