// Chart.js librairy
import Chart from 'chart.js';

//Chart's presentation generation
let myLineChart = document.getElementById('myChart').getContext('2d');
    let negoChart = new Chart(myChart,
    {
        type:'line',
        data:
        {
            labels:
                ['Tour 1',
                 'Tour 2',
                 'Tour 3',
                 'Tour 4',
                 'Tour 5',
                 'Tour 6',
                 'Tour 7',
                 'Tour 8'],
            datasets:
            [{
                label:'Acheteur',
                data:[
                    2500, 3000, 3100, 3150, 3600, 4000, 4700, 5300
                ],
                backgroundColor: '#4abfc871',
                borderColor: '#4abfc8'
            },
            {
                label:'Vendeur',
                data:[
                    7500, 7400, 7000, 6900, 6950, 6500, 6000, 5300
                ],
                backgroundColor: '#ffee5171',
                borderColor: '#ffee51',
            }],
        },
        options:
        {
            legend:
            {
                labels: {
                    fontFamily: 'Nunito', fontColor: 'gray' , fontStyle: 'bold'
                },
                data: {
                    fontFamily: 'Nunito'
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            animation: {
                duration: 6000,
                easing: 'easeInBounce'
            }
        }
    });

