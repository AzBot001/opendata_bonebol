 <!-- Main content -->
 <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
         <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <!-- Search form -->
                 <h2 class="text-white pt-2">OpenData Diskominfo</h2>
                 <!-- Navbar links -->
                 <ul class="navbar-nav align-items-center  ml-md-auto ">
                     <li class="nav-item d-xl-none">
                         <!-- Sidenav toggler -->
                         <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                             <div class="sidenav-toggler-inner">
                                 <i class="sidenav-toggler-line"></i>
                                 <i class="sidenav-toggler-line"></i>
                                 <i class="sidenav-toggler-line"></i>
                             </div>
                         </div>
                     </li>
                 </ul>
                 <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                     <li class="nav-item dropdown">
                         <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <div class="media align-items-center">
                                 <span class="avatar avatar-sm rounded-circle">
                                     <img alt="Image placeholder" src="public/assets/img/theme/team-4.jpg">
                                 </span>
                                 <div class="media-body  ml-2  d-none d-lg-block">
                                     <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                                 </div>
                             </div>
                         </a>
                         <div class="dropdown-menu  dropdown-menu-right ">
                             <div class="dropdown-header noti-title">
                                 <h6 class="text-overflow m-0">Welcome!</h6>
                             </div>
                             <a href="#!" class="dropdown-item">
                                 <i class="ni ni-single-02"></i>
                                 <span>My profile</span>
                             </a>
                             <a href="#!" class="dropdown-item">
                                 <i class="ni ni-settings-gear-65"></i>
                                 <span>Settings</span>
                             </a>
                             <a href="#!" class="dropdown-item">
                                 <i class="ni ni-calendar-grid-58"></i>
                                 <span>Activity</span>
                             </a>
                             <a href="#!" class="dropdown-item">
                                 <i class="ni ni-support-16"></i>
                                 <span>Support</span>
                             </a>
                             <div class="dropdown-divider"></div>
                             <a href="#!" class="dropdown-item">
                                 <i class="ni ni-user-run"></i>
                                 <span>Logout</span>
                             </a>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- Header -->
     <!-- Header -->
     <div class="header bg-primary pb-6">
         <div class="container-fluid">
             <div class="header-body" >
                 <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                         <h6 class="h2 text-white d-inline-block mb-0"><i class="<?= $icon ?>"></i> <?= $title ?></h6>
                     </div>
                 </div>
                <?php if($_GET['t_admin'] == 'beranda_admin'): ?>
                 <!-- Card stats -->
                 <div class="row">
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                         <span class="h2 font-weight-bold mb-0">350,897</span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                             <i class="ni ni-active-40"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="mt-3 mb-0 text-sm">
                                     <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                     <span class="text-nowrap">Since last month</span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                         <span class="h2 font-weight-bold mb-0">2,356</span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                             <i class="ni ni-chart-pie-35"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="mt-3 mb-0 text-sm">
                                     <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                     <span class="text-nowrap">Since last month</span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                         <span class="h2 font-weight-bold mb-0">924</span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                             <i class="ni ni-money-coins"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="mt-3 mb-0 text-sm">
                                     <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                     <span class="text-nowrap">Since last month</span>
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card card-stats">
                             <!-- Card body -->
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col">
                                         <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                         <span class="h2 font-weight-bold mb-0">49,65%</span>
                                     </div>
                                     <div class="col-auto">
                                         <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                             <i class="ni ni-chart-bar-32"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <p class="mt-3 mb-0 text-sm">
                                     <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                     <span class="text-nowrap">Since last month</span>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                    <?php endif;?>
             </div>
         </div>
     </div>