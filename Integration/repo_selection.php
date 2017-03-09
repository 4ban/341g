<?php
    session_start();
    $token = $_SESSION['token'];
    echo "<script> var auth = {token: '$token'};</script>";

?>

<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Material Design Lite</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/material.min.js"></script>

	<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
	<!-- <link rel="canonical" href="http://www.example.com/"> -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/additional.css">

	<script src="https://unpkg.com/github-api/dist/GitHub.bundle.min.js" defer></script>
	<script src="js/Chart.bundle.js" defer></script>
	<script src="js/repo.js" defer></script>
	<script src="js/init.js" defer></script>
	<script src="js/general_info.js" defer></script>
	<script src="js/report.js" defer></script>
	<script src="js/report_weekly.js" defer></script>
	<script src="js/burndown.js" defer></script>
    <script src="js/commentSection.js" defer></script>


</head>
<body>
	<div
		class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header
			class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-back"><a href="admin.php">Back to repo list</a></span>
				<span class="mdl-layout-title">Overview</span>
				<div class="mdl-layout-spacer"></div>
				<div
					class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<label class="mdl-button mdl-js-button mdl-button--icon"
						for="search"> <i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search">
						<label class="mdl-textfield__label" for="search">Enter
							your query...</label>
					</div>
				</div>
				<button
					class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"
					id="hdrbtn">
					<i class="material-icons">more_vert</i>
				</button>
				<ul
					class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right"
					for="hdrbtn">
					<li class="mdl-menu__item">About</li>
					<li class="mdl-menu__item">Contact</li>
					<li class="mdl-menu__item">Legal information</li>
				</ul>
			</div>
		</header>
		<div
			class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<img src="images/user.jpg" class="demo-avatar">
				<div class="demo-avatar-dropdown">
					<span style="padding-top: 10px;">hello@example.com</span>
					<div class="mdl-layout-spacer"></div>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<button class="mdl-button mdl-js-button mdl-button--primary"
					id="show-action">
					<i class="material-icons">add</i><span>Repo</span>
				</button>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="#"> <i
					class="mdl-color-text--blue-grey-400 material-icons"
					role="presentation">help_outline</i> <span class="">Help</span>
				</a>
			</nav>
		</div>
		<main class="mdl-layout__content mdl-color--grey-100"> <!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">

				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
					<a href="#scroll-tab-1" class="mdl-layout__tab is-active">General info</a>
					<a href="#scroll-tab-2" class="mdl-layout__tab">Overall Report</a>
					<a href="#scroll-tab-3" class="mdl-layout__tab">Weekly report</a> 
					<a href="#scroll-tab-4" class="mdl-layout__tab">Burndown</a>
                    <a href="#scroll-tab-5" class="mdl-layout__tab">Comments</a>
					

				</div>
			</header>

			<main class="mdl-layout__content">
			<section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
				<div class="page-content">
					<!-- Your content goes here -->
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--8-col mdl-cell--4-col-tablet" id="repo_description">
							<h2 id="repo_name"></h2>
						</div>
						<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet" id="collaborators"></div>

					</div>
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--6-col">
							<h3>Links to</h3>
							
								<table class="mdl-data-table mdl-js-data-table">
									<tr>
										<td class="mdl-data-table__cell--non-numeric" width="700px" id="repo_link"></td>									
									</tr>
									<tr>
										<td class="mdl-data-table__cell--non-numeric" width="700px">Project Homepage</td>
									</tr>
								</table>
						</div>
						<div class="mdl-cell mdl-cell--6-col">
							<h3>Repository details</h3>

							<table class="mdl-data-table mdl-js-data-table">
									<tr>
										
										<td class="mdl-data-table__cell--non-numeric" width="700px" id="commits"></td>								
									</tr>
									<tr>
										<td class="mdl-data-table__cell--non-numeric" width="700px" id="issues"></td>
									</tr>
							</table>
						</div>
					</div>
				</div>
			</section>
			<section class="mdl-layout__tab-panel" id="scroll-tab-2">
				<div class="page-content">
			    	<!-- Start of all weeks report -->
					<h1>All weeks report</h1>
					<p>
						<input type="checkbox" id="commitsPerCollaboratorCheck" name="commitsPerCollaborator" value="a1" checked>Commits per collaborator<Br>
		   				<input type="checkbox" id="issuesPerCollaboratorCheck" name="issuesPerCollaborator" value="a2" checked>Issues per collaborator<Br>
		   				<input type="checkbox" id="commentsPerCollaboratorCheck" name="commentsPerCollaborator" value="a3" checked>Comments per collaborator<Br>
		   			</p>

		   			<p>
						<input type="radio" id="TextData" name="dataDisplayForm" >Show data only in tables<Br>
				   		<input type="radio" id="GraphicData" name="dataDisplayForm" >Show data only in charts<Br>
				   		<input type="radio" id="MixedData" name="dataDisplayForm" checked>Show data either in tables and charts<Br>
				   	</p>
			   		<hr>
					<div class="chart" id="commitsChart">
						<h2>Number of commits per collaborator</h2>
						<div class="dataTable" id="commitsTable"></div>
						<div class="canvas" id="commitsCanvas">
							<div class="ChartType">
								<input type="radio" id="doughnutCPC" name="chartType1" checked>Doughnut
				   				<input type="radio" id="pieCPC" name="chartType1" >Pie
				   				<input type="radio" id="barCPC" name="chartType1" >Bar
				   				<input type="radio" id="lineCPC" name="chartType1" >Line
							</div>
							
						</div>
						<hr width="95%" size="5" color="#454545">
					</div>
					<div class="chart" id="issuesChart">
						<h2>Number of issues per collaborator</h2>
						<div class="dataTable" id="issuesTable"></div>
						<div class="canvas" id="issuesCanvas">
							<div class="ChartType">
								<input type="radio" id="doughnutIPC" name="chartType2" checked>Doughnut
				   				<input type="radio" id="pieIPC" name="chartType2" >Pie
				   				<input type="radio" id="barIPC" name="chartType2" >Bar
				   				<input type="radio" id="lineIPC" name="chartType2" >Line
							</div>
							
						</div>
						<hr width="95%" size="5" color="#454545">
					</div>
					<div class="chart" id="commetsChart">
						<h2>Number of comments per collaborator</h2>
						<div class="dataTable" id="commentsTable"></div>
						<div class="canvas" id="commentsCanvas">
							<div class="ChartType">
								<input type="radio" id="doughnutCoPC" name="chartType3" checked>Doughnut
				   				<input type="radio" id="pieCoPC" name="chartType3" >Pie
				   				<input type="radio" id="barCoPC" name="chartType3" >Bar
				   				<input type="radio" id="lineCoPC" name="chartType3" >Line
							</div>
						</div>
						<hr width="95%" size="5" color="#454545">
					</div>
			    <!-- End of all weeks report -->
				</div>
			</section>
			<section class="mdl-layout__tab-panel" id="scroll-tab-3">
				<div class="page-content" id="report_weekly">
					<!-- Start weekly report -->

					
				</div><!-- End of weekly report -->
			</section>
			<section class="mdl-layout__tab-panel" id="scroll-tab-4">
				<div class="page-content">
					<!-- Your content goes here -->
					<div class="chart" id="burndownChart">
						<h4>Project burndown chart</h4>
						<div class="burndownCanvas" id="burndownCanvas">
							<canvas id='burndown' class='visible'></canvas>
						</div>
                        <div>
                            <form name="due" action="" method="GET">Enter number of days:
                                <input type="text" name="in" value="60">
                                <input type="button" name="submit" value="Enter" onClick="setDueDate(this.form)">
                            </form>
                        </div>
					</div>
				</div>
			</section>

                <section class="mdl-layout__tab-panel" id="scroll-tab-5">
                    <div class="page-content">
                        <!-- Your content goes here -->
                        <div class="comment" id="commentSection">
                            <h2>Comment</h2>
                            <form action="" method="GET">
                                <textarea rows="25" cols="100" name="comment">Enter text here...</textarea>
                                <input type="button" name="submit" value='comment' onClick="submitComment(this.form)">
                            </form>

                        </div>


                    </div>
                </section>
			</main>
		</div>
		</main>
	</div>
</body>
</html>