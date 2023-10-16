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
		<h1>View my design and coding projects and the process behind them.</h1>
	</header>

	<main role="main">
		<div class="contentWrapper">
			<content>

				<div id="workTopicSelection">
					<a href="#">
						<div class="workTopic">
							<?php
								include $baseUrl . 'assets/vectors/work/goldenRatio.svg';
							?>
							<h2>Logo</h2>
						</div>
					</a>

					<a href="#">
						<div class="workTopic">
							<?php
								include $baseUrl . 'assets/vectors/work/coding.svg';
							?>
							<h2>Coding</h2>
						</div>
					</a>

					<a href="#">
						<div class="workTopic">
							<?php
								include $baseUrl . 'assets/vectors/work/and.svg';
							?>
							<h2>And</h2>
						</div>
					</a>
				</div>

			</content>
		</div>
	</main>

	<?php
		include $baseUrl . 'includes/main/footer/footer.php';
		include $baseUrl . 'script.html';
	?>
</body>
</html>
