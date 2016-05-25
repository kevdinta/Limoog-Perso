$(function() {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Total des acquis - Etudiant'
        },
        subtitle: {
            text: 'Limoog'
        },
        xAxis: {
            categories: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Niveau d\'acquisition'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
                name: 'Non acquis',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'En cours d\'acquisition',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }, {
                name: 'Presque acquis',
                data: [5.0, 2.0, 4.0, 8.0, 6.0, 12.2, 14.0, 18.6, 12.2, 9.3, 5.6, 2.8]
            },
            {
                name: 'Acquis',
                data: [4.5, 8.2, 9.7, 12.5, 16.9, 18.2, 20.0, 14.6, 20.2, 12.3, 16.6, 14.8]
            }
        ]
    });
});

$(function() {
    $('#container1').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Total des acquis - Classe'
        },
        subtitle: {
            text: 'Limoog'
        },
        xAxis: {
            categories: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Niveau d\'acquisition'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
                name: 'Non acquis',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'En cours d\'acquisition',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }, {
                name: 'Presque acquis',
                data: [5.0, 2.0, 4.0, 8.0, 6.0, 12.2, 14.0, 18.6, 12.2, 9.3, 5.6, 2.8]
            },
            {
                name: 'Acquis',
                data: [4.5, 8.2, 9.7, 12.5, 16.9, 18.2, 20.0, 14.6, 20.2, 12.3, 16.6, 14.8]
            }
        ]
    });
});

