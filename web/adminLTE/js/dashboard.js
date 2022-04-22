/**
 * Created by julien on 01/03/16.
 */

var ctx = $("#chartAchats").get(0).getContext("2d");

$(function () {
    var data = {
        labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet","Août","Septembre","Octobre","Novembre","Décembre"],
        datasets: [
            {
                label: "Nombre de domaines achetés" ,
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,0.8)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data: $('#chartAchats').data('createndd')
            },
            {
                label: "Nombre de domaines renouvelés",
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,0.8)",
                highlightFill: "rgba(151,187,205,0.75)",
                highlightStroke: "rgba(151,187,205,1)",
                data: $('#chartAchats').data('renewndd')
            },
            {
                label: "Nombre de serveurs achetés" ,
                fillColor: "rgba(10,220,220,0.5)",
                strokeColor: "rgba(10,220,220,0.8)",
                highlightFill: "rgba(10,220,220,0.75)",
                highlightStroke: "rgba(10,220,220,1)",
                data: $('#chartAchats').data('instance')
            },
            {
                label: "Nombre de serveurs renouvelés",
                fillColor: "rgba(30,187,205,0.5)",
                strokeColor: "rgba(30,187,205,0.8)",
                highlightFill: "rgba(30,187,205,0.75)",
                highlightStroke: "rgba(30,187,205,1)",
                data: $('#chartAchats').data('renewinstance')
            }
        ]
    };

    var myBarChart = new Chart(ctx).Bar(data,
        {
            multiTooltipTemplate: "<%= datasetLabel %> : <%= value %>",

        });
});