$(function () {
    $(window).scroll(function(){
          if($(document).scrollTop()>=82){
            $('.main_header').css({background: '#fff',  'box-shadow' : '0 2px 4px 0 rgba(0,0,0,0.25)'});
            $('.main_header ul li a').css({color:'#765a20','text-shadow': '1px 1px 1px transparent'})
            }else{
                $('.main_header').css({'background':'transparent', 'box-shadow' : '0 0 0 0 transparent'});
                $('.main_header ul li a').css({color:'#fff','text-shadow': '1px 1px 1px #444'})
               
            }
    
        });

        $('.tab li').on('click', function(){
            $('.items').removeClass('active')
            $('.tab li').removeClass('active');
            $(this).addClass('active');
            let id = $(this).data('target');
            $('#'+id).addClass('active');
        })
        $('.modal_side_text ul li').on('click', function(){
             $(this).parents('ul').siblings('.modal_item').removeClass('active')
             $(this).parents('ul').find('a').removeClass('active');
            $(this).find('a').addClass('active');
            let id = $(this).data('target');
            $(this).parents('ul').siblings('#'+id).addClass('active');
        })
        $('.item_menu').on('mouseover', function(){
            $(this).find('ul').addClass('active');
        })
        $('.item_menu').on('mouseout', function(){
            $(this).find('ul').removeClass('active');
        })
        var diminuir = document.getElementsByClassName('btn_rem');
        var aumentar = document.getElementsByClassName('btn_add');
         for(let i = 0 ; i < diminuir.length; i++){
            diminuir[i].addEventListener('click',function(e){
            e.preventDefault();
                     this.parentNode.querySelector('input').stepDown();
                 })
     }
        for(let i = 0 ; i < aumentar.length; i++){
                 aumentar[i].addEventListener('click',function(e){
                     e.preventDefault();
                     this.parentNode.querySelector('input').stepUp();
                 })
     }
     
     $('.close').on('click',function(){
         $('.modal_product ,.modal_search').removeClass('active');
     })
     $('.more_pro').on('click',function(){
        $('.modal_sell').removeClass('active');
    })
     $('.more_info').on('click',function(){
           $(this).parents('.products_items').find('.modal_product').addClass('active');
     })
     $('.budget,.add_cart').on('click',function(){
        $(this).parents('.products_items').find('.modal_sell').addClass('active');
        $('.cart_number').text(1 + +$('.cart_number').text());
     })
     $('.menu_search').on('click', function(){
        $('.modal_search').addClass('active');
     })
     
});