<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\ApiController;
use App\Models\headers;

class HeaderController extends ApiController
{
   
    public function index()
    {
        $modelHeaders = Headers::where('status',1)->get();
       
        return $this->showAll($modelHeaders,200);
    }

}
