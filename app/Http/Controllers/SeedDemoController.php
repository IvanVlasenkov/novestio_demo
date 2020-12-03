<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeedDemoController extends Controller
{
    //

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return 'Seed Demo';
    }
}
