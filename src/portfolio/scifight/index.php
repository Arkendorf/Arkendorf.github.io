<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Sci-Fight',
			'Science-fiction-inspired multiplayer fighting game.',
			NULL,
			NULL,
      		'/portfolio/scifight/gallery/combat.mp4',
			'<p>Sci-Fight is a networked multiplayer fighting game with characters and abilities inspired by classic sci-fi archtypes and tropes. I created Sci-Fight as a solo project to further strengthen my networking and multiplayer development skills.</p>
			<p>Sci-Fight features:</p>
			<ul>
				<li>Custom networking library built using socket and enet.</li>
				<li>Character customization system, allowing players to customize appearance, weapons, and abilities.</li>
				<li>Custom, three-dimensional, node-based pathfinding algorithm with multiple possible end destinations.</li>
				<li>Path-following algorithms to allow computer-controlled opponents to navigate a path through a three-dimensional scene, by walking, jumping, falling, and using abilities.</li>
				<li>Customizable and modular ability system, allowing for quick creation of new abilities with varying effects, energy costs, and cooldowns.</li>
			</ul>',
			array (
				'/portfolio/scifight/gallery/combat.mp4',
				'/portfolio/scifight/gallery/title.png',
				'/portfolio/scifight/gallery/loadout.png',
				'/portfolio/scifight/gallery/maps.png',
				'/portfolio/scifight/gallery/timemachine.png',
			),
		); ?>
    </body>
</html>
