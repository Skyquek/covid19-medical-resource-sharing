var ctxHistory = document.getElementById('historyChart').getContext('2d');
var mixedChart = new Chart(ctxHistory, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Request',
            data: request_record,//[20, 10, 5,4, 6, 30, 67, 45, 10, 40, 12, 43],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }, {
            label: 'Donation',
            data: donation_record,//[43, 5, 65, 4, 6, 70, 21, 20, 9, 4, 21, 32],
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
        labels: arrCategory, // ['Medical Supplies', 'Foods', 'Drinks', 'Stationery', 'Personal Care', 'Paper Products'],
        datasets: [{
            label: 'Requestment and Donation',
            data: arrCategoryCount,//[12, 19, 3, 5, 2, 3],
            backgroundColor: palette('tol', arrCategory.length).map(function(hex) {
                return '#' + hex;
              }),
            borderColor: palette('tol', arrCategory.length).map(function(hex) {
                return '#' + hex;
              }),
            borderWidth: 2
        }]
    },
    
});

// User State
var ctxHistory = document.getElementById('userStateChart').getContext('2d');
var mixedChart = new Chart(ctxHistory, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Registered User By State',
            data: userStateCMD,//[43, 5, 65, 4, 6, 70, 21, 20, 9, 4, 21, 32],
            backgroundColor: 'rgba(132, 99, 255, 0.2)',
            borderColor: 'rgba(132, 99, 255, 1)',
            borderWidth: 1
        }],
        labels: ['Perlis', 'Kedah', 'Penang', 'Perak', 'Selangor', 'Negeri Sembilan', 'Melaka', 'Johor', 'Pahang', 'Terengganu', 'Kelantan', 'Sarawak', 'Sabah']
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

// Request State
var ctxHistory = document.getElementById('requestStateChart').getContext('2d');
var mixedChart = new Chart(ctxHistory, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Number of Request By State',
            data: requestStateCMD,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 0.2)',
            borderWidth: 1
        },
        {
            label: 'Number of Donate By State',
            data: donateStateCMD,
            backgroundColor: 'rgba(132, 99, 255, 0.2)',
            borderColor: 'rgba(132, 99, 255, 1)',
            borderWidth: 1
        }],
        labels: ['Perlis', 'Kedah', 'Penang', 'Perak', 'Selangor', 'Negeri Sembilan', 'Melaka', 'Johor', 'Pahang', 'Terengganu', 'Kelantan', 'Sarawak', 'Sabah']
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
