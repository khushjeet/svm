﻿<!DOCTYPE html>
<html lang="en">

<head>


    {{--
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin.css"> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/jqvmap/css/jqvmap.min.css">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin-2.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo-white.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-primary overflow-hidden">
							<div class="card-header">
								<h3 class="card-title text-white">Total Students</h3>
								<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 422</h5>
							</div>
							<div class="card-body text-center mt-3">
								<div class="ico-sparkline">
									<div id="sparkline12"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-success overflow-hidden">
							<div class="card-header">
								<h3 class="card-title text-white">New Students</h3>
								<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 357</h5>
							</div>
							<div class="card-body text-center mt-4 p-0">
								<div class="ico-sparkline">
									<div id="spark-bar-2"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-secondary overflow-hidden">
							<div class="card-header pb-3">
								<h3 class="card-title text-white">Total Course</h3>
								<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 547</h5>
							</div>
							<div class="card-body p-0 mt-2">
								<div class="px-4"><span class="bar1" data-peity='{ "fill": ["rgb(0, 0, 128)", "rgb(7, 135, 234)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="widget-stat card bg-danger overflow-hidden">
							<div class="card-header pb-3">
								<h3 class="card-title text-white">Fees Collection</h3>
								<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 3280$</h5>
							</div>
							<div class="card-body p-0 mt-1">
								<span class="peity-line-2" data-width="100%">7,6,8,7,3,8,3,3,6,5,9,2,8</span>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Income/Expense Report</h3>
							</div>
							<div class="card-body">
								<canvas id="barChart_2"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Income/Expense Report</h3>
							</div>
							<div class="card-body">
								 <canvas id="areaChart_1"></canvas>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-xxl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Assign Task</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task</th>
                                                <th scope="col">Assigned Professors</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Working Design report</td>
                                                <td>Herman Beck</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Fees Collection report</td>
												<td>Emma Watson</td>
												<td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Management report</td>
												<td>Mary Adams</td>
												<td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Library book status</td>
												<td>Caleb Richards</td>
												<td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Placement status</td>
												<td>June Lane</td>
												<td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <th>6</th>
                                                <td>Working Design report</td>
                                                <td>Herman Beck</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 70%;" role="progressbar">
															<span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body">
                                <div class="widget-todo dz-scroll" style="height:370px;" id="DZ_W_Notifications">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic1.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic2.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic3.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge success"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic4.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic5.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic6.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic7.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge danger"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic8.jpg">
												<div class="col">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div>
                                            <a class="timeline-panel text-muted mb-3 d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic9.jpg">
												<div class="col">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
										<li>
                                            <div class="timeline-badge warning"></div>
											<a class="timeline-panel text-muted d-flex align-items-center" href="javascript:void(0);">
                                                <img class="rounded-circle" alt="image" width="50" src="images/profile/education/pic10.jpg">
												<div class="col">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
											</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-12">
                        <div class="card">
							<div class="card-header">
                                <h4 class="card-title">New Student List </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
												<th class="px-5 py-3">Name</th>
                                                <th class="py-3">Assigned Professor</th>
                                                <th class="py-3">Branch</th>
                                                <th class="py-3">Status</th>
                                                <th class="py-3">Date Of Admit</th>
                                                <th class="py-3">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/5.png" width="30" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td class="py-2">30/03/2018</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Emma Watson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Emma Watson</td>
                                                <td class="py-2">Computer</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">11/07/2017</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/5.png" width="30" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Rowen Atkinson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Mary Adams</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-primary">DONE</span></td>
                                                <td class="py-2">05/04/2016</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Antony Hopkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Caleb Richards </td>
                                                <td class="py-2">Computer </td>
                                                <td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td class="py-2">05/04/2018</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Jennifer Schramm</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">June Lane</td>
                                                <td class="py-2">Fees Collection</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">17/03/2016</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/5.png" width="30" alt="">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Raymond Mims</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Herman Beck</td>
                                                <td class="py-2">Computer</td>
                                                <td><span class="badge badge-rounded badge-danger">Suspended</span></td>
                                                <td class="py-2">12/07/2014</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="p-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <img class="rounded-circle img-fluid" src="images/avatar/1.png" alt="" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Michael Jenkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2">Jennifer Schramm</td>
                                                <td class="py-2">Mechanical</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td class="py-2">15/06/2014</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>

	<!-- Chart sparkline plugin files -->
    <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!-- Demo scripts -->
    <script src="js/dashboard/dashboard-3.js"></script>

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>
</html>
