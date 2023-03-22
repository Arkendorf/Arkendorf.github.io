<?php include_once('./components/icon/icon.php'); ?>  

<?php function HighlightHead() { ?>
  	<link rel="stylesheet" href="/components/highlight/style.css">  
	<script src="/components/highlight/script.js"></script>
<?php } ?>

<?php function HighlightBody($buttonIcon = 'x') { ?>
    <div id="highlight" onclick="CloseHighlight(event)">
		<div id="highlight-resizer">
			<div id="highlight-frame">
				<button id="highlight-close" class="icon button" aria-label="Close image" onclick="CloseHighlight(event)"><?php echo IconBody($buttonIcon); ?></button>
			</div>		
		</div>
	</div>
<?php } ?>