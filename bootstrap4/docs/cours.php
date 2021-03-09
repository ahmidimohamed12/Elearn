<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Nutriana</title>

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
				Nutriana
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="font-weight-bold">Linda Miller</div>
				</div>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item active">
						<a href="#dashboards" data-toggle="collapse" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">

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
							<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Cours</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Categorie Cours</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>


	<!-- Nav Appres -->
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
							Buttons
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">UI Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
							</ol>
						</nav>
					</div>
					<div class="row">

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Buttons</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap buttons style.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary">Primary</button>
										<button class="btn btn-secondary">Secondary</button>
										<button class="btn btn-success">Success</button>
										<button class="btn btn-danger">Danger</button>
										<button class="btn btn-warning">Warning</button>
										<button class="btn btn-info">Info</button>
									</div>
									<div>
										<button class="btn btn-primary" disabled>Primary</button>
										<button class="btn btn-secondary" disabled>Secondary</button>
										<button class="btn btn-success" disabled>Success</button>
										<button class="btn btn-danger" disabled>Danger</button>
										<button class="btn btn-warning" disabled>Warning</button>
										<button class="btn btn-info" disabled>Info</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Outline Buttons</h5>
									<h6 class="card-subtitle text-muted">Buttons without background color.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-outline-primary">Primary</button>
										<button class="btn btn-outline-secondary">Secondary</button>
										<button class="btn btn-outline-success">Success</button>
										<button class="btn btn-outline-danger">Danger</button>
										<button class="btn btn-outline-warning">Warning</button>
										<button class="btn btn-outline-info">Info</button>
									</div>
									<div>
										<button class="btn btn-outline-primary" disabled>Primary</button>
										<button class="btn btn-outline-secondary" disabled>Secondary</button>
										<button class="btn btn-outline-success" disabled>Success</button>
										<button class="btn btn-outline-danger" disabled>Danger</button>
										<button class="btn btn-outline-warning" disabled>Warning</button>
										<button class="btn btn-outline-info" disabled>Info</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Dropdown</h5>
									<h6 class="card-subtitle text-muted">Dropdowns styles with buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Primary
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Secondary
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Success
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Danger
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Warning
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn mb-1 btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Info
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>

									<div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Primary
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Secondary
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Success
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Danger
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Warning
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												Info
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Group</h5>
									<h6 class="card-subtitle text-muted">Button group components.</h6>
								</div>
								<div class="card-body">
									<h6 class="card-subtitle mb-2 text-muted">Horizontal button group</h6>
									<div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group mb-3" role="group" aria-label="Default button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group btn-group-sm mb-4" role="group" aria-label="Small button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Button toolbar</h6>
									<div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">
										<div class="btn-group mr-2" role="group" aria-label="First group">
											<button type="button" class="btn btn-secondary">1</button>
											<button type="button" class="btn btn-secondary">2</button>
											<button type="button" class="btn btn-secondary">3</button>
											<button type="button" class="btn btn-secondary">4</button>
										</div>
										<div class="btn-group mr-2" role="group" aria-label="Second group">
											<button type="button" class="btn btn-secondary">5</button>
											<button type="button" class="btn btn-secondary">6</button>
											<button type="button" class="btn btn-secondary">7</button>
										</div>
										<div class="btn-group" role="group" aria-label="Third group">
											<button type="button" class="btn btn-secondary">8</button>
										</div>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Vertical button group</h6>
									<div class="btn-toolbar">
										<div class="btn-group-vertical mr-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
										</div>
										<div class="btn-group-vertical mr-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
										</div>
										<div class="btn-group-vertical mr-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
										</div>
										<div class="btn-group-vertical mr-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Rounded Buttons</h5>
									<h6 class="card-subtitle text-muted">Rounded Bootstrap buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-pill btn-primary">Primary</button>
										<button class="btn btn-pill btn-secondary">Secondary</button>
										<button class="btn btn-pill btn-success">Success</button>
										<button class="btn btn-pill btn-danger">Danger</button>
										<button class="btn btn-pill btn-warning">Warning</button>
										<button class="btn btn-pill btn-info">Info</button>
									</div>
									<div>
										<button class="btn btn-pill btn-primary" disabled>Primary</button>
										<button class="btn btn-pill btn-secondary" disabled>Secondary</button>
										<button class="btn btn-pill btn-success" disabled>Success</button>
										<button class="btn btn-pill btn-danger" disabled>Danger</button>
										<button class="btn btn-pill btn-warning" disabled>Warning</button>
										<button class="btn btn-pill btn-info" disabled>Info</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Sizes</h5>
									<h6 class="card-subtitle text-muted">Fancy larger or smaller buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary btn-sm">Small</button>
										<button class="btn btn-primary">Medium</button>
										<button class="btn btn-primary btn-lg">Large</button>
									</div>
									<div>
										<button class="btn btn-primary btn-sm"><i class="fas fa-globe-americas"></i> Small</button>
										<button class="btn btn-primary"><i class="fas fa-globe-americas"></i> Medium</button>
										<button class="btn btn-primary btn-lg"><i class="fas fa-globe-americas"></i> Large</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Icon Buttons</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap buttons with icons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn mb-1 btn-primary"><i class="far fa-smile"></i> Primary</button>
										<button class="btn mb-1 btn-secondary"><i class="fas fa-globe-americas"></i> Secondary</button>
										<button class="btn mb-1 btn-success"><i class="fas fa-check"></i> Success</button>
										<button class="btn mb-1 btn-danger"><i class="fas fa-times"></i> Danger</button>
										<button class="btn mb-1 btn-warning"><i class="fas fa-exclamation"></i> Warning</button>
										<button class="btn mb-1 btn-info"><i class="fas fa-info"></i> Info</button>
									</div>

									<div>
										<button class="btn btn-primary"><i class="far fa-smile"></i></button>
										<button class="btn btn-secondary"><i class="fas fa-globe-americas"></i></button>
										<button class="btn btn-success"><i class="fas fa-check"></i></button>
										<button class="btn btn-danger"><i class="fas fa-times"></i></button>
										<button class="btn btn-warning"><i class="fas fa-exclamation"></i></button>
										<button class="btn btn-info"><i class="fas fa-info"></i></button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Social Buttons</h5>
									<h6 class="card-subtitle text-muted">Social buttons with icons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn mb-1 btn-facebook"><i class="align-middle fab fa-facebook"></i> Facebook</button>
										<button class="btn mb-1 btn-twitter"><i class="align-middle fab fa-twitter"></i> Twitter</button>
										<button class="btn mb-1 btn-google"><i class="align-middle fab fa-google"></i> Google</button>
										<button class="btn mb-1 btn-youtube"><i class="align-middle fab fa-youtube"></i> Youtube</button>
										<button class="btn mb-1 btn-vimeo"><i class="align-middle fab fa-vimeo"></i> Vimeo</button>
										<button class="btn mb-1 btn-dribbble"><i class="align-middle fab fa-dribbble"></i> Dribbble</button>
										<button class="btn mb-1 btn-github"><i class="align-middle fab fa-github"></i> Github</button>
										<button class="btn mb-1 btn-instagram"><i class="align-middle fab fa-instagram"></i> Instagram</button>
										<button class="btn mb-1 btn-pinterest"><i class="align-middle fab fa-pinterest"></i> Pinterest</button>
										<button class="btn mb-1 btn-flickr"><i class="align-middle fab fa-flickr"></i> Flickr</button>
										<button class="btn mb-1 btn-bitbucket"><i class="align-middle fab fa-bitbucket"></i> Bitbucket</button>
									</div>
									<div>
										<button class="btn mb-1 btn-facebook"><i class="align-middle fab my-1 fa-facebook"></i></button>
										<button class="btn mb-1 btn-twitter"><i class="align-middle fab my-1 fa-twitter"></i></button>
										<button class="btn mb-1 btn-google"><i class="align-middle fab my-1 fa-google"></i></button>
										<button class="btn mb-1 btn-youtube"><i class="align-middle fab my-1 fa-youtube"></i></button>
										<button class="btn mb-1 btn-vimeo"><i class="align-middle fab my-1 fa-vimeo"></i></button>
										<button class="btn mb-1 btn-dribbble"><i class="align-middle fab my-1 fa-dribbble"></i></button>
										<button class="btn mb-1 btn-github"><i class="align-middle fab my-1 fa-github"></i></button>
										<button class="btn mb-1 btn-instagram"><i class="align-middle fab my-1 fa-instagram"></i></button>
										<button class="btn mb-1 btn-pinterest"><i class="align-middle fab my-1 fa-pinterest"></i></button>
										<button class="btn mb-1 btn-flickr"><i class="align-middle fab my-1 fa-flickr"></i></button>
										<button class="btn mb-1 btn-bitbucket"><i class="align-middle fab my-1 fa-bitbucket"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.row -->

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

</body>

</html>