/**
 * Created by julien on 13/04/16.
 */
$(function () {

$("#rang-25").hide();
$("#rang-26").hide();
$("#rang-27").hide();
$("#rang-28").hide();



    $('#serveur-puissance select,#serveur-duree-abo select').on('change',function () {

        var val = $('#serveur-puissance select').val();
        // On masque toute les lignes du tableau détaiol puissance
        $('.hideAll').hide();

        // On affiche la ligne du tableau qui va bien
        $('#rang-'+val).show();
        $.ajax({
                method: "POST",
                url: $('#serveur-puissance').data('ajax'),
                data: { 'idproduct': val }
            })
            .done(function( data ) {
                
                $('#serveur-puissance').attr("data-val",Number(((data*$('#serveur-duree-abo select').val())).toFixed(2)));
                $('#affiche-serveur-puissance').html('<p>'+Number(((data*$('#serveur-duree-abo select').val())).toFixed(2))+' €</p>');
                addition();
            });

    });



    $('#serveur-nbre-vhosts select,#serveur-duree-abo select').on('change',function () {

        $.ajax({
                method: "POST",
                url: $('#serveur-nbre-vhosts').data('ajax'),
                data: { 'idproduct': $('#serveur-nbre-vhosts select').val() }
            })
            .done(function( data ) {
                $('#serveur-nbre-vhosts').attr("data-val",Number(((data*$('#serveur-duree-abo select').val())).toFixed(2)));
                $('#affiche-serveur-nbre-vhosts').html('<p>'+Number(((data*$('#serveur-duree-abo select').val())).toFixed(2))+' €</p>');
                addition();
            });

    });




    $('#serveur-save-auto select,#serveur-hdd select,#serveur-duree-abo select').on('change',function () {

        $.ajax({
                method: "POST",
                url: $('#serveur-save-auto').data('ajax'),
                data: { 'idproduct': $('#serveur-save-auto select').val(), 'idTotalHdd': $('#serveur-hdd select').val() }
            })
            .done(function( data ) {
                $('#serveur-save-auto').attr("data-val",Number(((data*$('#serveur-duree-abo select').val())).toFixed(2)));
                $('#affiche-serveur-save-auto').html('<p>'+Number(((data*$('#serveur-duree-abo select').val())).toFixed(2))+' €</p>');
                addition();
            });

        $.ajax({
                method: "POST",
                url: $('#serveur-hdd').data('ajax'),
                data: { 'idproduct': $('#serveur-hdd select').val() }
            })
            .done(function( data ) {
                $('#serveur-hdd').attr("data-val",Number(((data*$('#serveur-duree-abo select').val())).toFixed(2)));
                $('#affiche-serveur-hdd').html('<p>'+Number(((data*$('#serveur-duree-abo select').val())).toFixed(2))+' €</p>');
                addition();
            });


    });

    $('#serveur-duree-abo select').on('change',function () {
        $('#prix-serveur').html(   Number(( $('#prix-serveur').data('prixmois')*$('#serveur-duree-abo select').val() ).toFixed(2)) );
        addition();
    });


});


function addition(){

    $('#prix-total').html(
          Number((
        parseFloat(($('#prix-serveur').data('prixmois')*$('#serveur-duree-abo select').val()))
        +parseFloat($('#serveur-nbre-vhosts').attr('data-val'))
        +parseFloat($('#serveur-hdd').attr('data-val'))
        +parseFloat($('#serveur-save-auto').attr('data-val'))
        +parseFloat($('#serveur-puissance').attr('data-val'))
        ).toFixed(2))
    );
}