<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/icon/icon.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo SignatureHead(); ?>
        <?php echo HeaderHead(); ?>
		<?php echo FooterHead(); ?>
		<link rel="stylesheet" href="/resume/style.css">
    </head>
    <body>
        <?php echo HeaderBody('resume'); ?>
        <div class="top-right triangle"></div>  
        <div id="main">
            <div class="section">
                <h1>Resume</h1>
                <div class="aspect letter">
					<img id="preview" src="/resume/resume.png" alt="Resume">
					<a id="download" class="icon button" aria-label="Download resume" href="/resume/resume.pdf" download="Amon Ferri"><?php echo IconBody('download'); ?></a>
                </div>
            </div>
        </div>
		<?php echo FooterBody(); ?>
    </body>
</html>
