var ctxHistory = document.getElementById('historyChart').getContext('2d');
var mixedChart = new Chart(ctxHistory, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Request',
            data: [20, 10, 5,4, 6, 30, 67, 45, 10, 40, 12, 43],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }, {
            label: 'Donation',
            data: [43, 5, 65, 4, 6, 70, 21, 20, 9, 4, 21, 32],
            backgroundColor: 'rgba(132, 99, 255, 0.2)',
            borderColor: 'rgba(132, 99, 255, 1)',
            borderWidth: 1
        }],
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
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




// Doughnut
var ctx = document.getElementById('categoryChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Medical Supplies', 'Foods', 'Drinks', 'Stationery', 'Personal Care', 'Paper Products'],
        datasets: [{
            label: 'Requestment and Donation',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    
});


