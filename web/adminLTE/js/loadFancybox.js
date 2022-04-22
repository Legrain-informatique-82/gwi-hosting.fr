/**
 * Created by julien on 14/01/16.
 */
$(function () {






        $('.fancybox').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            
            iframe: {
                preload: false
            },
            afterClose: function () {
                // here any javascript or jQuery to execute after close
                //window.location.reload();
                // alert('close');

                //alert('close');
                if ( $( ".combobox" ).length ) {
                    $('.combobox').trigger('chosen:updated');
                }
            }
        });

});

