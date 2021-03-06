<?php

namespace NickRupert\LaravelHelpers\Controllers;

use NickRupert\LaravelHelpers\Models\State;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StatesController extends Controller
{
    public function index(Request $request) {
        $states = State::query();

        if ($request->has('country_code')) {
            $states = $states->where('country_code', $request->get('country_code'));
        }

        return $states->get();
    }
}