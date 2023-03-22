<?php include_once('./components/icon/icon.php'); ?>  

<?php function HeaderHead() { ?>
  	<link rel="stylesheet" href="/components/header/style.css">  
<?php } ?>

<?php function HeaderBody($page) { ?>
	<nav id="header">
		<div id="desktop">
			<h2 id="name" onclick="location.href='/'">Amon Ferri</h2>
			<ul>
				<li><a class="button <?php echo $page=='home' ? 'active' : '' ?>" href="/">About</a></li>
				<li><a class="button <?php echo $page=='portfolio' ? 'active' : '' ?>" href="/portfolio">Portfolio</a></li>
				<li><a class="button <?php echo $page=='code' ? 'active' : '' ?>" href="/code">Code Samples</a></li>
				<li><a class="button <?php echo $page=='resume' ? 'active' : '' ?>" href="/resume">Resume</a></li>
				<li><a class="button <?php echo $page=='contact' ? 'active' : '' ?>" href="/contact">Contact Me</a></li>
			</ul>
		</div>
		<div id="mobile">
			<h2 id="name" onclick="location.href='/'">Amon Ferri</h2>
			<input type="checkbox" id="toggle" aria-label="Toggle navigation menu">
			<label class="icon button" for="toggle" id="toggle-button"><?php echo IconBody('menu'); ?></label>
			<div id="menu">
				<ul>
					<li><a class="button <?php echo $page=='home' ? 'active' : '' ?>" href="/">About</a></li>
					<li><a class="button <?php echo $page=='portfolio' ? 'active' : '' ?>" href="/portfolio">Portfolio</a></li>
					<li><a class="button <?php echo $page=='code' ? 'active' : '' ?>" href="/code">Code Samples</a></li>
					<li><a class="button <?php echo $page=='resume' ? 'active' : '' ?>" href="/resume">Resume</a></li>
					<li><a class="button <?php echo $page=='contact' ? 'active' : '' ?>" href="/contact">Contact Me</a></li>
				</ul>
			</div>
		</div>
	</nav>
<?php } ?>