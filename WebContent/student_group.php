<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- external library -->
<script src="libs/jquery/jquery-2.1.1.min.js"></script>
<script src="libs/jquery/jquery-ui-1.11.2.min.js"></script>
<link href="libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="libs/bootstrap/bootstrap.min.js"></script>

<!--Own coding -->
<link href="css/student.css" rel="stylesheet" />
</head>
<body>

	<div class="page-header">
		<h1>
			Peer System <small>Shar, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="student_home.php">Home</a></li>
			<li class="tab-style active"><a>Group</a></li>
			<li class="tab-style"><a href="student_report.php">Report</a></li>
			<li class="tab-style"><a href="student_assessment.php">Assessment</a></li>
			<li class="tab-style"><a href="student_logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="content">
		<h2 style="margin-left: 30px;">You are allocated to Group A.</h2>
				<div class="bs-example" data-example-id="collapse-accordion"
					style="text-align: center;">
					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne"
								data-toggle="collapse" data-parent="#accordion"
								href="#collapseOne" aria-expanded="false"
								aria-controls="collapseOne" class="collapsed">
								<h3 class="panel-title">Group Member</h3>
							</div>
							<div id="collapseOne" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne"
								aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<h4>Milli Zhu</h4>
									<h4>Nenyao Wang</h4>
									<h4>Eason Shar</h4>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo"
								data-toggle="collapse" data-parent="#accordion"
								href="#collapseTwo" aria-expanded="false"
								aria-controls="collapseTwo" class="collapsed">
								<h3 class="panel-title">Give Assessment to Group</h3>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingTwo"
								aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<h4>Group B</h4>
									<h4>Group C</h4>
									<h4>Group D</h4>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree"
								data-toggle="collapse" data-parent="#accordion"
								href="#collapseThree" aria-expanded="false"
								aria-controls="collapseThree" class="collapsed">
								<h3 class="panel-title">Get Assessment from Group</h3>
							</div>
							<div id="collapseThree" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingThree"
								aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<h4>Group E</h4>
									<h4>Group F</h4>
									<h4>Group G</h4>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour"
								data-toggle="collapse" data-parent="#accordion"
								href="#collapseFour" aria-expanded="false"
								aria-controls="collapseFour" class="collapsed">
								<h3 class="panel-title">Forum</h3>
							</div>
							<div id="collapseFour" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingFour"
								aria-expanded="false" style="height: 0px;">
								<div class="panel-body">Forum need to be discussed more
									details.</div>
							</div>
						</div>
					</div>
				</div>
	</div>
</body>
</html>