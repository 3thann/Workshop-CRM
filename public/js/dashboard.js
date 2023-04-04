var donuts_chart = document.getElementById('donuts_chart');
var bar_chart = document.getElementById('bar_chart');
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

// bar
const data_bar = {
  labels: [
    'Leads',
    'Leads morts',
    'Prospects',
    'Prospects morts',
    'Clients',
  ],
  datasets: [{
    label: "Statuts",
    data: [65, 59, 80, 81, 56],
    backgroundColor: [
      '#1b3141',
      '#084c61',
      '#1b3141',
      '#084c61',
      '#1b3141'
    ],
  }]
};

var barChart = new Chart(bar_chart, {
  type: 'bar',
  data: data_bar,
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
