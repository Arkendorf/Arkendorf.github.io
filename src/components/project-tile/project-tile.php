<?php function ProjectTileHead() { ?>
  	<link rel="stylesheet" href="/components/project-tile/style.css">  
<?php } ?>

<?php function ProjectTileBody($name, $thumbnail, $tagline, $page) { ?>
    <div class="aspect square">
		<div class="project" onclick="location.href='<?php echo '/portfolio/'.$page; ?>'">
			<img src="<?php echo $thumbnail; ?>" alt ="Project thumbnail">
			<div class="info">
				<h3><?php echo $name; ?></h3>
				<p><?php echo $tagline; ?></p>
			</div>	
		</div>
	</div>
<?php } ?>

