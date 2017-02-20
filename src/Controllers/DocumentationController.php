<?php

namespace Truesight\Documentation\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {

    }

    public function tableOfContents()
    {
        return view('documentations::tableofcontents.index');
    }

    public function gettingStarted()
    {
        return view('documentations::gettingstarted.index');
    }
}
