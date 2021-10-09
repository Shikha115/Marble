$(document).ready(function(){

    // $(function() {
    //     $(document).scroll(function() {
    //         var ad_after = 100;
    //         var $nav = $(".custom");
    //         $nav.toggleClass('onscroll', $(this).scrollTop() > ad_after);
    //     });
    // });
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[990,1],
        itemsTablet:[768,1],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        autoPlay:true
    });

});


// $('.portfolio-menu .portfolio-list').click(function(){
//     $('.portfolio-menu .portfolio-list').removeClass('active');
//     $(this).addClass('active');
    
//     var selector = $(this).attr('data-filter');
//     $('.portfolio-item').isotope({
//         filter:selector
//     });
//     return  false;
// });

$(()=>{
    var width=$( window ).width();
    if(width>=768 && width<992){
        $(".blog-3").css("display","none");
    }
});



