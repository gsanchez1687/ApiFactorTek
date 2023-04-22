<?php

namespace App\Http\Controllers\Netwoks;

use App\Http\Controllers\ApiController;
use App\Models\networks;

class NetworksController extends ApiController
{
    public function index()
    {
        $modelBenefits = networks::where('status',1)->get();
        return $this->showAll($modelBenefits,200);
    }
}
