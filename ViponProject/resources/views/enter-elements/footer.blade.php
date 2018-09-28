<footer id="footer">
    <div class="container transmit">
        <div>
            <div class="col-lg-4 gift clearfix col-md-4">
                <div class="pull-left">
                    <span></span>
                    <h4>Sellers Share Deals</h4>
                    <p>Amazon sellers share deals and coupons for a huge selection of products, most 50% off or
                        more.</p>
                </div>
                <div class="pull-right">
                    <span></span>
                </div>
            </div>
            <div class="col-lg-4 gift clearfix col-md-4">
                <div class="pull-left">
                    <span></span>
                    <h4>Community Publish</h4>
                    <p>Our community publishes the best deals we receive from the most respected sellers.</p>
                </div>
                <div class="pull-right">
                    <span></span>
                </div>
            </div>
            <div class="col-lg-4 gift clearfix col-md-4">
                <div class="pull-left">
                    <span></span>
                    <h4>Shoppers Get Deals</h4>
                    <p>Shoppers get the best deals on the web and can save money everyday with fresh deals.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="download">
        <div class="download-container">
            <div class="pull-left app_store">
                <a href="https://itunes.apple.com/us/app/vipon-amazon-coupon/id1272023223?mt=8" target="_blank">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <p class="app-store">Download on the</p>
                        <p>App Store</p>
                    </div>
                </a>
            </div>
            <div class="pull-left app_play">
                <a href="https://play.google.com/store/apps/details?id=com.vipon" target="_blank">
                    <div>
                        <span></span>
                    </div>
                    <div>
                        <p class="app-store">Download on the</p>
                        <p>Google Play</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer-left clearfix">
        <ul class="clearfix list-unstyled">
            <li class="pull-left">
                <a href="https://vipondeals.postaffiliatepro.com/affiliates/" target="_blank">Vipon Seller
                    Affiliates</a>
            </li>
            <li class="pull-left">
                <a href="https://www.vipon.com/about-vipon" target="_blank">What is Vipon</a>
            </li>
            <li class="pull-left">
                <a href="https://blog.vipon.com/">Blog</a>
            </li>
            <li class="pull-left">
                <a href="https://seller.vipon.com/account/login" target="_blank"><span>Seller Central</span></a>
            </li>
            <li class="pull-left">
                <a href="https://seller.vipon.com/main/index?from=advertising#firstAnchor" target="_blank"><span>Advertise on Vipon</span></a>
            </li>
            <li class="pull-left">
                <a href="https://www.vipon.com/privacy-policy" target="_blank">Privacy Policy</a>
            </li>
            <li class="pull-left">
                <a href="https://www.vipon.com/terms-of-service" target="_blank">Terms of Service</a>
            </li>
            <li class="pull-left">
                <a href="https://www.facebook.com/vipondeals/" title="ART" target="_blank">Follow us on Facebook</a>
            </li>
        </ul>
    </div>
    <div class="footer-right">© Copyright 2018 Vipon. All Rights Reserved.</div>
</footer>
<script>
    $(document).on('click', '.popup-get-code', function(){
        var affiliate = $(this).attr('data-affiliate');
        var data_link = $(this).attr('data-link');
        window.open(data_link,'_blank');
        location.href = affiliate;
    });
    $('body').on('click','.location', function(e){
        e.preventDefault();
        location.href=$(this).attr('data-href');
        return false;
    });
    $('body').on('click','.loc-open', function(e){
        e.preventDefault();
        window.open($(this).attr('data-href'),'blank');
        return false;
    });
    var moretext = "More";
    var lesstext = "Less";
    var ellipsestext = "...";
    function reMoreText(showChar = 200, thisClass = '.more'){ // How many characters are shown by default
        $(thisClass).each(function() {
            var content = $(this).html();
            if($(this).find('.morelink').length<1) {
                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }
            }

        });
    }

    /* show more text neu tràn box */
    function moreTextBox(thisClass=".limit") {
        $(thisClass).each(function () {
            if (!$(this).hasClass('limited')&&this.clientWidth < this.scrollWidth) $('<a class="toggle-description active moreOver">More</a>').insertBefore(this);
            $(this).addClass('limited');
        });
        $(".coupon-items").on('click', '.moreOver', function () {
            if (!$(this).hasClass('less')) {
                $(this).addClass('less').next('.limit').removeClass('limit').addClass('nolimit');
                $(this).children('p').text('Close');
            } else {
                $(this).removeClass('less').next('.nolimit').removeClass('nolimit').addClass('limit');
                $(this).children('p').text('Read More');
            }
            $(this).remove();
        });
    }
    $(document).ready(function(){
        moreTextBox();
    });
    /* show more text neu tràn box */
    function moreTextBoxLx(thisClass=".limit") {
        $(thisClass).each(function () {
            if (!$(this).hasClass('limited')&&this.clientWidth < this.scrollWidth) $('<a class="toggle-description active moreOver">More</a>').insertBefore(this);
            $(this).addClass('limited');
        });
        $(".box-linkexchange").on('click', '.moreOver', function () {
            if (!$(this).hasClass('less')) {
                $(this).addClass('less').next('.limit').removeClass('limit').addClass('nolimit');
                $(this).children('p').text('Close');
            } else {
                $(this).removeClass('less').next('.nolimit').removeClass('nolimit').addClass('limit');
                $(this).children('p').text('Read More');
            }
            $(this).remove();
        });
    }
    $(document).ready(function(){
        moreTextBoxLx();
    });
</script>
@yield('scripts-footer')
{!! $settings['footer'] !!}
</body>
</html>