<?php 

namespace App\Http\Filter;

use App\Http\Filter\QueryFilter;
use Iluminate\Databse\Query\Builder;
use App\Models\Beer;
use Illuminate\Http\Request;

class BeerFilter extends QueryFilter{

    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct($request);
    }
  
    public function category($term) 
    {
        if ($term == 404) {
            return $this->builder;
        }
        return $this->builder->where('beers.category', 'LIKE', "%$term%");
    }
  
    public function srm($term) 
    {
        if ($term == 404) {
            return $this->builder;
        }
        return $this->builder->where('beers.srmFrom', '<=', $term)
                             ->where('beers.srmTo', '>=', $term);
    }

    public function abv($term) 
    {
        if ($term == 404) {
            return $this->builder;
        }
        return $this->builder->where([
                    ['beers.abvFrom', '<=', $term],
                    ['beers.abvTo', '>=', $term]
        ]);
    }
    
    public function ibu($term) 
    {
        if ($term == 404) {
            return $this->builder;
        }
        return $this->builder->where('beers.ibuFrom', '<=', $term) 
                             ->where('beers.ibuTo', '>=', $term);
                            
    }
}