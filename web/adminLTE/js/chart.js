/**
 * Created by julien on 23/06/15.
 */
$(function () {
var ctx = $("#chartMailbox").get(0).getContext("2d");
var ctx2 = $("#chartQuotaMailbox").get(0).getContext("2d");
var ctx3 = $("#chartForward").get(0).getContext("2d");
var data = [
    {
        value: $('#chartMailbox').data('used'),
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Utilisées"
    },
    {
        value: $('#chartMailbox').data('total')-$('#chartMailbox').data('used'),
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Libre"
    }


];

    var val = $('#chartQuotaMailbox').data('total')-$('#chartQuotaMailbox').data('used');
    if(val < 0){
        val=0;
    }
    var data2 = [
        {
            value: $('#chartQuotaMailbox').data('used'),
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Utilisées"
        },
        {
            value: val,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Libre"
        }


    ];

    var data3 = [
        {
            value: $('#chartForward').data('used'),
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Utilisées"
        },
        {
            value: $('#chartForward').data('total')-$('#chartForward').data('used'),
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Libre"
        }


    ];

    var myPieChart = new Chart(ctx).Doughnut(data,{animateScale: true});

    var myPieChart2 = new Chart(ctx2).Doughnut(data2,{animateScale: true});

    var myPieChart3 = new Chart(ctx3).Doughnut(data3,{animateScale: true});

});