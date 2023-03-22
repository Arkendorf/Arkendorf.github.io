<?php include_once('./components/icon/icon.php'); ?>  

<?php function LinksHead() { ?>
  	<link rel="stylesheet" href="/components/links/style.css">  
<?php } ?>

<?php function LinksBody() { ?>
    <div class="links">
        <a class="link aspect square" id="email-link" aria-label="Email" href="mailto: amon@ferri.us" target="_blank" rel="noopener noreferrer"><?php echo IconBody('email'); ?></a>
        <a class="link aspect square" id="linkedin-link" aria-label="LinkedIn" href="https://www.linkedin.com/in/amon-ferri/" target="_blank" rel="noopener noreferrer"><?php echo IconBody('linkedin'); ?></a>
        <a class="link aspect square" id="github-link" aria-label="GitHub" href="https://github.com/Arkendorf" target="_blank" rel="noopener noreferrer"><?php echo IconBody('github'); ?></a>
    </div>
<?php } ?>