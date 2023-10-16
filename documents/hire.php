<!DOCTYPE html>
<html lang="en, de">
<head>
	<?php
		require '../head.php';
	?>
</head>

<body>
	<?php
		include $baseUrl . 'includes/main/header/header.php';
	?>
		<h1>Take a quick look what I can offer you, based on your own brand or Identity.</h1>
	</header>

	<main role="main">
		<div class="contentWrapper">
			<content>
				<div id="gons">
					<div class="bigGons">
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/decagon.svg';
							?>
							<p id="website">Website</p>
						</div>
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/octagon.svg';
							?>
							<p id="logo">Logo</p>
						</div>
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/hexagon.svg';
							?>
							<p id="print">Print</p>
						</div>
					</div>

					<div class="miniGons">
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/miniHexagon.svg';
							?>
							<p id="p">P</p>
						</div>
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/miniOctagon.svg';
							?>
							<p id="l">L</p>
						</div>
						<div class="categorie">
							<?php
								include $baseUrl . 'assets/vectors/hire/miniDecagon.svg';
							?>
							<p id="w">W</p>
						</div>
					</div>
				</div>

				<div class="lel">
					<h1>Print</h1>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						<br /><br />Billing: 199€ ~ 799€
				</div>

				<div class="lel">
					<h1>Logo</h1>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						<br /><br />Billing: 499€ ~ 2999€
				</div>

				<div class="lel">
					<h1>Website</h1>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						<br /><br />Billing: 499€ ~ 9999€
				</div>

				<p class="goto">Go to
					<a href="documents/contact.php">contact
						<span>
							<?php
								include $baseUrl . 'assets/vectors/main/footer/linkArrow.svg';
							?>
						</span>
					</a>
				</p>

			</content>
		</div>
	</main>

	<?php
		include $baseUrl . 'includes/main/footer/footer.php';
		include $baseUrl . 'script.html';
	?>
</body>
</html>
