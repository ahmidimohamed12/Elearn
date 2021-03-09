<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Spark - Responsive Admin &amp; Dashboard Template</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="index.html">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				Spark
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="font-weight-bold">Linda Miller</div>
					<small>Front-end Developer</small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a href="#dashboards" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-default.html">Default</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics.html">Analytics</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-e-commerce.html">E-commerce</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients <span
										class="sidebar-badge badge badge-pill badge-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-tasks.html">Tasks</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span
										class="sidebar-badge badge badge-pill badge-primary">New</span></a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Auth</span>
						</a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign
									In</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign
									Up</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404
									Page</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500
									Page</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Elements
					</li>
					<li class="sidebar-item">
						<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-flask"></i> <span class="align-middle">User Interface</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a>
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-notifications.html">Notifications</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs</a>
							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
						</ul>
					</li>
					<li class="sidebar-item active">
						<a href="#charts" data-toggle="collapse" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-chart-pie"></i> <span class="align-middle">Charts</span>
							<span class="sidebar-badge badge badge-pill badge-primary">New</span>
						</a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Forms</span>
						</a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Layouts</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-elements.html">Basic Elements</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-elements.html">Advanced Elements</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="forms-wizard.html">Wizard</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#tables" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-table"></i> <span class="align-middle">Tables</span>
						</a>
						<ul id="tables" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tables-bootstrap.html">Bootstrap</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables.html">DataTables</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#icons" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-heart"></i> <span class="align-middle">Icons</span>
						</a>
						<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="icons-ion.html">Ion
									Icons</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="calendar.html">
							<i class="align-middle mr-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Calendar</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a href="#maps" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-map-marker-alt"></i> <span class="align-middle">Maps</span>
						</a>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Extras
					</li>
					<li class="sidebar-item">
						<a href="#documentation" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-book"></i> <span class="align-middle">Documentation</span>
						</a>
						<ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="docs-getting-started.html">Getting Started</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="docs-plugins.html">Plugins</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="docs-changelog.html">Changelog</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#layouts" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-desktop"></i> <span class="align-middle">Layouts</span>
						</a>
						<ul id="layouts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-left.html">Left Sidebar</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex mr-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="form-inline d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-envelope-open"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>

			</nav>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							ApexCharts
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">ApexCharts</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Line Chart</h5>
									<h6 class="card-subtitle text-muted">Line charts are a typical pictorial representation that depicts trends and behaviors
										over time.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-line"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Area Chart</h5>
									<h6 class="card-subtitle text-muted">Area charts are used to represent quantitative variations.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-area"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Bar Chart</h5>
									<h6 class="card-subtitle text-muted">A bar chart is the best tool for displaying comparisons between categories of data.
									</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-bar"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Column Chart</h5>
									<h6 class="card-subtitle text-muted">A column chart uses vertical bars to display data and is used to compare values across
										categories.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-column"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pie Chart</h5>
									<h6 class="card-subtitle text-muted">Pie charts are an instrumental visualization tool useful in expressing data and
										information in terms of percentages, ratio.</h6>
								</div>
								<div class="card-body text-center">
									<div class="chart">
										<div id="apexcharts-pie" style="max-width: 440px;margin:auto;"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Heatmap Chart</h5>
									<h6 class="card-subtitle text-muted">Heatmap is a visualization tool that employs color the way a bar chart employs height
										and width in representing data.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-heatmap"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Mixed Chart</h5>
									<h6 class="card-subtitle text-muted">A Mixed Chart is a visualization that allows the combination of two or more distinct
										graphs.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-mixed"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Candlestick Chart</h5>
									<h6 class="card-subtitle text-muted">A candlestick chart is a style of financial chart used to describe price movements.
									</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<div id="apexcharts-candlestick"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-4 text-right">
							<p class="mb-0">
								&copy; 2020 - <a href="dashboard-default.html" class="text-muted">Spark</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>

	<script>
		$(function() {
			// Line chart
			var options = {
				chart: {
					height: 350,
					type: "line",
					zoom: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					width: [5, 7, 5],
					curve: "straight",
					dashArray: [0, 8, 5]
				},
				series: [{
						name: "Session Duration",
						data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
					},
					{
						name: "Page Views",
						data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
					},
					{
						name: "Total Visits",
						data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
					}
				],
				markers: {
					size: 0,
					style: "hollow", // full, hollow, inverted
				},
				xaxis: {
					categories: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
				},
				tooltip: {
					y: [{
						title: {
							formatter: function(val) {
								return val + " (mins)"
							}
						}
					}, {
						title: {
							formatter: function(val) {
								return val + " per session"
							}
						}
					}, {
						title: {
							formatter: function(val) {
								return val;
							}
						}
					}]
				},
				grid: {
					borderColor: "#f1f1f1",
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-line"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Area chart
			var options = {
				chart: {
					height: 350,
					type: "area",
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: "smooth"
				},
				series: [{
					name: "series1",
					data: [31, 40, 28, 51, 42, 109, 100]
				}, {
					name: "series2",
					data: [11, 32, 45, 32, 34, 52, 41]
				}],
				xaxis: {
					type: "datetime",
					categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00",
						"2018-09-19T05:30:00", "2018-09-19T06:30:00"
					],
				},
				tooltip: {
					x: {
						format: "dd/MM/yy HH:mm"
					},
				},
				colors: [
					window.theme.primary,
					window.theme.tertiary,
					window.theme.warning,
					window.theme.danger,
					window.theme.info
				]
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-area"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Bar chart
			var options = {
				chart: {
					height: 350,
					type: "bar",
					stacked: true,
				},
				plotOptions: {
					bar: {
						horizontal: true,
					},
				},
				stroke: {
					width: 1,
					colors: ["#fff"]
				},
				series: [{
					name: "Marine Sprite",
					data: [44, 55, 41, 37, 22, 43, 21]
				}, {
					name: "Striking Calf",
					data: [53, 32, 33, 52, 13, 43, 32]
				}, {
					name: "Tank Picture",
					data: [12, 17, 11, 9, 15, 11, 20]
				}, {
					name: "Bucket Slope",
					data: [9, 7, 5, 8, 6, 9, 4]
				}, {
					name: "Reborn Kid",
					data: [25, 12, 19, 32, 25, 24, 10]
				}],
				xaxis: {
					categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014],
					labels: {
						formatter: function(val) {
							return val + "K"
						}
					}
				},
				yaxis: {
					title: {
						text: undefined
					},
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return val + "K"
						}
					}
				},
				fill: {
					opacity: 1
				},
				legend: {
					position: "top",
					horizontalAlign: "left",
					offsetX: 40
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-bar"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Column chart
			var options = {
				chart: {
					height: 350,
					type: "bar",
				},
				plotOptions: {
					bar: {
						horizontal: false,
						endingShape: "rounded",
						columnWidth: "55%",
					},
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					show: true,
					width: 2,
					colors: ["transparent"]
				},
				series: [{
					name: "Net Profit",
					data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
				}, {
					name: "Revenue",
					data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
				}, {
					name: "Free Cash Flow",
					data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
				}],
				xaxis: {
					categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
				},
				yaxis: {
					title: {
						text: "$ (thousands)"
					}
				},
				fill: {
					opacity: 1
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return "$ " + val + " thousands"
						}
					}
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-column"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Pie chart
			var options = {
				chart: {
					height: 350,
					type: "donut",
				},
				dataLabels: {
					enabled: false
				},
				series: [44, 55, 13, 33]
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-pie"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Heatmap chart
			function generateData(count, yrange) {
				var i = 0;
				var series = [];
				while (i < count) {
					var x = (i + 1).toString();
					var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
					series.push({
						x: x,
						y: y
					});
					i++;
				}
				return series;
			}
			var options = {
				chart: {
					height: 350,
					type: "heatmap",
				},
				dataLabels: {
					enabled: false
				},
				colors: ["#008FFB"],
				series: [{
						name: "Metric1",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric2",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric3",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric4",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric5",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric6",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric7",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric8",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					},
					{
						name: "Metric9",
						data: generateData(20, {
							min: 0,
							max: 90
						})
					}
				],
				xaxis: {
					type: "category",
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-heatmap"),
				options
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Mixed chart
			var options = {
				chart: {
					height: 350,
					type: "line",
					stacked: false,
				},
				stroke: {
					width: [0, 2, 5],
					curve: "smooth"
				},
				plotOptions: {
					bar: {
						columnWidth: "50%"
					}
				},
				series: [{
					name: "TEAM A",
					type: "column",
					data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
				}, {
					name: "TEAM B",
					type: "area",
					data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
				}, {
					name: "TEAM C",
					type: "line",
					data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
				}],
				fill: {
					opacity: [0.85, 0.25, 1],
					gradient: {
						inverseColors: false,
						shade: "light",
						type: "vertical",
						opacityFrom: 0.85,
						opacityTo: 0.55,
						stops: [0, 100, 100, 100]
					}
				},
				labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003",
					"10/01/2003", "11/01/2003"
				],
				markers: {
					size: 0
				},
				xaxis: {
					type: "datetime"
				},
				yaxis: {
					title: {
						text: "Points",
					},
					min: 0
				},
				tooltip: {
					shared: true,
					intersect: false,
					y: {
						formatter: function(y) {
							if (typeof y !== "undefined") {
								return y.toFixed(0) + " points";
							}
							return y;
						}
					}
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-mixed"), {
					chart: {
						height: 350,
						type: "line",
						stacked: false,
					},
					stroke: {
						width: [0, 2, 5],
						curve: "smooth"
					},
					plotOptions: {
						bar: {
							columnWidth: "50%"
						}
					},
					series: [{
						name: "TEAM A",
						type: "column",
						data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
					}, {
						name: "TEAM B",
						type: "area",
						data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
					}, {
						name: "TEAM C",
						type: "line",
						data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
					}],
					fill: {
						opacity: [0.85, 0.25, 1],
						gradient: {
							inverseColors: false,
							shade: "light",
							type: "vertical",
							opacityFrom: 0.85,
							opacityTo: 0.55,
							stops: [0, 100, 100, 100]
						}
					},
					labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003",
						"10/01/2003", "11/01/2003"
					],
					markers: {
						size: 0
					},
					xaxis: {
						type: "datetime"
					},
					yaxis: {
						title: {
							text: "Points",
						},
						min: 0
					},
					tooltip: {
						shared: true,
						intersect: false,
						y: {
							formatter: function(y) {
								if (typeof y !== "undefined") {
									return y.toFixed(0) + " points";
								}
								return y;
							}
						}
					}
				}
			);
			chart.render();
		});
	</script>
	<script>
		$(function() {
			// Candlestick chart
			var seriesData = [{
					x: new Date(2016, 1, 1),
					y: [51.98, 56.29, 51.59, 53.85]
				},
				{
					x: new Date(2016, 2, 1),
					y: [53.66, 54.99, 51.35, 52.95]
				},
				{
					x: new Date(2016, 3, 1),
					y: [52.96, 53.78, 51.54, 52.48]
				},
				{
					x: new Date(2016, 4, 1),
					y: [52.54, 52.79, 47.88, 49.24]
				},
				{
					x: new Date(2016, 5, 1),
					y: [49.10, 52.86, 47.70, 52.78]
				},
				{
					x: new Date(2016, 6, 1),
					y: [52.83, 53.48, 50.32, 52.29]
				},
				{
					x: new Date(2016, 7, 1),
					y: [52.20, 54.48, 51.64, 52.58]
				},
				{
					x: new Date(2016, 8, 1),
					y: [52.76, 57.35, 52.15, 57.03]
				},
				{
					x: new Date(2016, 9, 1),
					y: [57.04, 58.15, 48.88, 56.19]
				},
				{
					x: new Date(2016, 10, 1),
					y: [56.09, 58.85, 55.48, 58.79]
				},
				{
					x: new Date(2016, 11, 1),
					y: [58.78, 59.65, 58.23, 59.05]
				},
				{
					x: new Date(2017, 0, 1),
					y: [59.37, 61.11, 59.35, 60.34]
				},
				{
					x: new Date(2017, 1, 1),
					y: [60.40, 60.52, 56.71, 56.93]
				},
				{
					x: new Date(2017, 2, 1),
					y: [57.02, 59.71, 56.04, 56.82]
				},
				{
					x: new Date(2017, 3, 1),
					y: [56.97, 59.62, 54.77, 59.30]
				},
				{
					x: new Date(2017, 4, 1),
					y: [59.11, 62.29, 59.10, 59.85]
				},
				{
					x: new Date(2017, 5, 1),
					y: [59.97, 60.11, 55.66, 58.42]
				},
				{
					x: new Date(2017, 6, ),
					y: [58.34, 60.93, 56.75, 57.42]
				},
				{
					x: new Date(2017, 7, 1),
					y: [57.76, 58.08, 51.18, 54.71]
				},
				{
					x: new Date(2017, 8, 1),
					y: [54.80, 61.42, 53.18, 57.35]
				},
				{
					x: new Date(2017, 9, 1),
					y: [57.56, 63.09, 57.00, 62.99]
				},
				{
					x: new Date(2017, 10, 1),
					y: [62.89, 63.42, 59.72, 61.76]
				},
				{
					x: new Date(2017, 11, 1),
					y: [61.71, 64.15, 61.29, 63.04]
				}
			];
			var options = {
				chart: {
					height: 350,
					type: "candlestick",
				},
				series: [{
					data: seriesData
				}],
				stroke: {
					width: 1
				},
				xaxis: {
					type: "datetime"
				}
			};
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-candlestick"),
				options
			);
			chart.render();
		});
	</script>

</body>

</html>