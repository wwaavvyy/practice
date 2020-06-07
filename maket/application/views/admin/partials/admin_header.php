<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CarRent</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<!--date picker -->
	<link href="<?php echo base_url("assets/datepicker3.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- sweet-alert --> 
    <link href="<?php echo base_url("assets/vendors/sweetalert/sweetalert.css"); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/build/css/custom.min.css"); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <a href="<?= base_url('admin/dashboard'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>CarRent</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="<?= base_url('assets/images/pp.svg'); ?>" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Добро пожаловать,</span>
                    <h2><?= $this->session->userdata('first_name'); ?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> Панель управления </a></li>
                  <?php if($this->session->userdata('type') == "admin" ) : ?>
                  <li><a><i class="fa fa-edit"></i> Сотрудники <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/employee/add'); ?>">Добавить сотрудника</a></li>
                      <li><a href="<?= base_url('admin/employee'); ?>">Все сотрудники</a></li>
                    </ul>
                  </li>
                  
                    <li>
                        <a><i class="fa fa-desktop"></i> Произв. &amp; модель <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url() . 'admin/manufacturers';?>">Добавить производителя</a></li>
                          <li><a href="<?php echo base_url() . 'admin/car_model';?>">Добавить модель</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                  <li><a><i class="fa fa-table"></i> Транспорт <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/vehicles'); ?>">Весь транспорт</a></li>
                      <li><a href="<?= base_url('admin/vehicles/soldlist'); ?>">Транспорт в аренде</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Настройки">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Полный экран">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Заблокировать">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" href="<?php echo base_url(); ?>" data-placement="top" title="На главную" >
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>

                

              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?= $this->session->userdata('first_name'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="<?php echo base_url() . 'admin/dashboard/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Выход</a></li>
                  </ul>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->