@extends('app')

@section('content_main')
    <div id="product-page" style="text-align: center;">
        <div class="container"
             style="width: 100%;max-width: 1750px;padding: 60px 15px 80px 15px;margin: 0px auto;text-align: center;">
            <div class="row">
                <div class="product-expiry-notify">
                    <p>
                        <img class="clock"
                             src="img/clock.png"
                             style="width: 17.2px;margin: 0;padding: 0;">
                        <span id="productExpiry">
Coupon Code Expires In <b class="minutes">1 days</b> </span>
                        <input type="hidden" name="expiry" value="154966">
                        <input type="hidden" id="is_instant_deal" value="1">
                    </p>
                </div>
                <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12 col-lg-4 col-lg-offset-1 pull-left">
                    <div>
                        <div style="max-height: 457px;min-height:380px;text-align: center;">
                            <img src="img/315S81UhOeL.jpg"
                                 style="max-height: 458px;margin:0 auto;" class="img-responsive big">
                        </div>
                        <div class="fba has-tooltip" title="Product is fulfilled by Amazon"
                             data-original-title="Product is fulfilled by Amazon">FBA
                        </div>
                        <ul class="list-unstyled" style="margin-top: 4px;margin-left: 10px">
                            <li>
                                <a href="https://www.amazon.com/Solarxia-Rechargeable-Samsung-Photography-Lighting/dp/B07GBVNRWP"
                                   onclick="bing_open_in_amazon();"
                                   style="text-decoration: none;line-height: 40px;color: #000000;font-size: 10px;"
                                   target="_blank">Open in Amazon</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <div class="product-info">
                        <div class="product-category">
                            <img class="flag"
                                 src="img/om.png">Camera
                            & Photo
                            <div class="btn-group pull-right">
                                <a href="javascript:;"> <span style="color:#8E8E8E;text-decoration: none;font-size:15px;"
                                                              class="glyphicon glyphicon-thumbs-down" id="thumbs-down-tips"
                                                              aria-hidden="true">0</span> </a>
                            </div>
                            <div class="btn-group pull-right" style="margin-right:10px;">
                                <a href="javascript:;"> <span style="color:#3FC5CB;text-decoration: none;font-size:15px;"
                                                              class="glyphicon glyphicon-thumbs-up" id="thumbs-up-tips"
                                                              aria-hidden="true">11</span> </a>
                            </div>
                        </div>
                        <p class="product-title">Selfie Ring Light, Solarxia Phone Camera Light Rechargeable Selfie LED
                            Lights with Makeup Mirror for iPhone Camera iPad Samsung Galaxy Photography Video Lighting&nbsp;(Pink)</p>
                        <p class="shipping" style="text-align: left">Fulfilled by Amazon</p>
                        <p class="product-discount">50% Discount</p>
                        <p class="product-price"><s>$9.99</s><span>$5.00</span></p>
                        <div class="group-span" data-toggle="modal" data-target="#groupBuy" style="display: none;">
                            <div>
                                <span id="groupName">Group Coupon:</span>
                                <span id="groupPrice"></span>
                            </div>
                            <div class="group-share">
                                <span>APP</span>
                                <span>Only</span>
                            </div>
                        </div>
                        <div class="deal_get request-div">

                            <a class="btn_a request-btn review_now_5360190" style="cursor: pointer;float: left;"
                               id="product-request-btn" href="https://www.vipon.com/login">
                                Get Coupon
                            </a>
                            <div id="shareBtn" class="share-btn"
                                 style="float: left; margin-top: 14px;margin-right: 14px; display: none;">SHARE<img
                                        src="img/in.png">
                            </div>
                            <div class="sharethis-inline-share-buttons st-center  st-inline-share-buttons st-animated"
                                 style="float: left; margin-top: 3px; margin-left: 12px;" id="st-1">
                                <div class="st-total st-hidden">
                                    <span class="st-label"></span>
                                    <span class="st-shares">
    Shares
  </span>
                                </div>
                                <div class="st-btn st-first  st-remove-label" data-network="facebook"
                                     style="display: inline-block;">
                                    <svg fill="#fff" preserveAspectRatio="xMidYMid meet" height="1em" width="1em"
                                         viewBox="0 0 40 40">
                                        <g>
                                            <path d="m21.7 16.7h5v5h-5v11.6h-5v-11.6h-5v-5h5v-2.1c0-2 0.6-4.5 1.8-5.9 1.3-1.3 2.8-2 4.7-2h3.5v5h-3.5c-0.9 0-1.5 0.6-1.5 1.5v3.5z"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="st-btn  st-remove-label" data-network="twitter" style="display: inline-block;">
                                    <svg fill="#fff" preserveAspectRatio="xMidYMid meet" height="1em" width="1em"
                                         viewBox="0 0 40 40">
                                        <g>
                                            <path d="m31.5 11.7c1.3-0.8 2.2-2 2.7-3.4-1.4 0.7-2.7 1.2-4 1.4-1.1-1.2-2.6-1.9-4.4-1.9-1.7 0-3.2 0.6-4.4 1.8-1.2 1.2-1.8 2.7-1.8 4.4 0 0.5 0.1 0.9 0.2 1.3-5.1-0.1-9.4-2.3-12.7-6.4-0.6 1-0.9 2.1-0.9 3.1 0 2.2 1 3.9 2.8 5.2-1.1-0.1-2-0.4-2.8-0.8 0 1.5 0.5 2.8 1.4 4 0.9 1.1 2.1 1.8 3.5 2.1-0.5 0.1-1 0.2-1.6 0.2-0.5 0-0.9 0-1.1-0.1 0.4 1.2 1.1 2.3 2.1 3 1.1 0.8 2.3 1.2 3.6 1.3-2.2 1.7-4.7 2.6-7.6 2.6-0.7 0-1.2 0-1.5-0.1 2.8 1.9 6 2.8 9.5 2.8 3.5 0 6.7-0.9 9.4-2.7 2.8-1.8 4.8-4.1 6.1-6.7 1.3-2.6 1.9-5.3 1.9-8.1v-0.8c1.3-0.9 2.3-2 3.1-3.2-1.1 0.5-2.3 0.8-3.5 1z"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="st-btn  st-remove-label" data-network="pinterest" style="display: none;">
                                    <svg fill="#fff" preserveAspectRatio="xMidYMid meet" height="1em" width="1em"
                                         viewBox="0 0 40 40">
                                        <g>
                                            <path d="m37.3 20q0 4.7-2.3 8.6t-6.3 6.2-8.6 2.3q-2.4 0-4.8-0.7 1.3-2 1.7-3.6 0.2-0.8 1.2-4.7 0.5 0.8 1.7 1.5t2.5 0.6q2.7 0 4.8-1.5t3.3-4.2 1.2-6.1q0-2.5-1.4-4.7t-3.8-3.7-5.7-1.4q-2.4 0-4.4 0.7t-3.4 1.7-2.5 2.4-1.5 2.9-0.4 3q0 2.4 0.8 4.1t2.7 2.5q0.6 0.3 0.8-0.5 0.1-0.1 0.2-0.6t0.2-0.7q0.1-0.5-0.3-1-1.1-1.3-1.1-3.3 0-3.4 2.3-5.8t6.1-2.5q3.4 0 5.3 1.9t1.9 4.7q0 3.8-1.6 6.5t-3.9 2.6q-1.3 0-2.2-0.9t-0.5-2.4q0.2-0.8 0.6-2.1t0.7-2.3 0.2-1.6q0-1.2-0.6-1.9t-1.7-0.7q-1.4 0-2.3 1.2t-1 3.2q0 1.6 0.6 2.7l-2.2 9.4q-0.4 1.5-0.3 3.9-4.6-2-7.5-6.3t-2.8-9.4q0-4.7 2.3-8.6t6.2-6.2 8.6-2.3 8.6 2.3 6.3 6.2 2.3 8.6z"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="st-btn  st-remove-label" data-network="email" style="display: none;">
                                    <svg fill="#fff" preserveAspectRatio="xMidYMid meet" height="1em" width="1em"
                                         viewBox="0 0 40 40">
                                        <g>
                                            <path d="m33.4 13.4v-3.4l-13.4 8.4-13.4-8.4v3.4l13.4 8.2z m0-6.8q1.3 0 2.3 1.1t0.9 2.3v20q0 1.3-0.9 2.3t-2.3 1.1h-26.8q-1.3 0-2.3-1.1t-0.9-2.3v-20q0-1.3 0.9-2.3t2.3-1.1h26.8z"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="st-btn st-last  st-remove-label" data-network="sharethis"
                                     style="display: inline-block;">
                                    <svg fill="#fff" preserveAspectRatio="xMidYMid meet" height="1em" width="1em"
                                         viewBox="0 0 40 40">
                                        <g>
                                            <path d="m30 26.8c2.7 0 4.8 2.2 4.8 4.8s-2.1 5-4.8 5-4.8-2.3-4.8-5c0-0.3 0-0.7 0-1.1l-11.8-6.8c-0.9 0.8-2.1 1.3-3.4 1.3-2.7 0-5-2.3-5-5s2.3-5 5-5c1.3 0 2.5 0.5 3.4 1.3l11.8-6.8c-0.1-0.4-0.2-0.8-0.2-1.1 0-2.8 2.3-5 5-5s5 2.2 5 5-2.3 5-5 5c-1.3 0-2.5-0.6-3.4-1.4l-11.8 6.8c0.1 0.4 0.2 0.8 0.2 1.2s-0.1 0.8-0.2 1.2l11.9 6.8c0.9-0.7 2.1-1.2 3.3-1.2z"></path>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="product-notify" style="display: none"></div>
                            <div id="recaptcha" class="g-recaptcha" data-sitekey="6Ld-OTEUAAAAAEeiJ-kMx0w3RRxxsQuh3D6whC-Y"
                                 data-callback="onSubmit" data-size="invisible">
                                <div class="grecaptcha-badge" data-style="bottomright"
                                     style="width: 256px; height: 60px; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px;">
                                    <div class="grecaptcha-logo">
                                        <iframe src="anchor.html"
                                                width="256" height="60" role="presentation" name="a-4tend1piub9r"
                                                frameborder="0" scrolling="no"
                                                frameborder="0" scrolling="no"
                                                frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div>
                                    <div class="grecaptcha-error"></div>
                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                              class="g-recaptcha-response"
                                              style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                                </div>
                            </div>
                            <p style="margin-top: 20px;margin-bottom: -19px;color: #777;font-size: 12px;border: 1px dashed #e5e5e5;padding: 5px;">
                                The descriptions and pictures of products on Vipon are for reference only. Please fully view
                                the product listing on Amazon before purchasing.</p>
                            <div class="shop_name clearfix ">
                                <div class="desc-div">
                                    <p class="desc-title">Description</p>
                                    <p id="descContent" class="desc-content clamp-this-module">
                                        Color:Pink
                                        Color:Pink
                                        [100% CUSTOMER SERVICE FOR YOU]<br> ❤ Please contact us when you have any problem
                                        before/after you use the selfie light any time. <br> [MULTIFUCTIONAL SELFIE RING]
                                        <br> ❤ It can help you bright your face when you ready to selfie or make live videos
                                        and video chat with friends,ect. <br>❤ You can use it as a light when you are in the
                                        dark. <br>❤ It’s also can use as a mini portable battery in emergency with 800 mAh
                                        battery capacity to keep your phones operating. <br>❤ It can be work with
                                        iphone5/5s/6/6s/6 plus/7/8/X, PC, Samsung, iPad, HUAWEI Honor, HTC, LG, XIAOMI, mac
                                        books, ect. <br><br> [PRODUCT PARAMETERS]<br> Wide range of the clip: 0.43 inch.
                                        <br> LED light bulbs on the surface: 52 pcs<br> Max out power: 3W <br> Continuous
                                        light in full power: ≧145 minutes<br> Item Weight：82g<br><br> [PACKAGE INCLUDES]<br>
                                        1 * Selfie Ring Light<br> 1*USB Cable<br> 1*Instruction<br> 1*Ring Bracket (300 pcs
                                        only)
                                    </p>
                                    <span id="showMore"
                                          style="color: #000;font-weight: 600;display: block;text-decoration: none;cursor: pointer">-More</span>
                                </div>
                            </div>
                        </div>
                        <div class="voucher-div" style="display:none;padding:14px;position: relative;">
                            <div style="display:none;position: absolute;top: 20px;right: 20px;font-size: 24px;color: #666;">
                                ×
                            </div>
                            <div id="show_tips" style="display:block;">
                                <div style="postion:center;">
                                    <div style="color:#3fc5cb;font-size:36px;font-family:inherit;">Congratulations!</div>
                                    <span style="color:#3fc5cb;font-size:20px;font-family:inherit;" id="save_price"></span>
                                </div>
                                <div class="btn-group pull-right" style="margin-right:130px; display: none">
                                    <a class="dropdown-toggle" data-toggle="dropdown"
                                       style="color:#8E8E8E;text-decoration: none;">
                                    <span id="thumbs-down" class="glyphicon glyphicon-thumbs-down" aria-hidden="true"
                                          style="font-size:30px;margin:5px 0px;"></span>
                                    </a>
                                </div>
                                <div class="btn-group pull-right" style="margin-right:10px;display: none">
                                    <a style="color:#3FC5CB;text-decoration: none;"><span
                                                style="font-size:30px;margin:5px 0px;" class="glyphicon glyphicon-thumbs-up"
                                                id="thumbs-up" aria-hidden="true"></span> </a>
                                </div>
                            </div>
                            <div style="padding:15px 10px;">
                                <p class="voucher-notify" style="padding: 5px 0px;">Copy the code below and paste it at
                                    checkout.<img
                                            src="img/jj.png"
                                            alt=""></p>
                                <p class="voucher-show" style="margin-top:16px;">
                                    <span id="voucherContent">&nbsp;</span>
                                    <button id="copyBtn" class="pull-right" data-clipboard-target="#voucherContent"
                                            style="cursor: pointer" title="Copy to clipboard"
                                            onclick="fbq('track', 'copy');">Copy
                                    </button>
                                </p>
                                <p class="go-to-amazon" style="margin-top:30px;"><a style="font-size: 16px;"
                                                                                    href="https://www.amazon.com/Solarxia-Rechargeable-Samsung-Photography-Lighting/dp/B07GBVNRWP"
                                                                                    target="_blank"
                                                                                    onclick="fbq('track', 'purchase', {currency: 'USD', value: '$5.00'});">GO
                                        TO AMAZON</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="feature-deal">
                    <div class="row featured-deals" style="background-color: #f1f1f1;">
                        <div class="col-xs-1 col-sm-1 	col-md-1 col-lg-1"></div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 feature-contain"
                             style="height: 493px;overflow: hidden;">
                            <h4 style="margin: 35px 0 45px;text-align: left;"><img
                                        src="img/zhekou.png"
                                        style="width: 20px;margin-right: 5px;">FEATURED DEALS</h4>
                            <div class="box-details" style="margin: 0px auto; overflow: hidden; width: 932px;">
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5358832">
                                            <a href="https://www.vipon.com/product/5358832" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/61yTrZn+2fL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5358832" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    Storage Container&nbsp;Organizer bin Collapsible,Large Foldable&nbsp;Linen
                                                    Fabric Gray Box&nbsp;with Removable Lid and Handles, for
                                                    Home,Baby,Office,Nursery,Closet,Bedroom,Living Room,NO Peculiar Smell
                                                    [1-Pack] </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$8.82 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">17.99</del>
                                            <div class="feature_deal_a_5358832">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
51% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5361696">
                                            <a href="https://www.vipon.com/product/5361696" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/41GXOnzZRyL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5361696" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    YOYOB 2018 Upgraded Version of Portable Water Cup, Collapsible Silicone
                                                    Kettle </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$3.90 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">12.99</del>
                                            <div class="feature_deal_a_5361696">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
70% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5366714">
                                            <a href="https://www.vipon.com/product/5366714" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/4108F+peCvL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5366714" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    ORMAY Women's Waffle Knit Tunic Blouse Button Up Tie Knot Shirt Cardigan
                                                    Sweater Tops </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$7.19 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">17.99</del>
                                            <div class="feature_deal_a_5366714">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
60% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5355762">
                                            <a href="https://www.vipon.com/product/5355762" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/51INBg0dPpL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5355762" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    Nicoko 18w 4Inch Cree Led Work Light bar with Multi-color Chasing RGB
                                                    Halo 10 Solid colors Over 72 Flashing Modes Offroad Pods Lights LED
                                                    Driving Lamp Fog Lights for Truck Jeep 1 Year Warranty Pack 2 </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$32.99 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">65.99</del>
                                            <div class="feature_deal_a_5355762">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
50% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5353340">
                                            <a href="https://www.vipon.com/product/5353340" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/51GSmjNZ+rL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5353340" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    BinaryABC Baby Sleeping Sign, Baby Do Not Disturb Door Hanger Sign, Baby
                                                    Room Decorative Wooden Plaques </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$3.99 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">7.99</del>
                                            <div class="feature_deal_a_5353340">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
50% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-contain" style="padding: 0 10px 55px;float: left;width: 233px;">
                                    <div style="background-color: white;padding:0 10px;border-radius: 4px;border: 1px solid #ccc;">
                                        <p class="boxTop" style="color:#ff0000;text-align: left;"></p>
                                        <div class="img-container" style="height:160px;padding: 10px 20px;" id="5346168">
                                            <a href="https://www.vipon.com/product/5346168" target="_blank"
                                               style="display: flex;width: 100%;height: 100%;justify-content: center;align-items: center;">
                                                <img class="product-image"
                                                     src="img/51FNl36i+vL.jpg"
                                                     style="max-width:90% ;max-height: 80%;">
                                            </a>
                                        </div>
                                        <div class="title-container">
                                            <a href="https://www.vipon.com/product/5346168" target="_blank">
                                                <p class="title" onclick=""
                                                   style="padding: 0; height: 44px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                    UMODE Vintage Style Genuine Leather Large Capacity Wallet Organizer for
                                                    Women </p>
                                            </a>
                                            <p class="product-group" style="padding: 0;">
                                                <img class="flag"
                                                     src="img/om.png">
                                                <span>Fulfilled by merchant</span>
                                            </p>
                                        </div>
                                        <div class="price-box" style="padding: 0;padding-bottom: 10px;">
