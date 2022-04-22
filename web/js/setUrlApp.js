/**
 * Created by julien on 26/05/16.
 */

$(function () {

    if ($("#opt1").length && $("#opt2").length) {


        $("#form_options input[type=radio]").click(function () {

            if($(this).val()==1){
                $('#opt1').removeClass('hide');
                $('#opt2').addClass('hide');
            }else{
                $('#opt2').removeClass('hide');
                $('#opt1').addClass('hide');
            }
         })
    }
});