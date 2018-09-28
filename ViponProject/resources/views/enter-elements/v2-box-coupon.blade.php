<?php
if(isset($store)) $s = $store ;
$isCode=strtolower($c['type']) === 'coupon code';
$strCode = $isCode?'PROMO CODE':'SALE';
$aff_url = $s['affiliate_url']?:$s['store_url'];
$linkGo = url("/coupon-detail/{$c['go']}/" . str_slug($c['title'], '-') . "/" . $s['alias']);

?><div class="coupon-items" data-coupon-card-type="code" data-trending-page="1">
    <div class="wrap-items row">
        <div class="col-xl-2 col-sm-2 col-md-2 box-sale valign-wrapper">
            <div class="type-content-wrapper valign-wrapper{{$isCode?' type-cp':''}}">
                <div class="item-middle">
                    @if($c['discount'] != '' && $c['discount'] == 100 && $c['currency'] == '%')
                        <p class="short-text">Free</p>
                    @elseif($c['discount'] != '' && $c['discount'] > 0)
                        <p class="short-text disc{{isset($c['discount']{4})?' sm-5':''}}">{{$c['discount']}}{{$c['currency']}}<br/><span>OFF</span></p>
                    @else
                        @if (strtolower($c['type']) === 'free shipping')
                            <p class="short-text">Free<br/><span class="f-small">Shipping</span></p>
                        @else
                            <p class="short-text gr-off">Great<br/><span>Offer</span></p>
                        @endif
                    @endif
                    <p class="coupon-type">{{$strCode}}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-sm-2 col-md-2 logo-wrapper valign-wrapper">
            <span class="item-middle"><img src="{{$store['logo']}}" alt="{{$store['name']}}"></span>
        </div>
        <div class="col-xl-5 col-sm-5 col-md-5 details">
            <div class="coupons-description">
                <a title="{{$s['name']}}" rel="nofollow" itemprop="name" class="link-title title get-deal-btn popup-get-code" data-link="{{$linkGo}}" data-affiliate="{{ $aff_url }}">{{$c['title']}}</a>
                @if(isset($c['description']{0}))
                    <div class="text" itemprop="description">
                        <p class="limit">
                            {{$c['description']}}
                        </p>
                    </div>
                @endif
            </div>
            <div class="stats col-action">
                <div class="stat-line-wrapper">
                    @if($c['verified'])
                        <span class="stat-line-verify">
                                    <span class="verified">
                                            <i class="fa fa-chevron-circle-down"></i>
                                            <span class="verified">Verified </span>
                                        @if(!empty($c['exclusive']))
                                            <i class="fa fa-chevron-circle-down"></i>
                                            <span class="verified">Exclusive </span>
                                        @endif
                                    </span>
                                </span>
                    @elseif(!empty($c['expire_date']))
                        <span class="stat-line">Expires {{date('d M Y h:i a',strtotime($c['expire_date']))}}</span>
                    @endif
                    <span class="stat-used">
								{{--@if(!isset($c['number_used'])) {{rand(500,2000)}} @else {{$c['number_used']}} @endif Used--}}
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-3 col-md-3 get-coupon valign-wrapper">
            <div class="items-middle actions center">
                <div class="btn-peel-container center action-wrap">
                    @if($isCode)
                        <button class="btn-primary btn-coupon button btn no-shadow click popup-get-code" data-link="{{$linkGo}}" data-affiliate="{{$aff_url}}">View Code <span class="peel"></span>
                            <span class="reveal valign-wrapper">{{$c['code']}}</span></button>
                    @else
                        <button class="btn btn-primary btn-coupon button no-shadow click popup-get-code" data-link="{{$linkGo}}" data-affiliate="{{$aff_url}}">View Sale</button>
                    @endif
                    <a class="hidden voucher" coupon_id="{{$c['go']}}"></a>
                </div>
            </div>
        </div>
    </div>
</div>