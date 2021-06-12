<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function welc()
    {
        return view('pages.welcome');
    }

    public function articles()
    {
        return view('pages.articleview');
    }

}
