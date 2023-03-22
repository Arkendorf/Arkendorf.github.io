<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/links/links.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo SignatureHead(); ?>
		<?php echo HeaderHead(); ?>
		<?php echo FooterHead(); ?>
		<?php echo LinksHead(); ?>
    </head>
    <body>
    	<?php echo HeaderBody('contact'); ?>
		<div class="top-right triangle"></div> 
		<div id="main">
			<div class="section">
				<h1>Contact Me</h1>
				<?php echo LinksBody(); ?>
			</div>
      	</div>
    </body>
	<?php echo FooterBody(); ?>
</html>
