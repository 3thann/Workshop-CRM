var donuts_chart = document.getElementById('donuts_chart');
var line_chart = document.getElementById('line_chart');

// donuts
const data_donuts = {
  labels: [
    'Clients',
    'Entreprises',
  ],
  datasets: [{
    label: 'nombre',
    data: [105, 19],
    backgroundColor: [
      '#1b3141',
      '#084c61'
    ],
    hoverOffset: 0
  }]
};

var donutsChart = new Chart(donuts_chart, {
  type: 'doughnut',
  data: data_donuts,
});

// line
const data_line = {
  labels: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 
  'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
  datasets: [{
    label: 'Clients',
    data: [5, 13, 15, 19, 23, 17, 8, 3, 11, 14, 18, 15],
    fill: false,
    borderColor: '#084c61',
    tension: 0.25
  }]
};

var lineChart = new Chart(line_chart, {
  type: 'line',
  data: data_line,
});
