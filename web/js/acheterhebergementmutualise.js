/**
 * Created by julien on 27/04/16.
 */
$(function () {

    $('#form_product').change(function(){
        $('.jsupd').removeClass('hide').hide();
        $('.id_'+$(this).val()).show();
    });
});