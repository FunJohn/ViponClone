<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use Session;
use DB;

class VpGetCodeController extends Controller
{
    public function index()
    {
        return view('vp-getcode');
    }
}