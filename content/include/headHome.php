<nav class="navbar-nav navbar-expand-sm navbar-dark bg-dark pt-3 ">
		<!--   logo -->
		<?php if(!isset($_SESSION['id'])) : ?>
		  <a class="navbar-brand ml-5" href="../index.php">CHATonline</a>
		<?php else : ?>
		  <a class="navbar-brand ml-5" href="index.php">CHATonline</a>
		<?php endif ?>

		<!-- img logo -->
		

		<div class="container">

		<!--link -->
			<ul  class="navbar-nav float-right">
			<?php if(!isset($_SESSION['id'])) : ?>
				<li class="nav-item">
					<a href="content/connexion.php" class="nav-link">Connexion</a>
				</li>
				<li class="nav-item">
					<a href="Inscription.php" class="nav-link">Inscription</a>
				</li>
				<li class="nav-item">
					<a href="content/blog.php" class="nav-link">Blog</a>
				</li>
			<?php else : ?>
				<li class="nav-item">
					<a href="content/compte.php" class="nav-link">Compte</a>
				</li>
				<li class="nav-item">
					<a href="content/blog.php" class="nav-link">Blog</a>
				</li>
				<li class="nav-item">
					<a href="content/deconnexion.php" class="nav-link">Déconnexion</a>
				</li>
			<?php endif ?>
			</ul>
		</div>
	</nav>