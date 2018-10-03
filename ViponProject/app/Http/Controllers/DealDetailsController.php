<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use Session;
use DB;

class DealDetailsController extends Controller
{
    public function index()
    {
        return view('vp-dealdetails');
    }
}