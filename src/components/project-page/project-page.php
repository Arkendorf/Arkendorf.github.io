<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/icon/icon.php'); ?>
<?php include_once('./components/highlight/highlight.php'); ?>

<?php function ProjectPageHead() { ?>
	<?php echo SignatureHead(); ?>
	<?php echo HeaderHead(); ?>
	<?php echo FooterHead(); ?>
	<?php echo HighlightHead(); ?>
	<link rel="stylesheet" href="/components/project-page/style.css">
<?php } ?>

<?php function ProjectPageBody($title, $tagline, $buttonText, $buttonLink, $background, $about, $galleryFiles) { ?>
    <?php echo HeaderBody('portfolio'); ?>
	<div id="main">
		<div id="title" class="screen">
			<div class="middle">
				<div class="single">
					<h1 class="light"><?php echo $title; ?></h1>
					<p class="light"><?php echo $tagline; ?></p>
					<?php if ($buttonText) { 
						echo '<a class="transparent button" href="'.$buttonLink.'" target="_blank" rel="noopener noreferrer">'.$buttonText.'</a>';
					} ?>
				</div>								
			</div>
			<div class="end">
				<button class="transparent icon button" aria-label="Down" onclick="ScrollToElement('about', true)"><?php echo IconBody('down'); ?></button>   
			</div>
			<?php switch (pathinfo($background, PATHINFO_EXTENSION)) {
				case 'mp4':
					echo '<video class="background" autoplay muted loop playsinline>
						<source src="'.$background.'" type="video/mp4">
					</video>';
					break;
				default:
					echo '<img class="background" src="'.$background.'" alt="Background">';
			} ?>			
		</div>
		<div id="about" class="section">
			<h2>About</h2>
			<?php echo $about; ?>
			<?php if ($galleryFiles) { ?>
				<h2>Gallery</h2>
				<div class="gallery">
					<?php foreach ($galleryFiles as $file) { 
						switch (pathinfo($file, PATHINFO_EXTENSION)) {
							case 'mp4':
								echo '<div class="gallery-item">
									<video onclick="OpenHighlightVideo(this)" autoplay muted loop playsinline>
										<source src="'.$file.'" type="video/mp4">
									</video>
								</div>';
								break;
							default:
								echo '<img class="gallery-item" src="'.$file.'" alt="Gallery item" onclick="OpenHighlightImage(this)">';
						}							
					} ?>
				</div>
			<?php } ?>	
		</div>
	</div>
	<div class="bottom-right triangle"></div>
	<?php echo FooterBody(); ?>  
	<?php echo HighlightBody(); ?> 
<?php } ?>

