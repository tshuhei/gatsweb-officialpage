jQuery(function($){
    load_effect();
    responsive_change_class();
    $(window).scroll(function (){
        scroll_effect();
    });
    $(window).resize(function(){
        responsive_change_class();
    });

    function responsive_change_class(){
        var width = $(window).width();
        var responsive = 600;
        if(width <= responsive){
            $(".process-items div").each(function(){
                if($(this).hasClass("delay1")){
                    $(this).removeClass("delay1");
                }else if($(this).hasClass("delay2")){
                    $(this).removeClass("delay2");
                }else if($(this).hasClass("delay3")){
                    $(this).removeClass("delay3");
                }
                if($(this).hasClass("process-up")){
                    $(this).removeClass("process-up").addClass("up");
                }
            });
            // if($("#process-item-2").hasClass("delay1")){
            //     $("#process-item-2").removeClass("delay1");
            // }
            // if($("#process-item-3").hasClass("delay2")){
            //     $("#process-item-3").removeClass("delay2");
            // }
            // if($("#process-item-4").hasClass("delay3")){
            //     $("#process-item-4").removeClass("delay3");
            // }
            // if($("#process-arrow-2").hasClass("delay1")){
            //     $("#process-arrow-2").removeClass("delay1");
            // }
            // if($("#process-arrow-3").hasClass("delay2")){
            //     $("#process-arrow-3").removeClass("delay2");
            // }
        }else{

        }
    }

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
        scroll_effect();
    }

    function scroll_effect(){
        var tt = $(window).scrollTop();
        var hh = $(window).height();
        $('.up, .slide-left, .contact-slide-left, .slide-right, .reason-up, .process-up').each(function(){
            var yy = $(this).offset().top+200;//効果発生開始タイミングを操作したい場合は数値を変更する
            if($(this).hasClass("reason-up")){
                yy+=100;
            }
            if (tt > yy - hh){
                if($(this).hasClass("delay3")){
                    $(this).delay(2100).queue(function(){
                        $(this).addClass("done");
                    });
                }else if($(this).hasClass("delay2")){
                    $(this).delay(1400).queue(function(){
                        $(this).addClass("done");
                    });
                }else if($(this).hasClass("delay1")){
                    $(this).delay(700).queue(function(){
                        $(this).addClass("done");
                    });
                }else{
                    $(this).addClass("done");
                }
                // $(this).addClass('done');
            }
        });
    }
});