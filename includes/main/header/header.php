<div class="headerFollowFocus"></div>
<header role="header" class="rHeader">
	<nav role="navigation">

		<a href="index.php" class="rLogo">
			<?php
				include $baseUrl . 'assets/vectors/main/header/mkLogo.svg';
			?>
		</a>

		<ul>
			<div class="toggleNav">
				<li><a href="index.php" id="home" class="goldNavBar">HOME</a></li>
				<li><a href="documents/work.php" id="work" class="goldNavBar">WORK</a></li>
				<li><a href="documents/bloq.php" id="bloq" class="goldNavBar">BLOQ</a></li>
			</div>

			<a href="index.php">
				<?php
					include $baseUrl . 'assets/vectors/main/header/mkLogo.svg';
				?>
			</a>

			<div class="toggleNav">
				<li><a href="documents/hire.php" id="hire" class="goldNavBar">HIRE</a></li>
				<li><a href="documents/about.php" id="about" class="goldNavBar">ABOUT</a></li>
				<li><a href="documents/contact.php" id="contact" class="goldNavBar">CONTACT</a></li>
			</div>

		</ul>

		<?php
			include $baseUrl . 'assets/vectors/main/header/burgerNav.svg';
			include $baseUrl . 'assets/vectors/main/header/closeNav.svg';
		?>

	</nav>
