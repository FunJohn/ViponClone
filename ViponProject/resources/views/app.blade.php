<?php
$domain_lower = $GLOBALS['domain_lower'];
$domain_upper = $GLOBALS['domain_upper'];
$asset_img = $GLOBALS['asset_domain'];
?>
@include('enter-elements.header')
<div class="main-body">
    @yield('content_main')
</div>
@include('enter-elements.footer')