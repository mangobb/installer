@extends('fluxbb_installer::layout.main')

@section('main')

		<div id="brdinstall" class="installer">

			<img src="{{ $asset('vendor/fluxbb/installer/public/img/logo_320.png') }}" alt="FluxBB2" />

			<div id="instx" class="box clearfix">

				<h3 class="col-md-12 col-sm-12">Welcome to FluxBB 2.0 Installer!</h3><br />

				<div class="col-md-4 col-sm-4">
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h5 class="list-group-item-heading">Database Setup</h5>
							<p class="list-group-item-text">All information we need to create a connection with your database.</p>
						</a>
						<a href="#" class="list-group-item">
							<h5 class="list-group-item-heading">Administration Basics</h5>
							<p class="list-group-item-text">Create the very first account on your board.</p>
						</a>
						<a href="#" class="list-group-item">
							<h5 class="list-group-item-heading">Board Meta</h5>
							<p class="list-group-item-text">Settings for your board. You can change this later.</p>
						</a>
					</div>
					<div class="well">
						<h5>Step <strong><span id="progress_step_n">1</strong></span> on <strong><span id="progress_step_of">3</span></strong></h5>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
								<span class="sr-only">0% Complete</span>
							</div>
						</div>
					</div>
				</div>

				<form class="col-md-8 col-sm-8" method="post" role="form">

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h5><span class="icon-database icon-2x"></span>&nbsp; Database setup</h5>
						</div>
						<div class="panel-body">
							<div class="form-horizontal" role="form">
								<div class="form-group">
									<label for="db_type" class="col-md-4 control-label">Type<span>Which type of database server are you running?</span></label>
									<div class="col-md-6">
										<select class="form-control" name="driver">
											<option value="mysqli">MySQL Improved</option>
											<option value="mysqli_innodb">MySQL Improved (InnoDB)</option>
											<option value="mysql" selected="selected">MySQL Standard</option>
											<option value="mysql_innodb">MySQL Standard (InnoDB)</option>
										</select>
										
									</div>
								</div>
								<div class="form-group">
									<label for="db_host" class="col-md-4 control-label">Server Hostname<span>Where to find your server.</span></label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="db_host" name="host" value="" placeholder="localhost" />
									</div>
								</div>
								<div class="form-group">
									<label for="db_name" class="col-md-4 control-label">Name<span>Which database shall we use?</span></label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="db_name" name="database" value="" placeholder="fluxbb" />
									</div>
								</div>
								<div class="form-group">
									<label for="db_user" class="col-md-4 control-label">Username<span>What's yer name?</span></label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="db_user" name="username" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label for="db_pass" class="col-md-4 control-label">Password<span>What is yer favorite color?</span></label>
									<div class="col-md-8">
										<input type="password" class="form-control" id="db_pass" name="password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="db_prefix" class="col-md-4 control-label">Table Prefix<span>Ni!</span></label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="db_prefix" name="prefix" value="" placeholder="fluxbb_" />
									</div>
								</div>
							</div>
						</div>
					</div>

					<p class="clearfix">
						<a href="javascript:history.go(-1)" class="btn btn-danger pull-left">← Previous Step</a>
						<input type="submit" class="btn btn-success pull-right" name="save" value="Next Step →" />
					</p>

				</form>

			</div>

		</div>


@stop
