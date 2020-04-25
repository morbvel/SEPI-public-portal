       jQuery( document ).ready(function($) {

            // Convierte las tabs en accordeones en responsive

            $('.responsive-tabs').responsiveTabs({
              accordionOn: ['xs']
            });
           $('.responsive-accordion').responsiveTabs({
              accordionOn: ['xs'] // xs, sm, md, lg
            });

           $(".accordion-link.first").addClass('open');
           $(".accordion-link").click(function(){
                $('.accordion-link').removeClass('open');
                $('.accordion-link.open').not(this).removeClass('open');
                $(this).toggleClass('open');
             })


         $(function() {
            $('#accordion')
                          .on('show.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').addClass('active');
                          })
                          .on('hide.bs.collapse', function(e) {
                            $(e.target).prev('.panel-heading').removeClass('active');
                          });
        });
       });
