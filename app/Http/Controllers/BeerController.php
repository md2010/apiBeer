<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Jsonable;
use App\Models\Beer;
use App\Http\Filter\QueryFilter;
use App\Http\Filter\BeerFilter;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BeerCollection;

class BeerController extends Controller
{
    protected $query;

    public function __construct()
    {
        $this->query = Beer::query();
    }

    public function index(Request $request, BeerFilter $filters)
    {
       $this->query = Beer::filter($filters);
       $data = $this->query->get();
       return new BeerCollection($data);
    }

    public function show()
    {
        return new BeerCollection(Beer::all()->get());
    }

}
