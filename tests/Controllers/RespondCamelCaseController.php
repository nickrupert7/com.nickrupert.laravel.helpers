<?php

namespace Tests\Controllers;

use NickRupert\LaravelHelpers\Controllers\RespondCamelCase;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RespondCamelCaseController extends Controller
{
    use RespondCamelCase;

    public function index(Request $request)
    {
        return $request->all();
    }
}