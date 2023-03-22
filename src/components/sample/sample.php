<?php include_once('./components/icon/icon.php'); ?>

<?php function SampleHead() { ?>
  	<link rel="stylesheet" href="/components/sample/style.css">  
	<link rel="stylesheet" href="/components/sample/prism.css">
	<script src="/components/sample/prism.js"></script>
<?php } ?>

<?php function SampleBody($title, $subtitle, $description, $file) { ?>
	<?php switch (pathinfo($file, PATHINFO_EXTENSION)) {
		case 'cs':
			$languageText = 'C#';
			$languageClass = 'language-csharp';
			break;
		case 'lua':
			$languageText = 'Lua';
			$languageClass = "language-lua";
			break;
		case 'js':
			$languageText = 'JavaScript';
			$languageClass = "language-javascript";
			break;
		case 'kt':
			$languageText = 'Kotlin';
			$languageClass = "language-kotlin";
			break;
	} ?>
    <div class="sample">
		<pre><code class="<?php echo $languageClass?>"><?php include_once($file); ?></code></pre>
		<div class="info" onclick="OpenHighlightSample(this)">
			<div class="header">
				<h3><?php echo $title; ?></h3>
				<div class="language"><?php echo $languageText?></div>
			</div>
			<div class="subtitle"><?php echo $subtitle; ?></div>
			<div class="description">
				<?php echo $description; ?>
			</div>
		</div>	
		<button class="icon button expand" aria-label="Expand code sample" onclick="OpenHighlightSample(this)"><?php echo IconBody('expand'); ?></button>
	</div>
<?php } ?>
