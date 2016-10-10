/**
 * Created by zzl on 2016/9/26.
 */
window.onload = function() {
    var mySwiper = new Swiper('.swiper-container',{
        loop: true,
        autoplay : 3000,
        speed:5000,
        progress:true,
        onProgressChange: function(swiper){
            for (var i = 0; i < swiper.slides.length; i++){
                var slide = swiper.slides[i];
                var progress = slide.progress;
                var translate = progress*swiper.width;
                var opacity = 1 - Math.min(Math.abs(progress),1);
                slide.style.opacity = opacity;
                swiper.setTransform(slide,'translate3d('+translate+'px,0,0)');
            }
        },
        onTouchStart:function(swiper){
            for (var i = 0; i < swiper.slides.length; i++){
                swiper.setTransition(swiper.slides[i], 0);
            }
        },
        onSetWrapperTransition: function(swiper, speed) {
            for (var i = 0; i < swiper.slides.length; i++){
                swiper.setTransition(swiper.slides[i], speed);
            }
        }
        // 如果需要前进后退按钮
        //其他设置
    });

    $('.home-prev').click(function(){
        mySwiper.swipePrev();
    })
    $('.home-next').click(function(){
        mySwiper.swipeNext();
    })


}