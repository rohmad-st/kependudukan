<?php

namespace App\Http\Controllers;

/**
 * Class AngularController
 *
 * @package App\Http\Controllers
 */
class AngularController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function serveApp()
    {
        return view('index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function unsupported()
    {
        return view('unsupported_browser');
    }
}
