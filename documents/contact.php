<!DOCTYPE html>
<html lang="en, de" ng-app>
<head>
	<?php
		require '../head.php';
	?>
</head>

<body>
	<?php
		include $baseUrl . 'includes/main/header/header.php';
	?>
		<h1>Would you like to create anything great, new, modern with me?</h1>
	</header>

	<main role="main">
		<div class="contentWrapper">
			<content>

				<div class="contactFormular">
					<?php // include $baseUrl . 'php/formProcess.php'; ?>

					<form method="post" action="https://formspree.io/kaufmann.mike@live.de" autocomplete="on">

						<legend>
							<li>
								Hello <span>{{Name}}</span>, get in touch!
							</li>
						</legend>

						<fieldset>
							<?php
								include $baseUrl . 'assets/vectors/contact/nameIcon.svg';
							?>
							<input type="text" name="Name:" placeholder="Name:" ng-model="Name" tabindex="1" required/>
						</fieldset>

						<fieldset>
							<?php
								include $baseUrl . 'assets/vectors/contact/emailIcon.svg';
							?>
							<input type="text" name="_replyto" placeholder="E-Mail:" tabindex="2" required/>
						</fieldset>

						<fieldset>
							<?php
								include $baseUrl . 'assets/vectors/contact/subjectIcon.svg';
							?>
							<input type="text" name="_subject" placeholder="Subject:" tabindex="3" required/>
						</fieldset>

						<fieldset>
							<?php
								include $baseUrl . 'assets/vectors/contact/messageIcon.svg';
							?>
							<textarea name="Message:" rows="8" cols="80" placeholder="Message:"tabindex="4" required></textarea>
						</fieldset>

						<input type="text" name="_gotcha" style="display:none" />
						<input type="hidden" name="_language" value="en" />
						<input type="hidden" name="_format" value="plain" />
						<input type="hidden" name="_next" value="<?php $SERVER[$_SELF]; ?>" />
						<button type="submit" tabindex="5">Send</button>
					</form>
				</div>

				<div id="googleMapsLocation">
					<iframe src="https://snazzymaps.com/embed/11953"></iframe>
				</div>

			</content>
		</div>
	</main>

	<?php
		include $baseUrl . 'includes/main/footer/footer.php';
		include $baseUrl . 'script.html';
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn_zYFrziSvLlQnkKkjmBKwCErB1V_jyA&callback=initMap"></script>
</body>
</html>
