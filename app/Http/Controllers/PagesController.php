<?php

namespace App\Http\Controllers;

use DB;
use App\content;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function services()
    {
        $images = content::all();

        return view('pages.services', compact('images'));
    }
    public function erecycle()
    {
        return view('pages.elecrecyc');
    }
    public function frecycle()
    {
        return view('pages.furnrecyc');
    }
    public function milequip()
    {
        return view('pages.militaryequip');
    }
   public function create(content $content)
    {
        // $content = content::all();

        return view('pages.create', compact('content'));
    }
    public function show(content $content)
    {
        // $contents = content::find($id);

        return view('pages.show', compact('content'));
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
