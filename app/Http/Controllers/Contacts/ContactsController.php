<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\ApiController;
use App\Models\contacts;

class ContactsController extends ApiController
{
    public function index()
    {
        $modelContacs = contacts::where('status',1)->get();
        return $this->showAll($modelContacs,200);
    }
}
