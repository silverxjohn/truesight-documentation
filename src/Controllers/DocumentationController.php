<?php

namespace Truesight\Documentation\Controllers;

use Illuminate\Routing\Controller as BaseController

class DocumentationController extends BaseController
{
    public function tableOfContents()
    {
        return view('documentations::tableofcontents.index');
    }

    public function gettingStarted()
    {
        return view('documentations::gettingstarted.index');
    }
}
