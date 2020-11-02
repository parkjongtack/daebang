$(function(){

    function quick_box(){
        var scTop = $(window).scrollTop();
        if(scTop > 850){
            $("#quick_box").show();
        }else{
            $("#quick_box").hide();
        }
    }
    quick_box();
    
    $(window).scroll(function(){
        quick_box();
    });

});