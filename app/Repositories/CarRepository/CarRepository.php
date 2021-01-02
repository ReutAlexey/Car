<?php


namespace App\Repositories\CarRepository;


use App\Repositories\CarRepository\Interfaces\CarRepositoryInterface;
use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Car as Model;

class CarRepository extends CoreRepository implements CarRepositoryInterface
{

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }

    /**
     * @return mixed
     */
    public function getAllCars()
    {
        $columns = [
            'make',
            'model',
            'vin',
            'odometer',
            'lot',
            'year',
            'bid',
        ];

        return $this->startConditions()
            ->select($columns)
            ->paginate(25);
    }

    /**
     * @param string $query
     * @return Collection
     */
    public function search($query = ''): Collection
    {
        $columns = [
            'make',
            'model',
            'vin',
            'odometer',
            'lot',
            'year',
            'bid',
        ];

        return $this->startConditions()::query()
            ->select($columns)
            ->where('vin', 'like', "%{$query}%")
            ->orWhere('lot', 'like', "%{$query}%")
            ->get();
    }


}
