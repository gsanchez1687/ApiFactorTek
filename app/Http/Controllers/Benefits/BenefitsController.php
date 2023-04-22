<?php

namespace App\Http\Controllers\Benefits;

use App\Http\Controllers\ApiController;
use App\Models\benefits;

class BenefitsController extends ApiController
{
    public function index()
    {
        $modelBenefits = benefits::where('status',1)->get();
        return $this->showAll($modelBenefits,200);
    }
}
