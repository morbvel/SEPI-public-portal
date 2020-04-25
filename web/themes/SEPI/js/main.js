jQuery(document).ready(function($) {




	if ($('#search-form').length > 0) {
				$('#icon-search').addClass('collapsed');
				$(".glyphicon-remove").hide();
				 $('#icon-search').click(function() {

				if ($('#icon-search').hasClass('collapsed')) {
							$("#icon-search > .glyphicon-search").hide();
							$("#icon-search > .glyphicon-remove").show();
						} else {

							$("#icon-search > .glyphicon-remove").hide();
							$("#icon-search > .glyphicon-search").show();
						}


		 });

	}



	if($('#myTab').length >0 ){
		setTimeout(function(){
		  $('#tab-1-collapse').prev().addClass('active');
		}, 50);

		$('#myTab').tabCollapse();
		var aux = 1;
		$(function() {
            $('#myTab-accordion')
                          .on('show.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').addClass('active');

                          })
                          .on('hide.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').removeClass('active');
                          });

        });

	}

	if($('#accordion').length >0 ){
		$(function() {
            $('#accordion')
                          .on('show.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').addClass('active');

                          })
                          .on('hide.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').removeClass('active');
                          });
        });

	}

     		$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});

  $('.slick').slick({
       accessibility: true,
	  arrows: false,
	  dots: true,
	  infinite: true,
      autoplay: true,
      autoplaySpeed: 5000
      });

	$('.slick-sectores').slick({
		accessibility: true,
		arrows: false,
		infinite: true,
		slidesToScroll: 1,
		swipeToSlide: true,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true
      });


	/*$( 'a.ver-mas.icon' ).click(function() {
	 	$('.slick-sectores').slick('unslick');
		$('.slick-sectores').addClass('unslicked');
	});
	*/

	$('a.ver-mas.icon').click(function() {
		//event.preventDefault();
    var $this = $(this);
		if ($this.hasClass('active')) {
			$this.removeClass('active').addClass('no-active');
			$('.slick-sectores').slick('unslick');
			$('.slick-sectores').addClass('unslicked');
		} else if ($this.hasClass('no-active')) {
			$this.removeClass('no-active').addClass('active');
			$('.slick-sectores').removeClass('unslicked');
			$('.slick-sectores').slick({
				accessibility: true,
				arrows: false,
				infinite: true,
				slidesToScroll: 1,
				swipeToSlide: true,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			  });
		} else {
			$this.addClass('active');
		}
	});


	 // cambio resultados

    $( "#vista_mosaico").click(function(event) {
            event.preventDefault();
            $("#vista_lista").removeClass('active');
            $(this).addClass('active');
           $(".resultados-bloque").removeClass('lista').addClass('mosaico');
           $(".resultado-item").addClass('col-md-3 col-sm-4 col-xs-12 text-center');
			$(".empresa").addClass('col-md-12');
			$(".empresa").removeClass('row');
			$(".imagen-empresa").removeClass('col-sm-3');
			$(".nombre-sector").removeClass('col-sm-3');
			$(".mail-empresa").removeClass('col-sm-3');
			$(".telefono-empresa").removeClass('col-sm-3');
			$(".web-empresa").removeClass('col-sm-3');
			$(".porcentaje-empresa").removeClass('col-sm-3');

    });
    $( "#vista_lista").click(function(event) {
            event.preventDefault();
            $("#vista_mosaico").removeClass('active');
            $(this).addClass('active');
			 $(".resultados-bloque").removeClass('mosaico').addClass('lista');
			$(".empresa").addClass('row');
			$(".imagen-empresa").addClass('col-sm-3');
			$(".nombre-sector").addClass('col-sm-3');
			$(".mail-empresa").addClass('col-sm-3');
			$(".telefono-empresa").addClass('col-sm-3');
			$(".web-empresa").addClass('col-sm-3');
			$(".porcentaje-empresa").addClass('col-sm-3');
			$(".empresa").removeClass('col-md-12');
			$(".resultado-item").removeClass('col-md-3 col-sm-4 col-xs-12 text-center');

            //$(".resultados_bloque").removeClass('mosaico').addClass('col-xs-12');
    });


});
