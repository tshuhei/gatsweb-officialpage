jQuery(function($){
    load_effect();
    $(window).scroll(function (){
        scroll_effect();
    });

    function load_effect(){
        $(".onload").each(function(){
            if($(this).hasClass("delay2")){
                $(this).delay(1000).queue(function(){
                    $(this).addClass("done");
                });
            }else if($(this).hasClass("delay1")){
                $(this).delay(500).queue(function(){
                    $(this).addClass("done");
                });
            }else{
                $(this).addClass("done");
            }
        });
    }

    function scroll_effect(){
        var tt = $(window).scrollTop();
        var hh = $(window).height();
        $('.up').each(function(){
            var yy = $(this).offset().top+100;//効果発生開始タイミングを操作したい場合は数値を変更する
            if (tt > yy - hh){
                $(this).addClass('done');
            }
        });
    }
});