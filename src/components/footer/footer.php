<?php include_once('./components/icon/icon.php'); ?>  

<?php function FooterHead() { ?>
  	<link rel="stylesheet" href="/components/footer/style.css">  
<?php } ?>

<?php function FooterBody() { ?>
    <footer class="text">
        <ul>
            <li><a aria-label="Email" href="mailto: amon@ferri.us" target="_blank" rel="noopener noreferrer">amon@ferri.us</a></li>
			<li><a aria-label="LinkedIn" href="https://www.linkedin.com/in/amon-ferri/" target="_blank" rel="noopener noreferrer">https://www.linkedin.com/in/amon-ferri/</a></li>
            <li><a aria-label="GitHub" href="https://github.com/Arkendorf" target="_blank" rel="noopener noreferrer">https://github.com/Arkendorf</a></li>
        </ul>
	</footer>
    <footer class="icons">
        <ul>
            <li><a aria-label="Email" href="mailto: amon@ferri.us" target="_blank" rel="noopener noreferrer"><?php echo IconBody('email'); ?></a></li>
            <li><a aria-label="LinkedIn" href="https://www.linkedin.com/in/amon-ferri/" target="_blank" rel="noopener noreferrer"><?php echo IconBody('linkedin'); ?></a></li>
            <li><a aria-label="GitHub" href="https://github.com/Arkendorf" target="_blank" rel="noopener noreferrer"><?php echo IconBody('github'); ?></a></li>
        </ul>
	</footer>
<?php } ?>

