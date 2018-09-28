function setCookie(name,value,days)
{
    var exp = new Date();
    exp.setTime(exp.getTime() + days*24*60*60*1000);
    document.cookie = name  ="+ value + ";expires=" + exp.toGMTString()+';domain=.vipon.com;path=/';"
}

//左上角国家图标点击事件
$('.down_arrow').parent().on('click', function (e) {
    e.preventDefault();
    if ($('.state_list').css('display') == 'block') {
        $('.state_list').css('display', 'none');
    } else {
        $('.state_list').css('display', 'block');
    }
});

//左上角国家切换事件
$('#country-list-div li').bind('click',function () {
    var domain = $(this).data('domain');
    var suffix = domain.substring(domain.lastIndexOf(".")+1);
    $('#current_country').removeClass('flag-com').removeClass('flag-ca').removeClass('flag-uk').removeClass('flag-de').removeClass('flag-fr').removeClass('flag-es').removeClass('flag-it').removeClass('flag-jp').removeClass('flag-in').removeClass('flag-br').removeClass('flag-cn');
    $('#current_country').addClass('flag-'+suffix);
    setCookie("d2018",domain,365);
    $('#country-list-div').css('display', 'none');
    window.location.reload();
});

//mobile change country
$('#country-list li').bind('click',function () {
    var domain = $(this).data('domain');
    var suffix = domain.substring(domain.lastIndexOf(".")+1);
    $('#mobile_current_country').removeClass('flag-com').removeClass('flag-ca').removeClass('flag-uk').removeClass('flag-de').removeClass('flag-fr').removeClass('flag-es').removeClass('flag-it').removeClass('flag-jp').removeClass('flag-in').removeClass('flag-br').removeClass('flag-cn');
    $('#mobile_current_country').addClass('flag-'+suffix);
    setCookie("d2018",domain,365);
    $('#country-list').css('display', 'none');
    window.location.reload();
});

//右上角账号下拉事件
$('.show_user_email>a').on('click',function(e){
    e.preventDefault();
    if($('.show_user_email>div').css('display')=='none'){
        $('.show_user_email>div').css('display','block');
    }else{
        $('.show_user_email>div').css('display','none');
    }
});

//菜单关键字搜索事件
$('.search_click').on('click',function(){

    <!-- BingConversion -->
    bing_search_button();
    <!-- BingConversion end -->

    var search = $('#search').val();
    if(!search) return;
    search = search.replace(/<|>/g,"");
    var search = encodeURIComponent(search);
    window.location.href = "/promotion/index"+"?search="+ search;
});

$('#mobel_search').on('click',function(){
    var search = $('#m_search').val();
    if(!search) return;
    search = search.replace(/<|>/g,"");
    var search = encodeURIComponent(search);
    window.location.href = "/promotion/index"+"?search="+ search;
});

$("#search").keydown(function(e) {
    if (e.keyCode == 13) {
        var search = $('#search').val();
        if( $("#search").val()!=''){
            search = search.replace(/<|>/g,"");
            var search = encodeURIComponent(search);
            window.location.href = "/promotion/index"+"?search="+ search;
        }
    }
});

$("#m_search").keydown(function(e) {
    if (e.keyCode == 13) {
        var search = $('#m_search').val();
        if( $("#m_search").val()!=''){
            search = search.replace(/<|>/g,"");
            var search = encodeURIComponent(search);
            window.location.href = "/promotion/index"+"?search="+ search;
        }
    }
});

$('.choose_deal>ul>li.country>a').on('click',function(e){
    e.preventDefault();
    if($('.choose_deal>ul>li.country .country_list').css('display')=='none'){
        $('.choose_deal>ul>li.country .country_list').css('display','block');
    }else{
        $('.choose_deal>ul>li.country .country_list').css('display','none');
    }
});

$('#header div.choose_deal>ul>li.country>div.country_list>ul>li>a').on('click',function(e){
    e.preventDefault();
    $('#header div.choose_deal>ul>li.country>a img').attr('src',$(this).find('img').attr('src'));
    $('.choose_deal>ul>li.country .country_list').css('display','none');
});

$('.hide_choose>a').on('click',function(e){
    e.preventDefault();
    if($('.choose_deal').css('display')=='none'){
        $('.choose_deal').css('display','block');
    }else{
        $('.choose_deal').css('display','none');
    }
});

$('.user_icon>a').on('click',function(e){
    e.preventDefault();
    if($('.user_deal').css('display')=='none'){
        $('.user_deal').css('display','block');
    }else{
        $('.user_deal').css('display','none');
    }
});

$('.categories_click').on('click',function(e){
    e.preventDefault();
    if($('.mobel_categories').css('display')=='none'){
        $('.mobel_categories').css('display','block');
    }else{
        $('.mobel_categories').css('display','none');
    }
});

$('.category').on('click',function(){
    var category = $(this).attr("data-category");
    setCookie("product_group",category,365);
    window.location.href = "/result/category"+"?product_group="+ category;
});