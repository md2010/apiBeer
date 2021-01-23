<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BeerCollection extends JsonResource
{   
    public function __construct($resource)
    {
        parent::__construct($resource);
    }

    public function toResponse($request)
    {     
        return response()->json($this,200,[],JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
}
