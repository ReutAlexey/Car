<?php

namespace App\Http\Controllers\TestTaskControllers;

use App\Http\Controllers\Controller;
use App\Repositories\CarRepository\CarRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * @var CarRepository
     */
    private CarRepository $CarRepository;

    /**
     * CarLotsController constructor.
     */
    public function __construct()
    {
        $this->CarRepository = new CarRepository();
    }

    /**
     *  Show all cars / Show found car
     *
     * @param Request $req
     * @return Application|Factory|View
     */
    public function showCarLots(Request $req)
    {
        if ($req->input('search')) {
            $query = trim($req->input('search'));
            $lots = $this->CarRepository->search($query);
        } else {
            $lots = $this->CarRepository->getAllCars();
        }
        return view('showCarLots', ['lots' => $lots]);
    }

}
