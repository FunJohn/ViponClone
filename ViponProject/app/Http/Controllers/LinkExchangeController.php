<?php

namespace App\Http\Controllers;
use DB;
use Response;


class LinkExchangeController extends Controller {


    public function index() {
        $element = DB::table('linkexchanges')
            ->select('storename','storehomepage','description')
            ->where('storename','<>','[BOGO]Link Exchange')
            ->get();
        $linkexchange = DB::table('linkexchanges')
            ->select('storename','description')
            ->where('storename','[BOGO]Link Exchange')
            ->get();

        $seoConfig = [
            '_title' => 'Link Exchange',
            '_metaDescription' => ' Daily Coupons & Discounts - CouponMarathon.com'
        ];
        return view('home-linkexchange', ['element' => $element],['linkexchange' => $linkexchange],$seoConfig);
    }
}