<?php
include '../php/lqbFunctions.php';

if ( !isAdmin() ) {
	goToAdminIndex();
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Upload Probanden-Daten</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../css/fonts/font-awesome-4.2.0/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="admin.css" media="all" />

	<!-- Javascript -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/kickstart.js"></script>
	<script type="text/javascript" src="admin.js"></script>
</head>
<body>
<div class="grid">


	<div class="col_12" style="margin-top:100px;">
		<div class="tab-content">
			<h4 class="col_12">Admin-Bereich</h4>
		</div>

	</div>

  <div class="col_12 right">
    <a class="button" href="../php/logout.php">Abmelden</a>
  </div>

	<!-- Uplaoad -->
	<div class="col_12">
		<h4 class="col_12">Upload</h4>
		<!-- TODO: Anleitung -->
		<p>Weitere Monate hochladen: (<a class="right" href="#">Anleitung</a>)</p>

		<form class="vertical col_12">

			<div class="col_6">
				<label for="file">Datei <span class="right">CSV-Datei (.csv)</span></label>
				<input id="file" type="file" class="file">
			</div>

			<div class="col_6">
				<label for="months">Monate, kommasepariert (oder "alle") <span class="right">z.B. 1, 2, 3</span></label>
				<input id="months" type="text" />
			</div>

			<div class="col_12 right">
				<button type="submit">Submit</button>
			</div>

		</form>
	</div>

	<!-- Tracking -->
	<div class="col_12">
		<h4>Tracking</h4>
		<ul id="tracking" class="alt">
			<li id="header"><span class="date">Datum</span><span class="event">Event</span><span class="origin">Seite</span><span class="ip">IP</span><span class="code">Code</span></li>
		</ul>
	</div>

	<div class="col_6">
		<button id="moreEarlier">Früher</button>
		<button id="moreLater" class="disabled">Später</button>
	</div>

	<div class="col_6 right">
		<a class="button" id="downloadAll" href="../php/getAllTracking.php" target="_blank">Alle Daten herunterladen (CSV)</a>
	</div>

</div>
</body>
</html>
