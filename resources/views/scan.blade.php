@extends('layouts.app')

@section('title', 'New Scan')

@section('content')

<div class="row">
	<div class="col-md-6">

		<div class="card">

			<div class="header">
				<h4 class="title">New Scan</h4>
			</div>
			<div class="content">

				<form>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="host">Host</label>
								<input type="text" name="host" class="form-control" placeholder="127.0.0.1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Type</label>
								<select name="items" id="items" class="form-control select2" multiple>
									<option value="">Malware</option>
									<option value="">Fishing Attacks</option>
									<option value="">Social Engineering</option>
									<option value="">Insider Threats</option>
									<option value="">Denial of Service (DoS) Attacks</option>
									<option value="">Man-in-the-Middle Attacks</option>
									<option value="">SQL Injection</option>
									<option value="">Zero-Day Exploits</option>
									<option value="">Cross-Site Scripting (XSS)</option>
									<option value="">Data Breaches</option>
									<option value="">Physical Security Breaches</option>
									<option value="">IoT Vulnerabilities</option>
									<option value="">Weak Authentication</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="notes">Notes</label>
								<textarea rows="5" class="form-control" placeholder="Start typing..."></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
									<span class="sr-only">45% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-info btn-fill pull-right">Scan</button>
					<div class="clearfix"></div>					
				</form>

				<div class="footer">
					<hr>
					<div class="stats">
						<i class="fa fa-clock-o"></i> Real Time
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection
