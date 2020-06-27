$(document).ready(function () {
    const ctx2 = document.getElementById('ChartContactos').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Volumen',
                data: [4, 8, 9, 33, 4, 8, 9, 33, 4, 8, 9, 33,],
                backgroundColor: [
                    '#2D0464',
                    '#F1C40F',
                    '#27AE60',
                    '#5DADE2',
                    '#2E86C1',
                    '#D7DBDD',
                    '#626567',
                    '#5B2C6F',
                    '#EDBB99',
                    '#BA4A00',
                    '#28B463',
                    '#F1C40F'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    //Contactos

});