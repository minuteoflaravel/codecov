<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class opa extends Controller
{
    public function testingOks()
    {

    }


    public function load()
    {
        if (!request()->input('p')) {
            return '';
        }

        return '2';
    }

}
