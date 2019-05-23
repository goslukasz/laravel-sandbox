<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('user', ['user' => 666]);
    }
}
