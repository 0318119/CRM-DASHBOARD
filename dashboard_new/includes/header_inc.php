<head>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Logochemist Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/black-dashboard.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="./assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar"> 
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
      <div class="sidebar-wrapper" >
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            CRM
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            LOGOCHEMIST.COM
          </a>
        </div>
        
        <ul class="nav">
          <li class="active">
            <a href="./index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="">
            <a href="./orders.php">
              <i class="tim-icons icon-cart"></i>
              <p>Customer's Orders</p>
            </a>
          </li>

          <li class="">
            <a href="./customers-list.php">
              <i class="tim-icons icon-badge"></i>
              <p>Customer's List</p>
            </a>
          </li>

          <li class="">
            <a href="./customers-dispute.php">
              <i class="tim-icons icon-alert-circle-exc"></i>
              <p>Customer's Dispute</p>
            </a>
          </li>

          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-headphones"></i>
              <p>Agent's List</p>
            </a>
          </li>

          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-single-02"></i>
              <p>User's List</p>
            </a>
          </li>

          <li id="clicking" >
            <!-- <i ></i> -->
            <!-- ./icons.html -->
            <a href="#">
              <i class="tim-icons icon-heart-2"></i>
              <p>Site Leads & Quoatations <span class="down">&#8595;</span></p>
            </a>
                
            <!-- Drop Down Nav -->
            <ul id="hidden">

                <li>
                  <a href="./.html">
                    <i class="tim-icons icon-badge"></i>
                    <p>Customer's Leads</p>
                  </a>
                </li>
                <li>
                  <a href="./.html">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Call 2 Action</p>
                  </a>
                </li>

                <li>
                  <a href="./.html">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Request for Quotation</p>
                  </a>
                </li>

              <!-- <li class="one_sub_clicking">
                <a href="#">
                  <i class="tim-icons icon-badge"></i>
                  <p>Customer's Leads</p>
                </a> -->
               
                
                <!-- Sub Menus -->
                <!-- <ul class="one_sub_menu_hidden">
                  <li>
                    <a href="./map.html">
                      <i class="tim-icons icon-pin"></i>
                      <p>ABC</p>
                    </a>
                  </li>
                  <li>
                    <a href="./map.html">
                      <i class="tim-icons icon-pin"></i>
                      <p>ABC</p>
                    </a>
                  </li>
                  <li>
                    <a href="./map.html">
                      <i class="tim-icons icon-pin"></i>
                      <p>ABC</p>
                    </a>
                  </li>
                </ul> -->
              <!-- </li> -->
 
              
    
             

              <!-- <li class="scd_sub_clicking">
                <a href="#">
                  <i class="tim-icons icon-single-02"></i>
                  <p>User Profile</p>
                </a>
                
                
                <ul class="scd_sub_menu_hidden">
                  <li>
                    <a href="./user.html">
                      <i class="tim-icons icon-single-02"></i>
                      <p>User Profile</p>
                    </a>
                  </li>
                  <li>
                    <a href="./user.html">
                      <i class="tim-icons icon-single-02"></i>
                      <p>User Profile</p>
                    </a>
                  </li>
                  <li>
                    <a href="./user.html">
                      <i class="tim-icons icon-single-02"></i>
                      <p>User Profile</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="./tables.html">
                  <i class="tim-icons icon-puzzle-10"></i>
                  <p>Table List</p>
                </a>
              </li>
    
              <li class="thrd_sub_clicking">
                
                <a href="#">
                  <i class="tim-icons icon-align-center"></i>
                  <p>Typography</p>
                </a>
                
                
                <ul class="thrd_sub_menu_hidden">
                  <li>
                    <a href="./typography.html">
                      <i class="tim-icons icon-align-center"></i>
                      <p>Typography</p>
                    </a>
                  </li>
                  <li>
                    <a href="./typography.html">
                      <i class="tim-icons icon-align-center"></i>
                      <p>Typography</p>
                    </a>
                  </li>
                  <li>
                    <a href="./typography.html">
                      <i class="tim-icons icon-align-center"></i>
                      <p>Typography</p>
                    </a>
                  </li>
                </ul>

              </li>


              <li>
                <a href="./rtl.html">
                  <i class="tim-icons icon-world"></i>
                  <p>RTL Support</p>
                </a>
              </li> -->

            </ul>
          </li>

          

          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-button-power"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>


      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar navbar navbar-expand-lg navbar-absolute navbar-transparent-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" style="background-color:#E04ECA !important;">
      
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)"><img src="../img/logo.png" alt="" width="160"></a>
            
          </div>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse " id="navigation">
            <ul class="navbar-nav ml-auto">
            <span class="navbar-text display-4" style="text-transform:uppercase;">Customer Relation Management System</span>
              
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="./assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->