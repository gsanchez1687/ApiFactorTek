<?php

namespace App\Http\Controllers\Characteristics;

use App\Http\Controllers\ApiController;
use App\Models\characteristics;


class CharacteristicsController extends ApiController
{
    public function index()
    {
        $modelCharacteristics = characteristics::where('status',1)->get();
        return $this->showAll($modelCharacteristics,200);
    }
}
