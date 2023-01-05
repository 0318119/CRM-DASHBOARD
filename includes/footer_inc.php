
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="https://www.logochemist.com/logo-design-services.php" target="_blank" class="nav-link">
                LOGO
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/mobile-app-development-services.php" target="_blank" class="nav-link">
                MOBILE APP
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/video-animation-services.php" target="_blank" class="nav-link">
                ANIMATION
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/website-design-development-services.php" target="_blank" class="nav-link">
                WEBSITE
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/social-media-marketing-services.php" target="_blank" class="nav-link">
                SOCIAL MEDIA
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/search-engine-optimization-services.php" target="_blank" class="nav-link">
                SEO
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/portfolio.php" target="_blank" class="nav-link">
                PORTFOLIO
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/packages.php" target="_blank" class="nav-link">
                PACKAGES
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.logochemist.com/about.php" target="_blank" class="nav-link">
                ABOUTUS
              </a>
            </li>
          </ul>
          <div class="copyright text-center">
                ©
                <script>
                document.write(new Date().getFullYear())
                </script>-2018 made with <i class="tim-icons icon-heart-2"></i> by
                <a href="https://logochemist.com" target="_blank">LOGOCHEMIST</a> for a better web.
            </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
  
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <script src="//cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
  <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/black-dashboard.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {

      var pagePathName= window.location.pathname;
      var pname = pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
      if (  pname != "index.php") {
        console.log( "Not Home!" );
      } else {
         showGraph();
         demo.initDashboardPageCharts();
      }


    });


    function showGraph()
        {
            {
                $.get("api/chart_overall.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];
                     var newdays = [];
                 var newmarks = [];

                    for (var i in data.monthly) {
                        name.push(data.monthly[i].month);
                        marks.push(data.monthly[i].sales);
                    }

                    
                    for (var j in data.current) {
                        newdays.push(data.current[j].day);
                        newmarks.push(data.current[j].sales);
                    }
                    var ctx = document.getElementById("graphCanvas").getContext('2d');
                    var gradientStroke1 = ctx.createLinearGradient(0, 230, 0, 50);
                    gradientStroke1.addColorStop(1, 'rgba(72,72,176,0.1)');
                    gradientStroke1.addColorStop(0.4, 'rgba(72,72,176,0.0)');
                    gradientStroke1.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors
                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: '$',
                                fill: true,
                                backgroundColor: gradientStroke1,
                                borderColor: '#d346b1',
                                borderWidth: 2,
                                borderDash: [],
                                borderDashOffset: 0.0,
                                pointBackgroundColor: '#d346b1',
                                pointBorderColor: 'rgba(255,255,255,0)',
                                pointHoverBackgroundColor: '#d346b1',
                                pointBorderWidth: 20,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 15,
                                pointRadius: 4,
                                data: marks
                            }
                        ]
                    };
                    var gradientStroke2 = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke2.addColorStop(1, 'rgba(66,134,121,0.15)');
                    gradientStroke2.addColorStop(0.4, 'rgba(66,134,121,0.0)'); //green colors
                    gradientStroke2.addColorStop(0, 'rgba(66,134,121,0)'); //green colors
                    var chartdataCurrent = {
                        labels: newdays,
                        datasets: [
                            {
                                label: '$',
                                fill: true,
                                backgroundColor: gradientStroke2,
                                borderColor: '#00d6b4',
                                borderWidth: 2,
                                borderDash: [],
                                borderDashOffset: 0.0,
                                pointBackgroundColor: '#00d6b4',
                                pointBorderColor: 'rgba(255,255,255,0)',
                                pointHoverBackgroundColor: '#00d6b4',
                                pointBorderWidth: 20,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 15,
                                pointRadius: 4,
                                data: newmarks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");
                    var graphTargetCurrent = $("#graphCanvasCurrent");
                    
                    // var progress = document.getElementById('animationProgress');
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,
                        options: gradientChartOptionsConfigurationWithTooltipPurple
                        
                    });

                    var barGraphCurrent = new Chart(graphTargetCurrent, {
                        type: 'line',
                        data: chartdataCurrent,
                        options: gradientChartOptionsConfigurationWithTooltipPurple
                        
                    });
                    // var myChartData = new Chart(ctx, chartdata);
                    // //var myChartData = new Chart(ctx, config);
                    // $("#0").click(function() {
                    //   console.log("Last 12 Months Chart");
                    //   var data = myChartData.chartdata.data;
                    //   data.datasets[0].data = marks;
                    //   data.labels = name;
                    //   myChartData.update();
                    // });
                    // $("#1").click(function() {
                    //   console.log("Current Month");
                    //   var data = myChartData.chartdata.data;
                    //   data.datasets[0].data = newmarks;
                    //   data.labels = newdays;
                    //   myChartData.update();
                    // });
                });
            }
        }
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      //demo.initDashboardPageCharts();

    });
  </script>

</body>

</html>