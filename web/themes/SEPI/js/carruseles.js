$(document).ready(function() {

    // El de las citas en CSIC y Ciencia y Sociedad
    
    $('.lista_carrusel_testimonios').slick({
        dots: true,
        accessibility: true
    });
    
    // El de las personas en Investigación
    
    $('.lista_carrusel_personas').slick({
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
						 dots: true,
            infinite: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						dots: true,
            			infinite: true,
						arrows:false
                    }
                }
            ]
    });
	
	// El de actualidad en transferencia
    
    $('.lista_carrusel_noticias').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
						 dots: true,
            			infinite: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						dots: true,
            			infinite: true,
						arrows:false
                    }
                }
            ]
    });
    
    $('.lista_carrusel_destacados').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
						 dots: true,
            			infinite: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						dots: true,
            			infinite: true,
						arrows:false
                    }
                }
            ]
    });
    
    // cambio resultados
    
    $( "#vista_mosaico").click(function() { 
            event.preventDefault();
            $("#vista_lista").removeClass('active');
            $(this).addClass('active');
            $(".resultados_bloque").addClass('mosaico');
            $(".resultado_item").addClass('col-sm-4 col-xs-12');
            $(".resultado_item_img").removeClass('col-sm-4 col-lg-3');
            $(".resultado_item_texto").removeClass('col-sm-8 col-lg-6');
    });
    $( "#vista_lista").click(function() {
            event.preventDefault();
            $("#vista_mosaico").removeClass('active');
            $(this).addClass('active');
            $(".resultados_bloque").removeClass('mosaico');
            $(".resultado_item").removeClass('col-sm-4');
            $(".resultado_item_img").addClass('col-xs-12 col-sm-4 col-lg-3');
            $(".resultado_item_texto").addClass('col-xs-12 col-sm-8 col-lg-6');
    });
    
    // carrusel de imágenes en resultados
    
    $('#myModal').on('shown.bs.modal', function() {
        
             
            
             
             $('.slider-for').slick({
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: true,
                  fade: true,
                  asNavFor: '.slider-nav',
                  responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: true
                        }
                    }
                  ]
            });

            $('.slider-nav').slick({
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  asNavFor: '.slider-for',
                  dots: false,
                  centerMode: true,
                  focusOnSelect: true,
                  arrows: false
            });

    });
     
    $('#myModal').on('hidden.bs.modal', function () {
        var src = $(this).find('iframe').attr('src');
        $(this).find('iframe').attr('src', '');
        $(this).find('iframe').attr('src', src);
    });
    
    function autoPlayYouTubeModal(){
        
       
        
    // $('#youtube').addClass("embed-responsive-item");
    // $('#youtube').parent().addClass("embed-responsive").addClass("embed-responsive-16by9");
        
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function() {
        var theModal = $(this).data( "target" ),
        videoSRC = $(this).attr( "data-theVideo" ), 
        videoSRCauto = videoSRC+"?autoplay=1" ;
        $(theModal+' iframe').attr('src', videoSRCauto);
        $(theModal+' button.close').click(function () {
            $(theModal+' iframe').attr('src', videoSRC);
        });   
      });
        
        fluidvids.init({
          selector: ['iframe'],
          players: ['www.youtube.com', 'player.vimeo.com']
    });     


    }
    
      if ($(".video").length) {
          
          
         autoPlayYouTubeModal();
     }
    
     

});


