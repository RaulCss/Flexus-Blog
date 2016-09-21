$(document).ready(function(){
    $('.panel ul li a').click(function(){
//        $(this).parent('li').css('color') == ('white');
        console.log($(this).parent().parent().siblings('div'));
        var bg, element;
      
        if($(this).parent().children('ul').length == 0) {
          return false;
        }
      
        element = $(this).parent().parent().siblings('div');
        if($(element).hasClass('bg-alt')){
            bg = 'bg-alt, c-white';
        } else if($(element).hasClass('bg-alt-o')){
            bg = 'bg-alt-o, c-white';
        } else if($(element).hasClass('bg-warm')){
            bg = 'bg-warm, c-white';
        } else if($(element).hasClass('bg-warm-o')){
            bg = 'bg-warm-o, c-white';
        } else if($(element).hasClass('bg-sun')){
            bg = 'bg-sun, c-white';
        } else if($(element).hasClass('bg-sun-o')){
            bg = 'bg-sun-o, c-white';
        } else if($(element).hasClass('bg-moon')){
            bg = 'bg-moon, c-white';
        } else if($(element).hasClass('bg-moon-o')){
            bg = 'bg-moon-o, c-white';
        } else if($(element).hasClass('bg-barny')){
            bg = 'bg-barny, c-white';
        } else if($(element).hasClass('bg-barny-o')){
            bg = 'bg-barny-o, c-white';
        } else if($(element).hasClass('bg-hade')){
            bg = 'bg-hade, c-white';
        } else if($(element).hasClass('bg-hade-o')){
            bg = 'bg-hade-o, c-white';
        } else if($(element).hasClass('bg-misty')){
            bg = 'bg-misty, c-white';
        } else if($(element).hasClass('bg-misty-o')){
            bg = 'bg-misty-o, c-white';
        } else if($(element).hasClass('bg-leaf')){
            bg = 'bg-leaf, c-white';
        }  else if($(element).hasClass('bg-leaf-o')){
            bg = 'bg-leaf-o, c-white';
        } else if($(element).hasClass('bg-gray')){
            bg = 'bg-gray, c-white';
        } else if($(element).hasClass('bg-gray-o')){
            bg = 'bg-gray-o, c-white';
        } else if($(element).hasClass('bg-flexus')){
            bg = 'bg-flexus, c-white';
        } else if($(element).hasClass('bg-flexus-o')){
            bg = 'bg-flexus-o, c-white';
        } 
                               
        console.log(bg);
      
        if($(this).siblings('ul').css('display') == 'block'){
            $(this).siblings('ul').slideUp('fast');
            $(this).removeClass(bg);
            $(this).removeClass('c-white');
        }
        else{
            $(this).siblings('ul').slideDown('fast');
            $(this).addClass(bg);
            
        }
        
    });
    
//    $('.panel li:has(ul)').mouseleave(function(){
//        $('.panel li ul').slideUp();
//    });
});

//$(document).ready(function(){
//    $('.panel li:has(ul)').click(function(e){
//    e.preventDefault();
//         if ($(this).hasClass('active')){      
//}
//    else{ 
//        
//      $('.panel li ul').slideUp();
//      $('.panel li').removeClass('active');
//      $(this).addClass('active');
//      $(this).children.('ul').slideDown();
//    }
// });
//});
