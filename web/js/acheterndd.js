/**
 * Created by julien on 30/09/15.
 */

function ajaxCheckNdd(item){
    if(!$(item).hasClass('done')) {
        $(item).addClass('done');

        var listproduits=item.data('idtochecks') ;
        var idTab = item.data('id');
        $('<i class="fa fa-circle-o-notch fa-spin"></i> ').prependTo( $('#'+idTab+' td input').parent());
        $('#'+idTab+' td input,#'+idTab+' td select').attr('disabled','disabled');
        $('#'+idTab+' td input').hide();
        $('#'+idTab+' td').addClass('text-grey');


        // Appel ajax pour la liste de produits.

        $.ajax({
            method: "POST",
            url: item.data('ajax'),
            data: { domain: item.data('domain'),listids: listproduits }
        })
            .done(function( data ) {
                var obj = jQuery.parseJSON( data );
                //  alert(data);
                var i;
                for (i = 0; i < obj.length; ++i) {


                    $('#td_'+obj[i].id+' i').remove();
                    if(obj[i].availlable){

                        $('#td_'+obj[i].id +' input').show();
                        $('#td_'+obj[i].id +' input,#td_'+obj[i].id +' select').removeAttr('disabled');
                        $('#td_'+obj[i].id).removeClass('text-grey');
                    }
                }


            });

    }
}
$(function () {
    $('.aJsCheck').on('click',function(){

        ajaxCheckNdd($(this));

    });
    if($('.aJsCheck').parent().hasClass('active')){
        var item = $('li.active > .aJsCheck');

        //console.log(item);
        ajaxCheckNdd(item);
    }

    // calcul des prix
    $('select').change(function(){
        // alert('aa');
        var multiplicater = $(this).val();
        var nodeMax = $(this).parent().parent().find('.calcPrixMax');
        var nodeMin = $(this).parent().parent().find('.calcPrixMin');

        nodeMax.html(Math.round((nodeMax.data('init')*multiplicater)*100)/100);
        if (typeof nodeMin !== "undefined") {
            nodeMin.html(Math.round((nodeMin.data('init') * multiplicater) * 100) / 100);
        }
        //  alert($(this).parent().parent().find('.calcPrixMin').data('init'));
        //$(this).parent().parent().find('.calcPrixMax').data('init');
        //alert($(this).parent().parent().children('.calcPrixMax').data('init'));
    });
    //calcPrix

    /*
     // Début check ndd (1par un)
     $('<i class="fa fa-circle-o-notch fa-spin"></i> ').prependTo( $('.jsCheck').parent());
     $('.jsCheck').hide();
     $('.jsCheck').attr('disabled','disabled');
     $('*[data-asset="active"]').parent().addClass('text-success');
     $('*[data-asset="inactive"]').parent().addClass('text-grey');
     $('*[data-asset="inactive"]').hide();


     $.xhrPool = [];
     $.xhrPool.abortAll = function() {
     $(this).each(function(idx, jqXHR) {
     jqXHR.abort();
     });
     $.xhrPool = [];
     };

     $.ajaxSetup({
     beforeSend: function(jqXHR) {
     $.xhrPool.push(jqXHR);
     },
     complete: function(jqXHR) {
     var index = $.xhrPool.indexOf(jqXHR);
     if (index > -1) {
     $.xhrPool.splice(index, 1);
     }
     }
     });


     $('.jsCheck').each(function(){

     $.ajax({
     method: "POST",
     url: $(this).data('ajax'),
     data: { domain: $(this).data('domain'),tld: $(this).data('tld') }
     })
     .done(function( data ) {

     var obj = jQuery.parseJSON( data );
     //      alert('OK '+obj.domain+' id : '+obj.idproduct);
     var item = $('*[data-idproduct="'+obj.idproduct+'"]');
     if(obj.availlable) {
     item.show();
     // item.parent().addClass('text-success').append('<span class="dispo">Disponible</span>');
     // item.parent().append('<span class="dispo">Disponible</span>');
     item.removeAttr('disabled');

     }else {
     item.parent().addClass('text-grey');

     }
     item.parent().children('i').remove();


     });


     });

     $('#form_submitStep2').click(function () {
     $('.jsCheck').children('i').remove();
     $.xhrPool.abortAll();



     });


     // fin check ndd 1par un

     */







});