
function toggleFields(){
    if($('#form_type').val()!=0){
        $('#form_companyName').parent().show();
        $('#form_insee').parent().show();
        $('#form_numMarque').parent().show();
        $('#form_numTva').parent().show();
    }else{
        $('#form_companyName').parent().hide();
        $('#form_insee').parent().hide();
        $('#form_numMarque').parent().hide();
        $('#form_numTva').parent().hide();
    }
}

$(function () {


var tabs = $( "#tabs" );
    var step = tabs.data('step');

    if(step==0)tabs.tabs({disabled : [1,2]});
    else if(step==1){tabs.tabs({disabled : [2]});tabs.tabs({active: 1})}
    else if(step==2)tabs.tabs({active:2});

    $("#check-part-1").click(function() {
        var myForm = $('#form2');

        if (!$('#form_type')[0].checkValidity()) {
            // If the form is invalid, submit it. The form won't actually submit;
            // this will just cause the browser to display the native HTML5 error messages.
            myForm.find(':submit').click();
            // Affiche les erreurs html5
            e.preventDefault();
        }else{
            toggleFields();
            tabs.tabs("enable", 1);
            tabs.tabs({active: 1});
        }
    });



    $("#back-to-part-1,.clicTab1").click(function() {
        tabs.tabs( "option", "disabled", [ 1,2 ] );
        tabs.tabs({ active: 0 });

    });
    $("#back-to-part-2,.clicTab2").click(function() {
        toggleFields();
        tabs.tabs( "option", "disabled", [ 2 ] );
        tabs.tabs({ active: 1 });

    });

    //$("#check-part-2").click(function() {
    $("#check-part-2").on('click', function(e) {
        var myForm = $('#form2');
        //console.log(myForm.serializeArray());
        if (
            !$('#form_name')[0].checkValidity()||
            !$('#form_firstname')[0].checkValidity()||
            !$('#form_address')[0].checkValidity()||
            !$('#form_city')[0].checkValidity()||
            !$('#form_phone')[0].checkValidity()||
            !$('#form_email')[0].checkValidity()
        ) {
            // If the form is invalid, submit it. The form won't actually submit;
            // this will just cause the browser to display the native HTML5 error messages.
            myForm.find(':submit').click();
            // Affiche les erreurs html5
            e.preventDefault();

        }else{
            $("#tabs").tabs("enable", 1);
            $("#tabs").tabs("enable", 2);
            $("#tabs").tabs({ active: 2 });
        }
    });



});