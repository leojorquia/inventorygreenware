<?php
  include_once '../session.php';
  Session::init();
  include '../function.php';
  $function = new Functions();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GREENWARE</title>
  <link rel="shortcut icon" type="image/png" href="/inventory_greenware/assets/images/logos/Greenwarelogo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

  <style>
    .scrollable-container {
  height: 600px; /* Adjust the height as needed */
  overflow-y: auto;
}
.fw-semibold {
  color: white;
}
.btn-outline-info {
  color: green;
  border-color: green;
}

.btn-outline-info:hover {
  color: white;
  background-color: green; border-color: green;border-width: 2px;
}
#menu {
  color: green;
  border-color: green;
}

#menu:hover {
  color: white;
  background-color: green;
}
.app-header{
  background-color: green;
}
.message-body{background-color: green;}
.container-fluid{
  background-color: white; font-family: sans-serif;
}
.brand-logo{
  background-color: snow;
}
.sidebar-link{
  color: green;
}
#SvgjsPath1024{
  background-color: green;
}
.left-sidebar{
  background-color: green;
}

.hide-menus{
   color: white;
   font-size: x-large;
   text-align: center;
}
.sidebar-item selected:hover{
  color: green;
  background-color: white;
}
.ti-layout-dashboard{
  color:white ;
}
.ti-baby-carriage{
  color: white;
}
.ti-article{
  color: white;
}
.ti-chart-arrows{
  color: white;
}
.ti-box{
  color: white;
}
.ti-car-crane{
  color: white;
}
.ti-arrows-double-se-nw{
  color: white;
}
.ti-cards{
  color: white;
}
.ti-user{
  color: white;
}
.larger{
  font-size: large;
}
 #inputcategoryname input[type="text"]:hover,
#Description input[type="text"]:hover {
    border-color: green !important; border-width: 2px;
}
.sidebar-nav ul .sidebar-item .sidebar-link {
    color: white;
    display: -webkit-yellow;
    display: -ms-flexbox;
    display: flex;
    font-size: 15px;
    white-space: nowrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    line-height: 15px;
    position: relative;
    margin: 3px 0px 2px;
    padding: 10px;
    border-radius: 199px;
    gap: 10px;
    font-weight: 500;
    font-family: sans-serif;
}
.sidebar-nav ul .sidebar-item .sidebar-link:hover{
    background-color: yellowgreen; /* Change background color on hover */
    color: white; /* Change text color on hover */
}
.sidebar-nav ul .sidebar-item.selected > .sidebar-link,
.sidebar-nav ul .sidebar-item.selected > .sidebar-link.active  {
    background-color: greenyellow; /* Change background color for selected item */
    color: green; /* Change text color for selected item */
   display: -webkit-yellow;
    display: -ms-flexbox;
    display: flex;
    font-size: 15px;
    white-space: nowrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    line-height: 15px;
    position: relative;
    margin: 3px 0px 2px;
    padding: 10px;
    border-radius: 199px;
    gap: 10px;
    font-weight: 500;
}
  </style>
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="">
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a class="text-nowrap logo-img">
            <img src="/inventory_greenware/assets/images/logos/Finallogo.png" width="190" alt="">
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar">
      <ul id="sidebarnav">
        
            <li class="nav-small-cap" id="larger">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menus">ADMIN</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a> 
            </li>

               <li class="sidebar-item" >
              <a class="sidebar-link" href="products.php" aria-expanded="false">
                <span>
                <i class="ti ti-baby-carriage"></i>
                </span>
                <span class="hide-menu">Products</span>
              </a>

                 <li class="sidebar-item">
              <a class="sidebar-link" href="category.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>

                 <li class="sidebar-item">
              <a class="sidebar-link" href="brand.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Brand</span>
              </a>

               <li class="sidebar-item">
              <a class="sidebar-link" href="salestrans.php" aria-expanded="false">
                <span>
              <i class="ti ti-chart-arrows"></i>
                </span>
                <span class="hide-menu">Sales Transaction</span>
              </a>
            </li>

             <li class="sidebar-item">
              <a class="sidebar-link" href="stocks.php" aria-expanded="false">
                <span>
                 <i class="ti ti-box"></i>
                </span>
                <span class="hide-menu">Stocks</span>
              </a>
            </li>

             <li class="sidebar-item">
              <a class="sidebar-link" href="supplier.php" aria-expanded="false">
                <span>
                 <i class="ti ti-car-crane"></i>
                </span>
                <span class="hide-menu">Supplier</span>
              </a>
            </li>

               <li class="sidebar-item">
              <a class="sidebar-link" href="suppliertrans.php" aria-expanded="false">
                <span>
                  <i class="ti ti-arrows-double-se-nw"></i>
                </span>
                <span class="hide-menu">Supplier Transaction</span>
              </a>
            </li>

             <li class="sidebar-item">
              <a class="sidebar-link" href="feedbacks.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Feedbacks</span>
              </a>
            </li>

              <li class="sidebar-item">
              <a class="sidebar-link" href="users.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="/inventory_greenware/usertype.php" class="btn btn-outline-info mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

<div class="container-fluid">