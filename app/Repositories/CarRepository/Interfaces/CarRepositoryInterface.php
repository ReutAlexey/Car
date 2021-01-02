<?php

namespace App\Repositories\CarRepository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CarRepositoryInterface
{
    public function search(string $query = ''): Collection;

}
