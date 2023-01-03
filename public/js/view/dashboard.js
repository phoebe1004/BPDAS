/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

    'use strict'

    // Make the dashboard widgets sortable Using jquery UI
    $('.connectedSortable').sortable({
      placeholder         : 'sort-highlight',
      connectWith         : '.connectedSortable',
      handle              : '.card-header, .nav-tabs',
      forcePlaceholderSize: true,
      zIndex              : 999999
    })
    $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move')

    // jQuery UI sortable for the todo list
    $('.todo-list').sortable({
      placeholder         : 'sort-highlight',
      handle              : '.handle',
      forcePlaceholderSize: true,
      zIndex              : 999999
    })

    // bootstrap WYSIHTML5 - text editor
    $('.textarea').summernote()

    $('.daterange').daterangepicker({
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    }, function (start, end) {
      window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    })

    /* jQueryKnob */
    $('.knob').knob()

  am4core.useTheme(am4themes_animated);

  var chart = am4core.create("chartdiv", am4maps.MapChart);
  chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

  chart.geodata = am4geodata_philippinesHigh;
  chart.projection = new am4maps.projections.Miller();

  var title = chart.chartContainer.createChild(am4core.Label);
  title.text = "No. of GIDA Barangays per Province";
  title.fontSize = 20;
  title.paddingTop = 0;
  title.align = "left";
  title.zIndex = 100;

  var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
  var polygonTemplate = polygonSeries.mapPolygons.template;
  polygonTemplate.tooltipText = "{name}: {value}";
  polygonSeries.heatRules.push({
    property: "fill",
    target: polygonSeries.mapPolygons.template,
    min: am4core.color("#ffffff"),
    max: am4core.color("#c52424")
  });
  polygonSeries.useGeodata = true;

  // add heat legend
  var heatLegend = chart.chartContainer.createChild(am4maps.HeatLegend);
  heatLegend.valign = "bottom";
  heatLegend.align = "left";
  heatLegend.width = am4core.percent(100);
  heatLegend.series = polygonSeries;
  heatLegend.orientation = "horizontal";
  heatLegend.padding(20, 20, 20, 20);
  heatLegend.valueAxis.renderer.labels.template.fontSize = 10;
  heatLegend.valueAxis.renderer.minGridDistance = 40;

  polygonSeries.mapPolygons.template.events.on("over", event => {
    handleHover(event.target);
  });

  polygonSeries.mapPolygons.template.events.on("hit", event => {
    handleHover(event.target);
  });

  function handleHover(mapPolygon) {
    if (!isNaN(mapPolygon.dataItem.value)) {
      heatLegend.valueAxis.showTooltipAt(mapPolygon.dataItem.value);
    } else {
      heatLegend.valueAxis.hideTooltip();
    }
  }
  polygonSeries.mapPolygons.template.stroke = am4core.color("#000000");
  polygonSeries.mapPolygons.template.strokeOpacity = 0.4;
  polygonSeries.mapPolygons.template.events.on("out", event => {
    heatLegend.valueAxis.hideTooltip();
  });

  chart.zoomControl = new am4maps.ZoomControl();
  chart.zoomControl.valign = "top";

  // life expectancy data
  polygonSeries.data =
  [
    {
      id: "PH-BAS",
      value: 15
    },
    {
      id: "PH-ZMB",
      value: 12
    },
    {
      id: "PH-SUR",
      value: 15
    },
    {
      id: "PH-TAR",
      value: 4
    },
    {
      id: "PH-TAW",
      value: 95
    },
    {
      id: "PH-ZAN",
      value: 80
    },
    {
      id: "PH-ZSI",
      value: 106
    },
    {
      id: "PH-ABR",
      value: 64
    },
    {
      id: "PH-AGN",
      value: 8
    },
    {
      id: "PH-AGS",
      value: 47
    },
    {
      id: "PH-AKL",
      value: 36
    },
    {
      id: "PH-ALB",
      value: 82
    },
    {
      id: "PH-ANT",
      value: 53
    },
    {
      id: "PH-APA",
      value: 48
    },
    {
      id: "PH-AUR",
      value: 19
    },
    {
      id: "PH-BAN",
      value: 2
    },
    {
      id: "PH-BTN",
      value: 0
    },
    {
      id: "PH-BTG",
      value: 36
    },
    {
      id: "PH-BEN",
      value: 46
    },
    {
      id: "PH-BIL",
      value: 3
    },
    {
      id: "PH-BOH",
      value: 38
    },
    {
      id: "PH-BUK",
      value: 142
    },
    {
      id: "PH-BUL",
      value: 6
    },
    {
      id: "PH-CAG",
      value: 29
    },
    {
      id: "PH-CAN",
      value: 37
    },
    {
      id: "PH-CAS",
      value: 131
    },
    {
      id: "PH-CAM",
      value: 2
    },
    {
      id: "PH-CAP",
      value: 16
    },
    {
      id: "PH-CAT",
      value: 24
    },
    {
      id: "PH-CAV",
      value: 25
    },
    {
      id: "PH-CEB",
      value: 31
    },
    {
      id: "PH-COM",
      value: 62
    },
    {
      id: "PH-DAO",
      value: 67
    },
    {
      id: "PH-DAS",
      value: 57
    },
    {
      id: "PH-DAV",
      value: 29
    },
    {
      id: "PH-DVO",
      value: 45
    },
    {
      id: "PH-DIN",
      value: 2
    },
    {
      id: "PH-EAS",
      value: 40
    },
    {
      id: "PH-GUI",
      value: 2
    },
    {
      id: "PH-IFU",
      value: 65
    },
    {
      id: "PH-ILN",
      value: 8
    },
    {
      id: "PH-ILS",
      value: 34
    },
    {
      id: "PH-ILI",
      value: 71
    },
    {
      id: "PH-ISA",
      value: 52
    },
    {
      id: "PH-KAL",
      value: 75
    },
    {
      id: "PH-LUN",
      value: 43
    },
    {
      id: "PH-LAG",
      value: 15
    },
    {
      id: "PH-LAN",
      value: 95
    },
    {
      id: "PH-LAS",
      value: 345
    },
    {
      id: "PH-LEY",
      value: 34
    },
    {
      id: "PH-MAG",
      value: 62
    },
    {
      id: "PH-MAD",
      value: 12
    },
    {
      id: "PH-MAS",
      value: 142
    },
    {
      id: "PH-00",
      value: 0
    },
    {
      id: "PH-MSC",
      value: 79
    },
    {
      id: "PH-MSR",
      value: 75
    },
    {
      id: "PH-MOU",
      value: 52
    },
    {
      id: "PH-NEC",
      value: 55
    },
    {
      id: "PH-NER",
      value: 53
    },
    {
      id: "PH-NCO",
      value: 103
    },
    {
      id: "PH-NSA",
      value: 75
    },
    {
      id: "PH-NUE",
      value: 28
    },
    {
      id: "PH-NUV",
      value: 83
    },
    {
      id: "PH-MDC",
      value: 35
    },
    {
      id: "PH-MDR",
      value: 55
    },
    {
      id: "PH-PLW",
      value: 137
    },
    {
      id: "PH-PAM",
      value: 12
    },
    {
      id: "PH-PAN",
      value: 10
    },
    {
      id: "PH-QUE",
      value: 143
    },
    {
      id: "PH-QUI",
      value: 21
    },
    {
      id: "PH-RIZ",
      value: 11
    },
    {
      id: "PH-ROM",
      value: 28
    },
    {
      id: "PH-WSA",
      value: 167
    },
    {
      id: "PH-SAR",
      value: 32
    },
    {
      id: "PH-SIG",
      value: 0
    },
    {
      id: "PH-SOR",
      value: 73
    },
    {
      id: "PH-SCO",
      value: 32
    },
    {
      id: "PH-SLE",
      value: 3
    },
    {
      id: "PH-SUK",
      value: 40
    },
    {
      id: "PH-SLU",
      value: 131
    },
    {
      id: "PH-SUN",
      value: 16
    },
    {
      id: "PH-ZAS",
      value: 170
    }
  ];
    // The Calender
    $('#calendar').datetimepicker({
      format: 'L',
      inline: true
    })

    // SLIMSCROLL FOR CHAT WIDGET
    $('#chat-box').overlayScrollbars({
      height: '250px'
    })

    /* Chart.js Charts */
    // Sales chart
    var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
    //$('#revenue-chart').get(0).getContext('2d');

    var salesChartData = {
      labels  : ['Ilocos', 'CAR', 'Cagayan Valley', 'Central Luzon', 'CaLaBaRZon', 'MiMaRoPa', 'Bicol', 'Western Visayas', 'Central Visayas', 'Eastern Visayas', 'Zamboanga Peninsula', 'Northern Mindanao', 'Davao', 'SOCCSKSARGEN', 'CARAGA', 'BARMM'],
      datasets: [
        {
          label               : 'Total No. of GIDA Barangays',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [95, 399, 174, 83, 230, 283, 452, 233, 122, 322, 353, 409, 260, 226, 81, 641]
        },
        {
          label               : 'Total No. of Barangays',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [3266, 1176, 2311, 3102, 4017, 1460, 3471, 4053, 3003, 4390, 1904, 2022, 1280, 1196, 1411, 2688]
        },
      ]
    }

    var salesChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
       title: {
              display: true,
              text: 'No. of GIDA Barangays per Region'
          },
      legend: {
        display: true,
      },
      scales: {
        xAxes: [{
          scaleLabel: {
          display: true,
          labelString: 'Regions'
        },
          stacked: true,
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
           stacked: false,
           scaleLabel: {
          display: true,
          labelString: 'No. of Barangays'
        },
          ticks: {
            beginAtZero: true,
                        callback: function (value, index, values) {
                if (value >= 1000) {
                  value /= 1000
                  value += 'k'
                }
                return value
              }
          },
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas, {
        type: 'bar',
        data: salesChartData,
        options: salesChartOptions
      }
    )

    // Sales graph chart
    var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
    //$('#revenue-chart').get(0).getContext('2d');

    var salesGraphChartData = {
      labels  : ['Under 1 yr', '1 - 4 yrs', '5 - 9 yrs', '10 - 14 yrs', '15 - 49 yrs', '50 - 59 yrs', '60 yrs and above'],
      datasets: [{
        label: "Male IP",
        type: "bar",
        stack: "Base",
        backgroundColor: "#4b94c0",
        data: [22699, 91789, 117807, 120383, 468963, 90080, 66203],
      }, {
        label: "Male",
        type: "bar",
        stack: "Base",
        backgroundColor: "#d2d6de",
        data: [104799, 320074, 410515, 424545, 1626308, 353174, 243223],
      }, {
        label: "Female IP",
        type: "bar",
        stack: "Sensitivity",
        backgroundColor: "#c04b4b",
        data: [22316, 89150, 114250, 117665, 441080, 88184, 67529],
      }, {
        label: "Female",
        type: "bar",
        stack: "Sensitivity",
        backgroundColor: "#ded2d2",
        backgroundColorHover: "#3e95cd",
        data: [89707, 314540, 396476, 418212, 1561121, 346728, 257619]
      }]
    }

    var salesGraphChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          stacked: true,
          gridLines : {
            display : true,
          }
        }],
        yAxes: [{
           stacked: false,
          ticks: {
            beginAtZero: true,
          },
          gridLines : {
            display : true,
          }
        }]
      }
    }
    // This will get the first returned node in the jQuery collection.
    var salesGraphChart = new Chart(salesGraphChartCanvas, {
        type: 'bar',
        data: salesGraphChartData,
        options: salesGraphChartOptions
      }
    )

  })

      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Montly',
            'Quarterly',
            'Semi-annual',
            'No meeting',
            'Irregular meeting',
        ],
        datasets: [
          {
            data: [13.99,19.50,3.56,3.15,0.62],
            backgroundColor : ['#28a745', '#ffc107', '#ff5e07', '#dc3545', '#868686'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })


  am4core.ready(function() {

  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  var mainContainer = am4core.create("chartdiv2", am4core.Container);
  mainContainer.width = am4core.percent(100);
  mainContainer.height = am4core.percent(100);
  mainContainer.layout = "horizontal";

  var usData = [
    {
      "age": "< 1",
      "male": 104799,
      "female": 89707
    },
    {
      "age": "1 to 4",
      "male": 320074,
      "female": 314540
    },
    {
      "age": "5 to 9",
      "male": 410515,
      "female": 396476
    },
    {
      "age": "10 to 14",
      "male": 424545,
      "female": 418212
    },
    {
      "age": "15 to 49",
      "male": 1626308,
      "female": 1561121
    },
    {
      "age": "50 to 59",
      "male": 353174,
      "female": 346728
    },
    {
      "age": "> 60",
      "male": 243223,
      "female": 257619
    }
  ];

  var maleChart = mainContainer.createChild(am4charts.XYChart);
  maleChart.paddingRight = 0;
  maleChart.data = JSON.parse(JSON.stringify(usData));

  // Create axes
  var maleCategoryAxis = maleChart.yAxes.push(new am4charts.CategoryAxis());
  maleCategoryAxis.dataFields.category = "age";
  maleCategoryAxis.renderer.grid.template.location = 0;
  //maleCategoryAxis.renderer.inversed = true;
  maleCategoryAxis.renderer.minGridDistance = 15;

  var maleValueAxis = maleChart.xAxes.push(new am4charts.ValueAxis());
  maleValueAxis.renderer.inversed = true;
  maleValueAxis.min = 0;
  maleValueAxis.max = 50;
  maleValueAxis.strictMinMax = true;

  maleValueAxis.numberFormatter = new am4core.NumberFormatter();
  maleValueAxis.numberFormatter.numberFormat = "#.#'%'";

  // Create series
  var maleSeries = maleChart.series.push(new am4charts.ColumnSeries());
  maleSeries.dataFields.valueX = "male";
  maleSeries.dataFields.valueXShow = "percent";
  maleSeries.calculatePercent = true;
  maleSeries.dataFields.categoryY = "age";
  maleSeries.interpolationDuration = 1000;
  maleSeries.columns.template.tooltipText = "Male, age{categoryY}: {valueX} ({valueX.percent.formatNumber('#.0')}%)";
  //maleSeries.sequencedInterpolation = true;


  var femaleChart = mainContainer.createChild(am4charts.XYChart);
  femaleChart.paddingLeft = 0;
  femaleChart.data = JSON.parse(JSON.stringify(usData));

  // Create axes
  var femaleCategoryAxis = femaleChart.yAxes.push(new am4charts.CategoryAxis());
  femaleCategoryAxis.renderer.opposite = true;
  femaleCategoryAxis.dataFields.category = "age";
  femaleCategoryAxis.renderer.grid.template.location = 0;
  femaleCategoryAxis.renderer.minGridDistance = 15;

  var femaleValueAxis = femaleChart.xAxes.push(new am4charts.ValueAxis());
  femaleValueAxis.min = 0;
  femaleValueAxis.max = 50;
  femaleValueAxis.strictMinMax = true;
  femaleValueAxis.numberFormatter = new am4core.NumberFormatter();
  femaleValueAxis.numberFormatter.numberFormat = "#.#'%'";
  femaleValueAxis.renderer.minLabelPosition = 0.01;

  // Create series
  var femaleSeries = femaleChart.series.push(new am4charts.ColumnSeries());
  femaleSeries.dataFields.valueX = "female";
  femaleSeries.dataFields.valueXShow = "percent";
  femaleSeries.calculatePercent = true;
  femaleSeries.fill = femaleChart.colors.getIndex(4);
  femaleSeries.stroke = femaleSeries.fill;
  //femaleSeries.sequencedInterpolation = true;
  femaleSeries.columns.template.tooltipText = "Female, age{categoryY}: {valueX} ({valueX.percent.formatNumber('#.0')}%)";
  femaleSeries.dataFields.categoryY = "age";
  femaleSeries.interpolationDuration = 1000;



  });
