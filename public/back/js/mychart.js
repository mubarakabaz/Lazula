'use strict';

window.chartColors = {
    green: '#75c181', // rgba(117,193,129, 1)
    blue: '#5b99ea', // rgba(91,153,234, 1)
    gray: '#a9b5c9',
    text: '#252930',
    border: '#e7e9ed'
};

/* Random number generator for demo purpose */
var randomDataPoint = function() { return Math.round(Math.random() * 100) };


//Area line Chart Demo

var lineChartConfig = {
    type: 'line',

    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],

        datasets: [{
            label: 'Dataset',
            backgroundColor: "rgba(117,193,129,0.2)",
            borderColor: "rgba(117,193,129, 0.8)",
            data: [
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint(),
                randomDataPoint()
            ],
        }]
    },
    options: {
        responsive: true,

        legend: {
            display: true,
            position: 'bottom',
            align: 'end',
        },

        tooltips: {
            mode: 'index',
            intersect: false,
            titleMarginBottom: 10,
            bodySpacing: 10,
            xPadding: 16,
            yPadding: 16,
            borderColor: window.chartColors.border,
            borderWidth: 1,
            backgroundColor: '#fff',
            bodyFontColor: window.chartColors.text,
            titleFontColor: window.chartColors.text,
            callbacks: {
                label: function(tooltipItem, data) {
                    return tooltipItem.value + '%';
                }
            },


        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.border,
                },
                scaleLabel: {
                    display: false,

                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    drawBorder: false,
                    color: window.chartColors.border,
                },
                scaleLabel: {
                    display: false,
                },
                ticks: {
                    beginAtZero: true,
                    userCallback: function(value, index, values) {
                        return value.toLocaleString() + '%';
                    }
                },
            }]
        }
    }
};

window.addEventListener('load', function() {

    var lineChart = document.getElementById('suhuLineChart').getContext('2d');
    window.myLine = new Chart(lineChart, lineChartConfig);

});