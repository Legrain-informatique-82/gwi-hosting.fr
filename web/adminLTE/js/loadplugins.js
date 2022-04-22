/**
 * Created by julien on 12/06/15.
 */

$(function () {


    $('.fvalidcgu').click(function(){




        //if($('.validCgu').prop('checked')){
        if($('.validCgu:checked').length != $('.validCgu').length){
            alert("Vous devez valider l'ensemble des conditions générales de ventes pour pouvoir terminer votre commande.");
            return false;
        }

    });


    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    // Affiche un message quand un utilisateur sélectionne un nombre de Go < au sien dans la gestion de son paclmail
    $('.selectgo').change(function(){
        if($(this).val() < $(this).data('default')){
            if($(this).val()==0){
                alert('Attention, si vous supprimer votre pack e-mail et que vous possèdez plus de 5 boites e-mails ou, utilisez plus d\'un Go. Vous ne pourrez plus utiliser vos boites e-mails tant que vous n\'aurez pas réduit le nombre de boites e-mails.');
            }else {
                alert('Attention, si vous réduisez la taille de votre espace disponible en dessous de ce que vous utilisez actuellement, vous ne pourrez plus recevoir ni envoyer d\'e-mails avant d\'avoir libéré de la place.');
            }
        }

    });

    if ( $( ".dataTable" ).length ) {

        $('.dataTable').addClass('no-wrap');

        var dataTable = $('.dataTable').DataTable(
            {
                responsive: true,
                "language": {
                    "sProcessing":     "Traitement en cours...",
                    "sSearch":         "Rechercher&nbsp;:",
                    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ment(s)",
                    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    "sInfoPostFix":    "",
                    "sLoadingRecords": "Chargement en cours...",
                    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                    "oPaginate": {
                        "sFirst":      "Premier",
                        "sPrevious":   "Pr&eacute;c&eacute;dent",
                        "sNext":       "Suivant",
                        "sLast":       "Dernier"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                    }
                }
            }
        );
        if($('.dataTable').data('orderfirstcol') == "desk"){
            dataTable
                .order( [ 0, 'desk' ] )
                .draw();
        }

        //$('form').submit(function(){
        //    $(dataTable.fnGetHiddenNodes()).find('input:checked').appendTo(this);
        //});

        $('form').submit( function() {
            // Supprime la dataTable au moment ou on valide, comme ça, tous les champs sont envoyés au serveur.
            dataTable.destroy();
            return true;
        });


    }
    if ( $( "#tabs" ).length ) {
        $("#tabs").tabs();
    }

    if ( $( "#tabs-with-hash" ).length ) {
        $("#tabs-with-hash").tabs({

            activate: function(event, ui) {
                window.location.hash = ui.newPanel.attr('id');
            }

        });
    }


    if ( $( "#tabs-with-active" ).length ) {
        $("#tabs-with-active").tabs({
           active: $('#tabActive').data('index')
        });
    }
    if ( $( ".textarea" ).length ) {
        $('.textarea').summernote();
    }
});