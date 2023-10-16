<!DOCTYPE html>
<html lang="en, de">
<head>
	<?php
		require '../head.php';
	?>
</head>

<body>
	<?php
		include '../includes/main/header/header.php';
	?>
		<h1>My blog that goes in depth in to the world of design and programming.</h1>
	</header>

	<main role="main">
		<div class="contentWrapper">
			<content>

				<div id="searchBar">
					<input name="name" rows="1" placeholder="Search" />
					<?php
						include $baseUrl . 'assets/vectors/bloq/searchIcon.svg';
					?>
				</div>

				<div id="bloqTopicSelection">
					<a href="#">
						<div class="bloqTopic">
							<h2>Depth in Webdesign</h2>
							<p>The effect, the ways and how add depth in webdesign.</p>
						</div>
					</a>

					<a href="#">
						<div class="bloqTopic">
							<h2>Nine Rules of Logodesign</h2>
							<p>Nine important rules if you start designing a logo.</p>
						</div>
					</a>

					<a href="#">
						<div class="bloqTopic">
							<h2>OAuth 2.0</h2>
							<p>What is OAuth 2.0? How it works and how to set it up.</p>
						</div>
					</a>

					<a href="#">
						<div class="bloqTopic">
							<h2>URLs, URIs, URNs</h2>
							<p>Uniform Resource Locator, URIs, URNs diffrences between them.</p>
						</div>
					</a>

					<a href="#">
						<div class="bloqTopic">
							<h2>Instagram API</h2>
							<p>How to setup the API and what you can do with it in examples.</p>
						</div>
					</a>
				</div>

				<div class="loadMoreArrow">
					<?php
						include $baseUrl . 'assets/vectors/main/footer/linkArrow.svg';
					?>
				</div>

			</content>
		</div>
	</main>

	<?php
		include '../includes/main/footer/footer.php';
		include '../script.html';
	?>
</body>
</html>
