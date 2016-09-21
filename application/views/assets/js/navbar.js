$(document).ready(function(){
    $(window).scroll(function(){
    if (window.pageYOffset >= 80) {
        $('header').addClass('header');
        $('header nav').addClass('between');
//        $('header nav').css("transition","all 0.55s");
//        $('header').css("transition","all 0.55s");
//        $('header nav a').css("transition","all 0.55s");
//        $('header').css("transition","all 0.55s");
//        $('header').css("background","rgb(237, 250, 255)")
        
    }
    else{
    $('header').removeClass('header'); 
        $('header nav').removeClass('between');
//        $('header nav').css("transition","all 0.5s");
//        $('header').css("background","rgba(76, 175, 80, 0)")
    }
});

    
    
//    $('.icon').click(function(){
//        
//        if($('nav div').hasClass('column-sm')){
//            $('nav div').removeClass('column-sm');
//            $('nav div').slideUp('fast');
////            alert('holi');
//        }
//        else{
//            $('nav div').addClass('column-sm');
//            $('nav div').slideDown('fast');
////            $('nav a div').css('display','flex');
////            alert('holi2');
//            
//        }
//    });
    
    
    $('.icon').click(function(){
        
        if($('nav div').hasClass('visible-sm')){
            $('nav div').removeClass('visible-sm collapse');
//            $('nav div').slideUp('fast');
//            alert('holi');
        }
        else{
            $('nav div').addClass('visible-sm collapse-in');
//            $('nav div').slideDown('fast');
//            $('nav a div').css('display','flex');
//            alert('holi2');
            
        }
    });
//    
    
//    $('.icon').click(function(){
//        
//        if($('nav div').hasClass('visible-sm')){
////            $('nav div').removeClass('visible-sm collapse');
//            $('nav div').slideUp('fast');
////            alert('holi');
//        }
//        else{
////            $('nav div').addClass('visible-sm collapse-in');
//            $('nav div').slideDown('fast');
////            $('nav a div').css('display','flex');
////            alert('holi2');
//            
//        }
//    });
    
});
   
