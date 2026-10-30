$(document).ready(function(){
    $(".owl-obra").owlCarousel({
        navigation: true,
        nav: true,
        navText: ["<i class='' aria-hidden='true'><img src='css/images/vector-28.svg' aria-hidden='true'></i>", "<i class='' aria-hidden='true'><img src='css/images/vector-29.svg' aria-hidden='true'></i>"],
        navClass: ['owl-prev', 'owl-next'],
        autoplay:true,
        autoWidth: false,
        slideBy: 1,
        dots:false,
        margin: 0,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            280: {
                items: 1
            },
            400: {
                items: 2
            },
            550: {
                items: 2
            },  
            768: {
                items: 3
            },
            993: {
                items: 3
            },
            1201: {
                items: 3
            }
        }
    });
});