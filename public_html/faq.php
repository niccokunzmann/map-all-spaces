<!DOCTYPE html>
<? require '../private/init.php';?>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="/css/style.css" />
	<meta name="Map hackerspaces/fablabs/makerspaces " content="Dynamic map with all hackerspace, fablabs and makerspaces">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2M9QVB70G3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-2M9QVB70G3');
	</script>
	<title>Map all spaces - FAQ</title>
</head>

<body>
	<div id="header">
		<? include $PRIVATE.'/layout/navigate.php' ?>
	</div>
	<main id="content">
		<div class="content">
			<h1>FAQ</h1>
			<h2>What is this site?</h2>
			<div>A dynamic map of all hacker/maker spaces and fablabs. There is already some maps out there, but you have to register. After a while the map wil be outdated, so for this map there are several 'live' sources used to be always up-to-date. </div>
			<h2>What sources are used?</h2>
			<div>There are tree main sources of data :
				<ul>
					<li><a href="https://spaceapi.io/directory/">SpaceApi</a> directory
						<div>Read API directory and check every hackerspace json (if space is open or closed). Updated every hour. (Last update
							<?php echo date("F d Y H:i:s.",  filemtime("./api.geojson")); ?>)</div>
					</li>
					<li><a href="https://fablabs.io/">fablabs.oi</a> FabLab list
						<div>Fablab should have status 'active'. Updated weekly. (Last update
							<?php echo date("F d Y H:i:s.",  filemtime("./fablab.geojson")); ?>)</div>
					</li>
					<li><a href="https://wiki.fablabs-quebec.org/">fablabs quebec</a> FabLab list
						<div>Updated weekly. (Last update
							<?php echo date("F d Y H:i:s.",  filemtime("./fablabq.geojson")); ?>)</div>
					</li>
					<li><a href="https://wiki.hackerspaces.org">hackerspace.org</a> semantic data<div>Only added to map when space is active, has more then 1 member and site is online. Extra check if a wiki entry is als added by API or Fablab, if so remove wiki entry from map. (Dupe = 2 entrys are less then 200m apart and name match for 45% or more) Updated weekly. (Last update
							<?php echo date("F d Y H:i:s.",  filemtime("./wiki.geojson")); ?>)</div>
					</li>
				</ul>
			</div>
			Every 1th of the month the database and logfiles are removed and fill again from the sources.<br>
			If a site couldn't load (http error etc.) it wil be skipped till next monthly update.<br>
			Still don't see why your site is not included? Check our <a href="/errorlog.txt">error log</a> if we encountered some kind of error.
			<h2>Can you update my entry?</h2>
			<div>I don't keep a database of your data, I update this every day/week/month from the mentioned datasources. If you want to see where I got your data from, click on your icon and select 'source'. That should bring you to the data source where you can view your data. Allow at least 24 hours to update on this map.
			</div>
			<h2>Can i help you?</h2>
			<div>Cool, thats nice of you. You could help me several ways :
				<ul>
					<li>Buy me a drink at one of the events I visit (hackercampings in NL/DE or CCC congress).</li>
					<li>If an entry is invalid (e.g. hackerspace close) edit this at the source. You can easily find this to click on the icon and select 'source', this will redirect you straigt to source of the data. See also the <a href="/hswikilist.php">'Hackerspace Census'</a> page.</li>
					<li>Contribute with your knowledge, sourcecode of this project can be found at <a href="https://github.com/zeno4ever/map-all-spaces">Github</a></li>
				</ul>
			</div>
		</div>
	</main>
</body>