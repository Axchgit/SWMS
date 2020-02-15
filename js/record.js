/********
 接收地址栏参数
 key:参数名称
 **********/
function GetQuery(key) {
    var search = location.search.slice(1); //得到get方式提交的查询字符串
    // console.log(search);
    var arr = search.split("&");
    for (var i = 0; i < arr.length; i++) {
        var ar = arr[i].split("=");
        if (ar[0] == key) {
            return ar[1];
        }
    }
}
//  获取地址栏传送过来的参数值
var name = GetQuery('name');
// console.log(name);
if( name != "undefined") {
    $('.radio .nav-tabs li a').each(function(index, ele){
        // console.log(ele);

        var that = $(this);  //  转化成jQuery对象
        // console.log(that.parent());
        that.parent().removeClass("active");
        var data_name = that .data('name');
        //  console.log(data_name);

        //  与参数值进行比较，若相等，相应的tab栏显示
        if (name == data_name) {
            that.parent().addClass("active");
        }
    });

    $('.radio .tab-content div').each(function(index, ele){
        // console.log(index);
        // console.log(ele);

        var that = $(this);  //  转化成jQuery对象
        that.removeClass("active in");
        var data_name = that .data('name');
        //  console.log(data_name);
        if (name == data_name) {
            that.addClass("active in");
        }
    });
}

