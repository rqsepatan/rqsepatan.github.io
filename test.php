<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sticky Table Headers Revisited | Demo 1</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/ShapeHoverEffectSVG/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18116"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Sticky Table Headers <em>Revisited</em> <span>Creating functional and flexible sticky table headers</span></h1>	
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html" title="Basic Usage">Basic Usage</a>
					<a href="index2.html" title="Biaxial Headers">Biaxial Headers</a>
					<a href="index3.html" title="Wide Tables">Wide Tables</a>
				</nav>
			</header>
			<div class="component">
				<h2>Basic usage</h2>
				<p>This is a basic usage example. Scroll down to see the sticky table header in action. And of course, multiple instances are supported. Tables are pre-populated with random user data retrieved from the <a href="http://randomuser.me/" title="Random User Generator">Random User Generator</a>.</p>
				<table>
					<thead>
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Mobile</th>
						</tr>
					</thead>
					<tbody>
						<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
						<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
						<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
						<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
						<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
						<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
						<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
						<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
						<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
						<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
						<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
						<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
						<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
						<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
						<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
						<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
						<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
						<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
						<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
						<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
						<tr><td class="user-name">gary coleman</td><td class="user-email">gary.coleman21@example.com</td><td class="user-phone">(398)-332-5385</td><td class="user-mobile">(888)-677-3719</td></tr>
						<tr><td class="user-name">rose parker</td><td class="user-email">rose.parker16@example.com</td><td class="user-phone">(293)-873-2247</td><td class="user-mobile">(216)-889-4933</td></tr>
						<tr><td class="user-name">chloe nelson</td><td class="user-email">chloe.nelson18@example.com</td><td class="user-phone">(957)-213-3499</td><td class="user-mobile">(207)-516-4474</td></tr>
						<tr><td class="user-name">eric bell</td><td class="user-email">eric.bell16@example.com</td><td class="user-phone">(897)-762-9782</td><td class="user-mobile">(565)-627-3002</td></tr>
						<tr><td class="user-name">douglas hayes</td><td class="user-email">douglas.hayes92@example.com</td><td class="user-phone">(231)-391-6269</td><td class="user-mobile">(790)-838-2130</td></tr>
						<tr><td class="user-name">cameron brown</td><td class="user-email">cameron.brown32@example.com</td><td class="user-phone">(204)-488-5204</td><td class="user-mobile">(508)-463-6811</td></tr>
						<tr><td class="user-name">nevaeh diaz</td><td class="user-email">nevaeh.diaz99@example.com</td><td class="user-phone">(436)-578-2946</td><td class="user-mobile">(906)-412-3302</td></tr>
						<tr><td class="user-name">kathy miller</td><td class="user-email">kathy.miller62@example.com</td><td class="user-phone">(724)-705-3555</td><td class="user-mobile">(764)-841-2531</td></tr>
						<tr><td class="user-name">susan king</td><td class="user-email">susan.king88@example.com</td><td class="user-phone">(774)-205-7754</td><td class="user-mobile">(639)-267-9728</td></tr>
						<tr><td class="user-name">jeffery ramirez</td><td class="user-email">jeffery.ramirez83@example.com</td><td class="user-phone">(723)-243-7706</td><td class="user-mobile">(172)-597-3422</td></tr>
					</tbody>
				</table>
				<p class="filler">Curabitur placerat, nulla ultricies a, convallis pellentesque, justo nec eros. Fusce condimentum ante. Proin dapibus, felis fermentum orci molestie turpis id nulla ac nunc. Nunc dictum accumsan et, eros.</p>
				<p class="filler">Duis non mi odio, sagittis lorem. Sed aliquet in, convallis turpis. Nullam semper id, eleifend congue. Proin vel mauris rhoncus ac, tincidunt rutrum molestie, nunc justo, hendrerit metus nonummy at, ligula. Donec libero malesuada enim quis massa.</p>
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Mobile</th>
						</tr>
					</thead>
					<tbody>
						<tr><td class="user-name">isaiah morgan</td><td class="user-email">isaiah.morgan50@example.com</td><td class="user-phone">(892)-322-1767</td><td class="user-mobile">(177)-767-9275</td></tr>
						<tr><td class="user-name">evelyn cooper</td><td class="user-email">evelyn.cooper69@example.com</td><td class="user-phone">(425)-779-2136</td><td class="user-mobile">(424)-467-5545</td></tr>
						<tr><td class="user-name">mason martin</td><td class="user-email">mason.martin65@example.com</td><td class="user-phone">(149)-890-9325</td><td class="user-mobile">(906)-475-4308</td></tr>
						<tr><td class="user-name">alexander hamilton</td><td class="user-email">alexander.hamilton19@example.com</td><td class="user-phone">(306)-140-4527</td><td class="user-mobile">(792)-168-5014</td></tr>
						<tr><td class="user-name">dennis nelson</td><td class="user-email">dennis.nelson55@example.com</td><td class="user-phone">(815)-876-6449</td><td class="user-mobile">(795)-652-4660</td></tr>
						<tr><td class="user-name">thomas hayes</td><td class="user-email">thomas.hayes24@example.com</td><td class="user-phone">(358)-195-5812</td><td class="user-mobile">(604)-195-8025</td></tr>
						<tr><td class="user-name">zoey parker</td><td class="user-email">zoey.parker17@example.com</td><td class="user-phone">(544)-275-6534</td><td class="user-mobile">(788)-994-6843</td></tr>
						<tr><td class="user-name">meghan cooper</td><td class="user-email">meghan.cooper47@example.com</td><td class="user-phone">(981)-986-8806</td><td class="user-mobile">(872)-260-8143</td></tr>
						<tr><td class="user-name">richard mitchelle</td><td class="user-email">richard.mitchelle41@example.com</td><td class="user-phone">(372)-385-4079</td><td class="user-mobile">(649)-916-5614</td></tr>
						<tr><td class="user-name">mason green</td><td class="user-email">mason.green14@example.com</td><td class="user-phone">(540)-641-3985</td><td class="user-mobile">(748)-678-9603</td></tr>
						<tr><td class="user-name">isaiah morgan</td><td class="user-email">isaiah.morgan50@example.com</td><td class="user-phone">(892)-322-1767</td><td class="user-mobile">(177)-767-9275</td></tr>
						<tr><td class="user-name">evelyn cooper</td><td class="user-email">evelyn.cooper69@example.com</td><td class="user-phone">(425)-779-2136</td><td class="user-mobile">(424)-467-5545</td></tr>
						<tr><td class="user-name">mason martin</td><td class="user-email">mason.martin65@example.com</td><td class="user-phone">(149)-890-9325</td><td class="user-mobile">(906)-475-4308</td></tr>
						<tr><td class="user-name">alexander hamilton</td><td class="user-email">alexander.hamilton19@example.com</td><td class="user-phone">(306)-140-4527</td><td class="user-mobile">(792)-168-5014</td></tr>
						<tr><td class="user-name">dennis nelson</td><td class="user-email">dennis.nelson55@example.com</td><td class="user-phone">(815)-876-6449</td><td class="user-mobile">(795)-652-4660</td></tr>
						<tr><td class="user-name">thomas hayes</td><td class="user-email">thomas.hayes24@example.com</td><td class="user-phone">(358)-195-5812</td><td class="user-mobile">(604)-195-8025</td></tr>
						<tr><td class="user-name">zoey parker</td><td class="user-email">zoey.parker17@example.com</td><td class="user-phone">(544)-275-6534</td><td class="user-mobile">(788)-994-6843</td></tr>
						<tr><td class="user-name">meghan cooper</td><td class="user-email">meghan.cooper47@example.com</td><td class="user-phone">(981)-986-8806</td><td class="user-mobile">(872)-260-8143</td></tr>
						<tr><td class="user-name">richard mitchelle</td><td class="user-email">richard.mitchelle41@example.com</td><td class="user-phone">(372)-385-4079</td><td class="user-mobile">(649)-916-5614</td></tr>
						<tr><td class="user-name">mason green</td><td class="user-email">mason.green14@example.com</td><td class="user-phone">(540)-641-3985</td><td class="user-mobile">(748)-678-9603</td></tr>
						<tr><td class="user-name">isaiah morgan</td><td class="user-email">isaiah.morgan50@example.com</td><td class="user-phone">(892)-322-1767</td><td class="user-mobile">(177)-767-9275</td></tr>
						<tr><td class="user-name">evelyn cooper</td><td class="user-email">evelyn.cooper69@example.com</td><td class="user-phone">(425)-779-2136</td><td class="user-mobile">(424)-467-5545</td></tr>
						<tr><td class="user-name">mason martin</td><td class="user-email">mason.martin65@example.com</td><td class="user-phone">(149)-890-9325</td><td class="user-mobile">(906)-475-4308</td></tr>
						<tr><td class="user-name">alexander hamilton</td><td class="user-email">alexander.hamilton19@example.com</td><td class="user-phone">(306)-140-4527</td><td class="user-mobile">(792)-168-5014</td></tr>
						<tr><td class="user-name">dennis nelson</td><td class="user-email">dennis.nelson55@example.com</td><td class="user-phone">(815)-876-6449</td><td class="user-mobile">(795)-652-4660</td></tr>
						<tr><td class="user-name">thomas hayes</td><td class="user-email">thomas.hayes24@example.com</td><td class="user-phone">(358)-195-5812</td><td class="user-mobile">(604)-195-8025</td></tr>
						<tr><td class="user-name">zoey parker</td><td class="user-email">zoey.parker17@example.com</td><td class="user-phone">(544)-275-6534</td><td class="user-mobile">(788)-994-6843</td></tr>
						<tr><td class="user-name">meghan cooper</td><td class="user-email">meghan.cooper47@example.com</td><td class="user-phone">(981)-986-8806</td><td class="user-mobile">(872)-260-8143</td></tr>
						<tr><td class="user-name">richard mitchelle</td><td class="user-email">richard.mitchelle41@example.com</td><td class="user-phone">(372)-385-4079</td><td class="user-mobile">(649)-916-5614</td></tr>
						<tr><td class="user-name">mason green</td><td class="user-email">mason.green14@example.com</td><td class="user-phone">(540)-641-3985</td><td class="user-mobile">(748)-678-9603</td></tr>
					</tbody>
				</table>
				<p class="filler">Phasellus hendrerit tellus felis mollis luctus. Aenean aliquet. Aliquam commodo id, bibendum nulla ut lacus. Aliquam ultricies odio, fermentum ut, neque. Sed mattis. Pellentesque tellus.</p>
				<p class="filler">Cum sociis natoque penatibus et massa. Integer convallis ligula bibendum vel, nibh. Etiam congue fringilla turpis. Nullam erat eu mauris.</p>
				<p class="filler">Pellentesque facilisis sodales. Aenean commodo odio fermentum leo mollis consectetuer. Curabitur lobortis quis, venenatis lorem eget tempus purus. Class aptent taciti sociosqu</p>
			</div>
			<section class="related">
				<p>If you enjoyed these effects you might also like:</p>
				<div><a href="http://tympanus.net/Development/HeaderEffects/"><h4>On Scroll Header Effects</h4></a></div>
				<div><a href="http://tympanus.net/Development/MultiElementSelection/"><h4>Multi-Item Selection</h4></a></div>
			</section>
		</div><!-- /container -->
	
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>