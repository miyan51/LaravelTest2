<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    function index()
    {
        $tests = test::all();
        return view('index', ['tests' => $tests]);
    }
    function addTest(ClientRequest $request)
    {
        $test = new Test();
        $test->name = $request->name;
        $test->password = $request->password;
        $test->save();
        return redirect('/');
    }
}
