google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);



function drawChart() {
  var dataTable = new google.visualization.DataTable();

  dataTable.addColumn('string', 'Year');
  dataTable.addColumn('number', 'Lorem');
  dataTable.addColumn({type: 'string', role: 'tooltip'});
  dataTable.addColumn('number', 'Lorem');
  // A column for custom tooltip content
  dataTable.addColumn({type: 'string', role: 'tooltip'});
  dataTable.addRows([
    ['JAN',  200, '400K', 400,  '400K'],
    ['FEB',  800, '400K', 700,    '460K'],
    ['MAR',  660, '400K', 700,     '600K'],
    ['APR',  700,'400K',   150,   '540K'],
    ['MAY',  700, '400K',   910,  '540K'],
    ['JUN',  700, '400K',  700,   '540K'],
    ['JUL',  650, '400K',   320,  '230K'],      
    ['AUG',  600, '400K',   700,  '540K'],
    ['SEP',  700, '400K',    800, '440K'],
    ['OCT',  700, '400K',   300,  '240K'],
    ['NOV',  900,  '400K',   900, '740K'],
    ['DEC',  1200, '400K',    520,  '540K']
  ]);


  // var data = google.visualization.arrayToDataTable([
  //   ['Year', 'Lorem', 'Lorem'],
  //   ['JAN',  200,      400],
  //   ['FEB',  800,      460],
  //   ['MAR',  660,       600],
  //   ['APR',  700,      540],
  //   ['MAY',  700,      540],
  //   ['JUN',  700,      540],
  //   ['JUL',  650,      230],
  //   ['AUG',  600,      540],
  //   ['SEP',  700,      440],
  //   ['OCT',  700,      240],
  //   ['NOV',  900,      740],
  //   ['DEC',  230,      540]

  // ]);

  var options = {
    curveType: 'function',   // smooth fold
    legend: { position: 'bottom' },
    colors: ['#2DCA73', '#E4E8EB'],
    series: {
      0: {
        lineWidth: 4,
      },
      1: {
        lineWidth: 4,
      }
    },
    backgroundColor: {
      fill: '#ffffff',
    },
    // tooltip
    tooltip: {
      isHtml:true,
      legend: { position: 'none' },
      textStyle: {
        color: '#ffffff',
       fontName: 'TT Commons Medium',
      fontSize: 16,
      }
    },
      // left axis of values
    vAxis: {
      minValue: 0,  
      maxValue: 1500,
      baselineColor: '#C0CCDA',
      gridlines: {
        color: '#C0CCDA',
        count: 4
      },
      textStyle: { 
        color: '#9AA3B2', 
        fontName: 'TT Commons DemiBold', 
        fontSize: 12, 
      },
    },
    hAxis: {
      textStyle: { 
        color: '#9AA3B2', 
        fontName: 'TT Commons DemiBold', 
        fontSize: 12, 
      },
    },
    // animtion graphs
      animation: {
        duration: 1200,
        easing: 'in',
        startup: true
      },
      // 
      ChartArea: {
        left: 24,
        top:50,
        strokeWidth: 4,
      },
  };

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(dataTable, options);

}

// pie


// google.charts.load('current', {'packages':['corechart']});
//       google.charts.setOnLoadCallback(drawChart);

//       function drawChart() {

//         var data = google.visualization.arrayToDataTable([
//           ['Effort', 'Amount given'],
//           ['My all',     80],
//           ['My all',     20]
//         ]);

//         var options = {
//           pieHole: 0.5,
//           pieSliceTextStyle: {
//             color: 'black',
//           },
//           legend: 'none'
//         };

//         var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
//         chart.draw(data, options);
//       }