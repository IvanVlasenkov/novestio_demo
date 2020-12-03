<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    private $name;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function demo()
    {
        $this->name = 'demo';
        return view('pages.demo')->with(['name' => $this->name]);
    }

    public function start()
    {
        $this->name = 'start';
        return view('pages.start')->with(['name' => $this->name]);
    }
    
    public function profi()
    {
        $this->name = 'profi';
        return view('pages.profi')->with(['name' => $this->name]);
    }

    public function helpme()
    {
        $this->name = 'helpme';
        return view('pages.helpme')->with(['name' => $this->name]);
    }

    public function vip()
    {
        $this->name = 'vip';
        return view('pages.vip')->with(['name' => $this->name]);
    }
}

