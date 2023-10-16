<!DOCTYPE html>
<html lang="en, de">
<head>
	<?php
		require 'head.php';
	?>
</head>

<body>
	<?php
		include 'includes/main/header/header.php';
	?>
		<h1>I am a Web and Graphic designer based in Bielefeld - Germany.</h1>
		<!-- <h1>I am an Brand designer based in Bielefeld - Germany.</h1> -->
	</header>

	<main role="main">
		<div class="contentWrapper">
			<content>

				<!-- Appearance and Essence. Start Quote. -->

				<!-- What I can offer you (Cool Animations, like a Responsive action). -->
				<!-- Benifit of / for the client. -->

				<li>Latest Projects:</li>
				<a href="#">
					<div class="latestProjectsBox">
						<div class="latestProjectsLogo">
							<?php
								include $baseUrl . 'assets/vectors/home/ldLogo.svg';
							?>
						</div>
						<h2>Last Death</h2>
					</div>
				</a>

				<a href="#">
					<div class="latestProjectsBox">
						<div class="latestProjectsLogo">
							<?php
								include $baseUrl . 'assets/vectors/home/bonkerzLogo.svg';
							?>
						</div>
						<h2>BonkerZ</h2>
					</div>
				</a>

				<p class="goto">Go to 
					<a href="documents/work.php">work
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
		include 'includes/main/footer/footer.php';
		include 'script.html';
	?>
</body>
</html>