<span class="price" style="font-size:24px;color: #1c1c1d;">
$16.00 </span>
                                            <del class="currency" style="font-size: 14px;color: #898989;">31.99</del>
                                            <div class="feature_deal_a_5346168">
<span style="display:inline-block;width:70px;font-size: 14px;margin-top: 10px;color: #f44c44;border: 1px dashed #f44c44;">
50% OFF</span>
                                                <a class="btn-review"
                                                   style="display: inline-block;width: 56%;font-size: 16px;height: 35px;margin-left: 10px;min-height: 30px;line-height: 35px;"
                                                   href="https://www.vipon.com/login">Get Coupon </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 	col-md-1 col-lg-1"></div>
                    </div>
                    <script type="text/javascript">
                        function boxContain() {
                            var c_container = $('.feature-contain').width();
                            var box_container = $('.box-contain').width() + 20;
                            var row = Math.floor(c_container / box_container);
                            $('.box-details').width(box_container * row)
                        }

                        boxContain();
                        window.onresize = boxContain;
                    </script>
                </div>
            </div>
            <div class="fixed-box">
                <span class="fixed-box-close">×</span>
                <img src="img/V0621_230px.png"
                     style="width: 100%;">
                <a href="https://itunes.apple.com/us/app/vipon-amazon-coupon/id1272023223?mt=8" target="_blank"><img
                            src="img/AS_130px.png"></a>
                <a href="https://play.google.com/store/apps/details?id=com.vipon" target="_blank"><img
                            src="img/GP_130px.png"></a>
            </div>
        </div>

        <div class="modal fade" id="groupBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <img style="border-radius: 5px;"
                             src="img/coom-soon-modal.jpg"
                             alt="">
                        <ul class="group-buy">
                            <li><a href="https://play.google.com/store/apps/details?id=com.vipon"><img
                                            src="img/coom-soon-modal-play.png"
                                            alt="" srcset=""></a></li>
                            <li><a href="https://itunes.apple.com/us/app/vipon-amazon-coupon/id1272023223?mt=8"><img
                                            src="img/coom-soon-modal-store.png"
                                            alt="" srcset=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="waitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
             xmlns="http://www.w3.org/1999/html">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <i class="fa fa-spin fa-spinner"></i> Please Wait...
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="video-container" style="padding-top:33px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <i class="fa fa-spin fa-spinner"></i> Please Wait...
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" style="margin-top: 150px;width: 992px;">
                <div class="modal-content">
                    <div class="modal-body" style="padding: 0px;text-align: center;">
                        <i class="fa fa-spin fa-spinner"></i> Please Wait...
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modalName" style="text-align:center">Get our BEST offers straight to your inbox!</h4>
                    </div>
                    <div class="modal-body">
                        <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off"
                               style="width: 250px; margin: 0 auto 15px auto;">
                        <div style="text-align:center">
                            <button type="button" class="btn btn-primary" style="width: 250px;"
                                    onclick="mc_subscribe('mc-optin-footer')">Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="postSignUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">You've signed up!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Congrats! You are now a member!</p>
                        <p>Start requesting vouchers for promo codes by clicking the <strong>Request Deal</strong> buttons
                            on products you want.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="show_last_product();">
                            Got it!
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="postSignInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">You've signed in!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Start requesting vouchers for promo codes by clicking the <strong>Request Deal</strong> buttons
                            on products you want.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="show_last_product();">
                            Got it!
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sellerSignInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Seller Sign In</h4>
                    </div>
                    <div class="modal-body">
                        <p>Sellers of Amazon products are required to sign in at <a href="https://www.amztracker.com/">www.amztracker.com</a>
                        </p>
                        <p>More information about placing your products on this site can be found <a
                                    href="https://www.vipon.com/product/join-as-seller.php">here</a>.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a href="https://www.amztracker.com/" class="btn btn-primary">Go to www.amztracker.com</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">How Can We Help You?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact_email_name">Your Name</label>
                            <input type="text" class="form-control" id="contact_email_name" name="contact_email_name"
                                   placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="contact_email_address">Your Email</label>
                            <input type="text" class="form-control" id="contact_email_address" name="contact_email_address"
                                   placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="contact_email_body">Question</label>
                            <textarea class="form-control" id="contact_email_body" name="contact_email_body" rows="6"
                                      placeholder=""></textarea>
                        </div>
                        <div class="please-wait">
                            <i class="fa fa-spin fa-spinner"></i> Please Wait...
                        </div>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="contact_email_send()">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reportSellerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Report a Problem</h4>
                    </div>
                    <div class="modal-body">
                        <p>Before you report a seller, please read important information found <a
                                    href="http://help.amzreviewtrader.com/article/124-reporting-issues-with-sellers"
                                    target="_blank">here</a>.</p>
                        <br>
                        <select class="form-control" name="report-reason" style="margin-bottom: 15px;">
                            <option value="Select Report Reason...">Select Report Reason...</option>
                            <option value="Code is not valid or invalid" selected="selected">Code is not valid or invalid
                            </option>
                            <option value="Code has expired">Code has expired</option>
                            <option value="Code cannot be applied to your purchase">Code cannot be applied to your
                                purchase
                            </option>
                            <option value="Price or discount is not as advertised">Price or discount is not as advertised
                            </option>
                            <option value="Product currently unavailable or no link to buy">Product currently unavailable or
                                no link to buy
                            </option>
                            <option value="Code has not yet begun">Code has not yet begun</option>
                            <option value="Others">Others</option>
                        </select>
                        <textarea class="form-control" id="report-seller-reason" name="report_reason" rows="5"
                                  placeholder="Explain problem further here."></textarea>
                        <input type="hidden" name="request_id">
                        <input type="hidden" name="product_id">
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="report_seller_send()">Submit Report</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="voucherProblemsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Report a Problem</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you having problems purchasing a product with the supplied voucher? If so, please contact the
                            seller via the supplied email.</p>
                        <p>Also, please be patient. Sellers are pretty busy people and it can take awhile to respond to your
                            emails.</p>
                        <p><strong>After 2 days of receiving a voucher</strong> you can report the seller to us (using the
                            same button) if you cannot resolve this issue with the seller.</p>
                        <br>
                        <p>For more information <a
                                    href="http://help.amzreviewtrader.com/article/111-help-with-the-voucher-codes"
                                    target="_blank">click here</a>.</p>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Got it!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="hideRequestWaitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Thank you for your report!</h4>
                    </div>
                    <div class="modal-body">
                        <p>We have taken note and will also convey the problems to the seller on your behalf.</p>
                        <p>Usually the seller will rectify it soon, we suggest now you can remove this request from your
                            dashboard and choose another deal.</p>
                        <p>If you love this deal most, we suggest you can try to request this deal after 2 days.</p>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Got it!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reviewURLModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Purchased!</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="request_id">
                        <p>This will mark the product as purchased. The voucher will be permanently removed from your
                            dashboard shortly after. Are you sure?</p>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Oops, I haven't purchased this
                            yet.
                        </button>
                        <button type="button" class="btn btn-primary" onclick="submit_review_url()">Remove product</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName"></h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="requestBypassedModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Why Wasn't I Selected?</h4>
                    </div>
                    <div class="modal-body">
                        <p>You are essentially competing with a whole lot of other buyers when requesting to purchase a
                            product. The seller only has a limited amount of vouchers to give out too.</p>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Got It!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="jobApplicationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="vipon-dialog">
                        <form name="job_message">
                            <div class="job_content">
                                <div class="job_title">Apply for The Job</div>
                                <div class="job_detail_amztracker_message">
                                <textarea class="form-control" rows="8" id="job_application_message"
                                          name="job_application_message"
                                          onblur="if (value ==''){value='say some thing about why you are good for the job.'}"
                                          onfocus="if(value=='say some thing about why you are good for the job.'){value=''}">say some thing about why you are good for the job.</textarea>
                                </div>
                                <div class="btn_job_application">
                                    <button type="button" class="btn btn-primary btn-message" data-dismiss="modal"
                                            onclick="get_message();">Apply
                                    </button>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reportSellerProductPageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Report a Problem</h4>
                    </div>
                    <div class="modal-body">
                        <p>Before you report a product, please read important information found <a
                                    href="http://help.amzreviewtrader.com/article/124-reporting-issues-with-sellers#product"
                                    target="_blank">here</a>.</p>
                        <br>
                        <select class="form-control" name="report_reason" style="margin-bottom: 15px;">
                            <option value="Select Report Reason...">Select Report Reason...</option>
                            <option value="Price changed or incorrect">Price changed or incorrect</option>
                            <option value="Shipping price incorrect">Shipping price incorrect</option>
                            <option value="False original price">False original price</option>
                            <option value="Picture incorrect">Picture incorrect</option>
                            <option value="Wrong product category">Wrong product category</option>
                            <option value="Possible scam or dishonest">Possible scam or dishonest</option>
                            <option value="Other. Please explain.">Other. Please explain.</option>
                        </select>
                        <textarea class="form-control" name="report_reason" rows="5"
                                  placeholder="Explain problem further here. Detailed reports make it easier for us to investigate the matter."></textarea>
                        <input type="hidden" name="product_id">
                    </div>
                    <div class="modal-footer report-form" style="margin-top:0">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="report_seller_product_send()">Submit Report
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="jobRequestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="row" style="padding:20px;">
                        <div class="col-sm-12 col-xs-12">
                            <h3>Apply for The Job</h3>
                            <p class="error"
                               style="color: #f00; display: none; padding-bottom: 8px; text-align: center;"></p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <input id="skype-id" class="form-control" placeholder="Your skype ID.">
                                </div>
                            </form>
                            <form class="form-horizontal">
                                <div class="form-group">
                                <textarea id="message-txt" class="form-control" rows="3"
                                          placeholder="Say some thing about why you are good for the job."></textarea>
                                </div>
                                <button type="button" class="btn btn-primary pull-right" onclick="get_message();">Apply
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="jobCompleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="row" style="padding:20px;">
                        <div class="col-sm-12 col-xs-12">
                            <h3>Submit your work</h3>
                            <p class="error"
                               style="color: #f00; display: none; padding-bottom: 8px; text-align: center;"></p>
                            <form class="form-horizontal">
                                <input type="hidden" id="application-id" value="0">
                                <div class="form-group">
                                <textarea id="work-message-txt" class="form-control" rows="3"
                                          placeholder="If your work is done, make sure your employer receives it."></textarea>
                                </div>
                                <button type="button" class="btn btn-primary pull-right" onclick="submit_work_message();">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="productGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modalName">Select Product Groups</h4>
                    </div>
                    <div class="modal-body">
                        <p class="select-all"
                           onclick="$('#productGroupModal .modal-body .product-groups p').addClass('selected'); update_product_groups();">
                            Select All Groups</p>
                        <p class="select-none"
                           onclick="$('#productGroupModal .modal-body p').removeClass('selected'); update_product_groups();">
                            ✕</p>
                        <hr style="clear: both;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p class="product-group-option "
                                   onclick="$(this).toggleClass('selected'); update_product_groups();">Adult
                                    Products</p>
                            </div>
                        </div>
                        <div class="product-groups">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">
                                        Electronics, Computers & Office</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Women's
                                        Clothing & Shoes</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Cell
                                        Phones & Accessories</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Men's
                                        Clothing & Shoes</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Home
                                        & Garden</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">
                                        Jewelry</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Kitchen
                                        & Dining</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">
                                        Watches</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Pet
                                        Supplies</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">
                                        Handmade</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Beauty
                                        & Grooming</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Sports
                                        & Outdoors</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Health
                                        & Household</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">
                                        Automotive & Industrial</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Toys,
                                        Kids & Baby</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Other</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Women's
                                        Clothing & Shoes</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <p class="product-group-option "
                                       onclick="$(this).toggleClass('selected'); update_product_groups();">Adult
                                        Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin-top:0">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Suspend_Sellers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h8 class="modalName">Suspend</h8>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-xs-12">
                                <form class="form-horizontal" action="https://www.vipon.com/product/suspend_product.php"
                                      method="POST">
                                    <input type="hidden" name="product_id" id="model_id">
                                    <textarea class="form-control" id="suspend_reason" name="reason"
                                              placeholder="Suspend Sellers reason." rows="10"></textarea>
                                    <button type="button" class="btn btn-primary" onclick="suspend()"
                                            style="margin-top: 10px">Suspend Sellers
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <script type="text/javascript">
            $('.fixed-box-close').on('click', function () {
                $('.fixed-box').fadeOut(200);
            });

            function fix_box() {
                var widthl = $(window).width();
                if (widthl > 1500) {
                    $('.fixed-box').show();
                    $(".fixed-box a:nth-child(3)>img").attr('src', '/images/V0604-a.png');
                    $(".fixed-box a:nth-child(4)>img").attr('src', '/images/V0604-g.png')
                } else if (widthl <= 1500 && widthl > 992) {
                    $('.fixed-box').show();
                    $(".fixed-box a:nth-child(3)>img").attr('src', './img/AS_130px.png');
                    $(".fixed-box a:nth-child(4)>img").attr('src', './img/GP_130px.png')
                } else {
                    $('.fixed-box').hide();
                }
            };
            fix_box();
            $(window).resize(function () {
                fix_box();
            });


            var browser = {
                versions: function () {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            };

            if (browser.versions.mobile || browser.versions.ios || browser.versions.iPhone) {//判断是否是移动设备打开。browser代码在下面
                window.location.href = "https://m.vipon.com/#/details/5360190&";
            }

            $('#thumbs-down-list li').bind('click', function () {
                var reason = $(this).attr('data-reason');
                var current_product_id = 5360190;
                $.ajax({
                    url: "/report/vote-down",
                    method: 'POST',
                    cache: false,
                    data: {product_id: current_product_id, report_reason: reason, report_group: ''},
                    dataType: 'json',
                    success: function (data) {
                        if (data.code == 200) {
                            $('#thumbs-down-tips').html(data.data.down);
                            $('#thumbs-up-tips').html(data.data.up);
                            $('#thumbs-down').html(data.data.down);
                            $('#thumbs-up').html(data.data.up);
                        } else {
                            alert('failure');
                        }
                    }
                });

            });


            function hide_voucher(product_id) {
                $('.voucher-div').hide();
                $('.review_now_' + product_id).removeAttr("disabled").html('Show Code');
                $('.request-div').show();
            }

        </script>

    </div>
    @endsection