<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GenreController extends commonController
{

    protected function saveSetting()
    {
        parent::saveSetting(); // TODO: Change the autogenerated stub
        $this->MODEL = 'App\Genre';
    }
}
