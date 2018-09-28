//added by lyl ,used in home page
var last_product_id = 0;
var reviewer_id = 0;
var admin_ids = new Array();
var type = 'product';
var next_page = true;
var page = 0;

var status_check_count = 0;
var status_check_time = 10000;

var voucher_left_t;
var current_load_url = "";

function get_ids_new() {
    status_check_count = status_check_count + 1;
    if(status_check_count<5){
        status_check_time = 5000;
    }else if(status_check_count>5 && status_check_count<20){
        status_check_time = 10000;
    }else{
        status_check_time = 30000;
    }

    var topMenus = $("[name='deals']");
    var ids = [];
    for (var i = 0; i < topMenus.length; i++) {
        ids[i] = topMenus[i].getAttribute('id').slice(8);
    }
    //$.ajax({
    //    url:"/main/judgeinvalid",
    //    method: 'post',
     //   cache: false,
     //   data: {ids: ids},
    //    dataType:'json',
    //    success: function (data) {
    //        if (data) {
    //            for (var i = 0; i < data.length; i++) {
    //                var p_id = data[i]['p_id'];
    //                var vouchers_remaining,voucher_limit_day = 0;
    //                if(data[i]['vouchers_remaining']<=0){
    //                    vouchers_remaining = 0;
    //                    voucher_limit_day = data[i]['voucher_limit_day'];
    //                }else {
    //                    vouchers_remaining =data[i]['vouchers_remaining'];
    //                    voucher_limit_day = data[i]['voucher_limit_day'];
     //               }
     //               $('.text_'+p_id).html(vouchers_remaining+' vouchers left');
     //               $('.new_'+p_id).html(vouchers_remaining+'/'+voucher_limit_day);
     //               $('.bar_'+p_id).css('width',(vouchers_remaining*100/voucher_limit_day)+'%');
     //           }
     //       }
     //   }
    //});
    if(status_check_count<30){
        voucher_left_t = window.setTimeout(get_ids_new(), status_check_time);
    }
}

function setCookie(name,value,days)
{
    var exp = new Date();
    exp.setTime(exp.getTime() + days*24*60*60*1000);
    document.cookie = name + "="+ value + ";expires=" + exp.toGMTString()+';domain=.vipon.com;path=/';
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
//删除cookies
function delCookie(name)
{

    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    document.cookie= name + "="+cval+";expires="+exp.toGMTString();

}

function unixtime2date(secs) {
    var days = Math.floor(secs / 86400);
    secs -= days * 86400;

    // calculate (and subtract) whole hours
    var hours = Math.floor(secs / 3600) % 24;
    secs -= hours * 3600;

    // calculate (and subtract) whole minutes
    var minutes = Math.floor(secs / 60) % 60;
    secs -= minutes * 60;

    // what's left is seconds
    var seconds = secs % 60;

    var s = '';
    if(days){ s = days + 'd '; }

    if(s!='' || hours){
        hours= checkTime(hours);
        s += hours + ':';
    }else{
        s += '00:';
        hours = '00';
    }
    if(s!='' || minutes){
        minutes = checkTime(minutes)
        s = minutes + ':';
    }else{
        s += '00:';
        minutes ='00';
    }
    if(s!='' || seconds){
        seconds = checkTime(seconds);
        s += seconds + '';
    }
    var html =   '<div class="hour">'+
        '<span>H</span>'+
        '<span>'+hours+'</span>'+
       '</div>'+
       '<div class="minute">'+
        '<span>M</span>'+
        '<span>'+minutes+'</span>'+
        '</div>'+
        '<div class="second">'+
        '<span>S</span>'+
        '<span>'+seconds+'</span>'+
        '</div>';
    return html;
}

function checkTime(i){ //将0-9的数字前面加上0，例1变为01
    if(i<10) {
        i = "0" + i;
    }
    return i;
}

function review_product(product_id) {
    $('.review_btn_'+product_id+' i').addClass('fa-spinner fa-spin');
    return true;
}