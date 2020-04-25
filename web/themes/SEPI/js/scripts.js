jQuery(document).ready(function($){

    var pathname_tags = window.location.href;
    var tags = pathname_tags.split('#');
    var keys = pathname_tags.split('&');
    if(tags.length > 1 && tags[1].length){
      var number_tab = tags[1].split('-');

      if(number_tab[1] > 0){
        $('#panel-1').removeClass('active');
        $('#tab-1').removeClass('in active');
        $('#panel-'+number_tab[1]).addClass('active');
        $('#tab-'+number_tab[1]).addClass('in active');
      }
    }

    keys.forEach(function(key, index){
      if(key.indexOf("keys") >= 0){
        var busqueda = key.split('=');
        $('.input-buscador-inferior').attr('value',busqueda[1].replace(/\+/g, ' '));
      }
    });

    if($(window).width() < 1024){
      $('.new-big').addClass('new-little new new-big2');
      $('.new-big').removeClass('news');
      $('.new-big').removeClass('new-big');

      $('.new-big2').find('.degradado').each(function(){
        $(this).addClass('degradado2');
        $(this).removeClass('degradado');
      });
    }
    if($(window).width() < 767 ){
      $('.container-documentos').addClass('container-fluid');
      $('.container-documentos').removeClass('container');
    }

    $(window).resize(function() {
      if($(window).width() < 1024 ){
        $('.new-big').addClass('new-little new new-big2');
        $('.new-big').removeClass('news');
        $('.new-big').removeClass('new-big');

        $('.new-little').find('.degradado').each(function(){
          $(this).addClass('degradado2');
          $(this).removeClass('degradado');
        });


      }else{
        $('.new-big2').removeClass('new-little new');
        $('.new-big2').addClass('news');
        $('.new-big2').addClass('new-big');

        $('.new-big2').find('.degradado2').each(function(){
          $(this).addClass('degradado');
        });
      }

      if($(window).width() < 767){
        $('.container-documentos').addClass('container-fluid');
        $('.container-documentos').removeClass('container');
      }else{
        $('.container-documentos').removeClass('container-fluid');
        $('.container-documentos').addClass('container');
      }
    });

    $("#unsuscribe_sepi").on("click", function(e){
        e.preventDefault();
        $('#newsletter-prensa-form').attr('action', "http://sepi.ip-zone.com/ccm/unsubscribe/index/form/").submit();
    });

    var cont = 0;
    $('.elemento-agenda').each(function(){
      cont += 1;
    });
    if(cont == 0){
      $('#fila-contendor-agenda').css('display', 'none');
    }

    $('.js-pager__items').addClass('container paginador');
    $('.paginador').find('li').each(function(){
      $(this).find('a').addClass('boton-paginador');
    });

    $('.embedded-entity').parents('li').addClass('li-embebed-entity');
    $( ".li-embebed-entity" ).last().addClass('last-embebed-entity');

    $('.form-date').each(function(){
      $(this).addClass('calendario');
    });

    $('.embedded-entity').find('.descargas').removeClass('col-xs-12 col-sm-3 col-md-3');

    $('.alert').addClass('container');

    $('#search-form').next().addClass('texto-resultados-busqueda');
    $('.texto-resultados-busqueda').css('display', 'none');

    $('.img-responsive').parent().addClass('image-resizer');
    $('.field--name-field-cabecera-sectores').find('.img-responsive').each(function(){
      $(this).removeClass('img-responsive');
    });

    $('#vista_lista').click(function(){
      $('.resultado-item').each(function(){
        $(this).addClass('altura-listado');
      });
    });

    $('#vista_mosaico').click(function(){
      $('.resultado-item').each(function(){
        $(this).removeClass('altura-listado');
      });
    });

    $('.elemento-agenda').first().toggleClass('fuera-border');

    //Para los buscadores con botones
    var url_full = window.location.href;
    var url = window.location.href.split("?");

    var pathname = window.location.pathname;
    var language = pathname.split("/");

    $('#enlace-contacto-sala-de-prensa').attr('href', "/"+language[1]+"/"+$('#enlace-contacto-sala-de-prensa').attr('href'));
    $('#clausula-newsletter-footer').attr('href', "/"+language[1]+$('#clausula-newsletter-footer').attr('href'));
    $('#clausula-newsletter-block').attr('href', "/"+language[1]+$('#clausula-newsletter-block').attr('href'));

    //Informes y Publicaciones
    if(url[0].indexOf("/buscador-informes") >= 0){
      if(url[1] == 'tid=25'){
        $('#publicaciones').addClass('btn-primary');
        $('#informes').addClass('no-active-botones');
      }
      else if(url[1] == 'tid=24' || pathname.indexOf('/buscador-informes')){
        $('#informes').addClass('btn-primary');
        $('#publicaciones').addClass('no-active-botones');
      }
    }
    //Informes y Publicaciones Ultimos
    if(url[0].indexOf("/ultimos-informes") >= 0){
      if(url[1] == 'tid=25'){
        $('#publicaciones').addClass('btn-primary');
        $('#informes').addClass('no-active-botones');
        var href = $('#ver-mas-documentos').attr('href')+"?tid=25";
        $('#ver-mas-documentos').attr('href', href);
        if(language[1] == 'en'){
          $('#tipo-documento-ver-mas').html('publications');
        }else{
          $('#tipo-documento-ver-mas').html('publicaciones');
        }

      }
      else if(url[1] == 'tid=24' || pathname.indexOf('/ultimos-informes')){
        $('#publicaciones').addClass('no-active-botones');
        $('#informes').addClass('btn-primary');
        var href = $('#ver-mas-documentos').attr('href')+"?tid=24";
        $('#ver-mas-documentos').attr('href', href);
        if(language[1] == 'en'){
          $('#tipo-documento-ver-mas').html('reports');
        }else{
          $('#tipo-documento-ver-mas').html('informes');
        }
      }
    }
    //Multimedia
    else if(url[0].indexOf("/listado-multimedia") >= 0){
      if(url[1] == 'tid=27'){
        $('#fotos').addClass('btn-primary');
        $('#videos').addClass('no-active-botones');
      }
      else if(url[1] == 'tid=26' || pathname.indexOf('/listado-multimedia')){
        $('#videos').addClass('btn-primary');
        $('#fotos').addClass('no-active-botones');
      }
    }
    //Legislacion
    else if(url[0].indexOf("/conozca-sepi/legislacion") >= 0){
      if( url[1] == 'tid=23' ){
        $('#incorporacion').addClass('active');
        $('#legislacion').removeClass('active');
      }
      else if(url[1] == 'tid=2' || pathname.indexOf('/conozca-sepi/legislacion')){
        $('#legislacion').addClass('active');
        $('#incorporacion').removeClass('active');
      }
    }

	var link = "";
	pathname = window.location.pathname;

	$('.main_menu_link').each(function(){
		link = $(this).attr('href');

		if(pathname.indexOf(link)==0){
			$(this).addClass('active');
		}
		link2 = link.split('/');
		if(link2.length < 3 ){
			$(this).removeClass('active');
		}
		pathname2 = pathname.split('/');
		if(pathname2.length==2 && link2.length <3){
			if(link2[1] == 'es' || link2[1] == 'en' || link2[1] == 'ca' || link2[1] == 'gl' || link2[1] == 'eu' || link2[1] == 'va'){
				$(this).addClass('active');
			}
		}
	});

  $('.enlaces-superiores').each(function(){
		link = $(this).attr('href');

		if(pathname.indexOf(link)==0){
			$(this).addClass('active');
		}
  });

	$('.language_menu_link').each(function(){
		link = $(this).attr('href').split("/");
    var lang = pathname.split("/");

		if(link[1] == lang[1]){
			$(this).addClass('active');
		}
	});

	$(".module-footer .form-check-input").change(function() {
    		if(this.checked) {
        		$('.module-footer .footer-checkbox').addClass('checked');
    		}else{
			$('.module-footer .footer-checkbox').removeClass('checked');
		}
	});

	$('.abrir_search_form').click(function(){
		$(this).css('display', 'none');
	});


    //Para sectores
    $('#minoritarias').html($('#participacion-minoritaria').text());
    $('#minoritarias-mobile').html($('#participacion-minoritaria').text());
    $('#mayoritarias').html($('#participacion-mayoritaria').text());
    $('#mayoritarias-mobile').html($('#participacion-mayoritaria').text());
    $('#indirectas').html($('#participacion-indirectas').text());
    $('#indirectas-mobile').html($('#participacion-indirectas').text());


    //Para abrir el modal con la imagen de multimedia seleccionada
    $('.imagen-multimedia').click(function(){
      $('#imagen-multimedia-modal').attr('src', $(this).attr('src'));
      $('#imagen-multimedia-modal').css('width', '100%');
      $('#multimedia-modal').modal("show");
    });


    /*
    * Generador de enlaces para redes sociales
    */
    var aux = 1;
    while(aux <= parseInt($('#empleo-publico-contador').text())){
      url_full = url_full+'%23empleo-'+aux;
      $('#empleo-publico-fb-'+aux).attr('href', 'https://www.facebook.com/sharer/sharer.php?u='+url_full.replace(/ /g, '+'));
      $('#empleo-publico-tw-'+aux).attr('href', 'https://twitter.com/home?status=Se%20ha%20publicado%20una%20nueva%20oportunidad%20de%20empleo%20p%C3%BAblico%20en%20el%20portal%20de%20SEPI%3A%0A%0A'+url_full.replace(/ /g, '+'));
      $('#empleo-publico-ln-'+aux).attr('href', 'https://www.linkedin.com/shareArticle?mini=true&url='+url_full.replace(/ /g, '+')+'&title=Oportunidad%20laboral%20SEPI&summary=Se%20ha%20publicado%20una%20nueva%20oportunidad%20de%20empleo%20p%C3%BAblico%20en%20el%20portal%20de%20SEPI&source=');

      aux++;
    }


    $('.open-search-form').click(function(){
      $(this).css('display', 'none');
    });

    try{
      if(window.location.href.split("&")[1].split("=")[1] > 0){
        $('.sector-empresa').each(function(){
          $(this).css('display', 'none');
        });
      }
    }
    catch(err){
      console.log("");
    }

    try{
      $('#nombre-empresa-noticias').text($('#nombre-empresa').text());
      $('#ver-mas-noticias-empresa').attr('href', '/busqueda-de-noticias?field_empresa_target_id='+$('#id-noticia').text()+'&field_fecha_noticia_value=&field_fecha_noticia_value_1=&keys=')
    }catch(err){
      console.log("Empresa no disponible");
    }

});
