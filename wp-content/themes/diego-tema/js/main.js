jQuery.noConflict();
(function($) {
    $(document).on('click','#nav-icon1',function(){
        $(this).toggleClass('open');
        $('#menu-principal').slideToggle("fast");
    });
    // $(document).on('mouseover','.menu-item-has-children',function(){
    //     $(this).find('.sub-menu').eq(0).stop().slideDown("fast");
    // })
    // $(document).on('mouseleave','.menu-item-has-children',function(){
    //     $(this).find('.sub-menu').eq(0).stop().slideUp("fast");
    // })
})(jQuery);