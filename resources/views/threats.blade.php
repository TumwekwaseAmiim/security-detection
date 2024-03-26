@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="row">
	<div class="col-md-12">

		<a href="/scan" class="btn btn-primary">New Scan</a><hr>

		<div class="card">

			<div class="header">
				<h4 class="title">Threats Statistics</h4>
			</div>
			<div class="content">


				<table class="table table-hover table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Number</th>
						<th>Show</th>
						<th>Remove</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Malware</td>
							<td>5</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Fishing Attacks</td>
							<td>3</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Social Engineering</td>
							<td>2</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Insider Threats</td>
							<td>3</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Denial of Service (DoS) Attacks</td>
							<td>2</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Man-in-the-Middle Attacks</td>
							<td>1</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>SQL Injection</td>
							<td>2</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>Zero-Day Exploits</td>
							<td>1</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>Cross-Site Scripting (XSS)</td>
							<td>4</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>Data Breaches</td>
							<td>2</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>Physical Security Breaches</td>
							<td>3</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>12</td>
							<td>IoT Vulnerabilities</td>
							<td>2</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
						<tr>
							<td>13</td>
							<td>Weak Authentication</td>
							<td>1</td>
							<td>
								<a href="#">Click</a>
							</td>
							<td>
								<a href="#">Click</a>
							</td>
						</tr>
					</tbody>
				</table>


				<div class="footer">
<!-- 					<div class="legend">
						<i class="fa fa-circle text-info"></i> Open
						<i class="fa fa-circle text-danger"></i> Bounce
						<i class="fa fa-circle text-warning"></i> Unsubscribe
					</div> -->
					<hr>
					<div class="stats">
						<i class="fa fa-clock-o"></i> Scan conducted 2 days ago
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection
