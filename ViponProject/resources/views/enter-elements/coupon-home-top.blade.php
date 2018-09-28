<?php
$isCode=strtolower($c['type']) === 'coupon code';
$aff_url = $s['affiliate_url']?:$s['store_url'];
$linkGo = url("/coupon-detail/{$c['go']}/" . str_slug($c['title'], '-') . "/" . $s['alias']);
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 coupon">
	<div class="featured">
		<div class="featured-mask">
			<p>FEATURED</p>
		</div>
		<div class="logo">
			<div class="logo-img">
				<a href="{{url('/' . $s['alias'])}}" ><img src="{{$s['logo']}}" alt="{{$s['name']}}"></a>
			</div>
		</div>
		<div class="description">
			<p class="title">
				<a href="{{url('/' . $s['alias'])}}"> {{$c['title']}}</a>
			</p>
		</div>
		<div class="meta clearfix">
			<i class="flaticon-interface"></i>
			<span>Coupon</span>
			<span class="pull-right">{{date('d M Y h:i a',strtotime($c['expire_date']))}}</span>
			<i class="flaticon-clock-circular-outline pull-right"></i>
		</div>
	</div>
</div>