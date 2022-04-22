/**
 * Created by julien on 11/05/16.
 */



$(function () {

    $('#form_type input[type="radio"]').click(function(){

        if($(this).val()=="other"){
            // On affiche les elements
            $('#jsAllElems').removeClass('hide');
        }else{
            // On masque les elements
            $('#jsAllElems').addClass('hide');
        }

    });

});
