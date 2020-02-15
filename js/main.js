/**
 * Created by Userhome-pc on 2017-05-20.
 */
$(function() {
/* 首页轮播图 */
    function resize(){
        //  获取屏幕的大小
        var screenWidth = $(window).width();
        // console.log(screenWidth);
        var isSmallScreen = screenWidth < 768;
        //  获取data属性
        $('.carousel .carousel-inner .item').each(function(i, item) {
            //  转化成Jquery对象,因为拿到的是DOM对象，没有data()这个方法
            var $item = $(item);
            // console.log($item);
            //  设置背景
            var Image = isSmallScreen ? $item.data('sm-bg') : $item.data('lg-bg');
            // console.log($item.data('lg-bg'));
            $item.css('backgroundImage','url("'+ Image +'")');
            if(isSmallScreen){
                $item.html('<img src="' + Image + '">');
            }
            else{
                //  当变回大屏是，去掉img标签
                $item.empty();
            }
        });
    }
    //  注册屏幕改变事件
    //  trigger('resize'),使window对象立即触发该函数
    $(window).on('resize',resize).trigger('resize');

    /* 点击弹出框出现触发 */
    $('[data-toggle="popover"]').popover();

    //  判断当前点击的是第几集的视频，

})


