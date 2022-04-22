/**
 * Created by julien on 30/09/15.
 */
$(function () {

    $('.select select').change(function() {
        var val =$(this).val();
        var priceHT =val*$(this).parent().parent().children('.line_price').data('ht');
       // var priceTTC =val*$(this).parent().parent().children('.line_price').data('ttc');
        // Modification de la ligne de prix
        if(priceHT==0){
            $(this).parent().parent().children('.line_price').html('NC')
        }else{
            $(this).parent().parent().children('.line_price').html(Math.round(priceHT*100)/100+'€ HT');
        }
    });
});