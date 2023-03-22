<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Anivision',
			'Seeing the world through an animal\'s eyes with virtual reality.',
			'Read More',
			'https://dalilab.notion.site/Seeing-the-world-through-an-animal-s-eyes-with-virtual-reality-adec701dac734ec79c4781309dc27a7f',
			'/portfolio/anivision/gallery/explore.mp4',	
			'<p>Anivision uses virtual reality to let users explore and compare their experiences to those of animals with extreme adaptations, like the tarsier\'s night-vision or the honey bee\'s ultraviolet sight. Anivision is a more experiential, delightful, and immersive form of learning that enables the player to understand other perspectives by exploring as these animals.</p>
			<p>As a senior developer and mentor on the Anivision team, I\'ve built many of the application\'s core systems. Some of the features I\'m most proud of include:</p>
			<ul>
				<li>Modifying Unity\'s render pipeline to create a custom system where we can add and remove visual effects on the fly, depending on the currently active animal vision.</li>
				<li>Creating several custom render and post-processing effects, such a screen blur effect that\'s performant on mobile hardware, custom filters to mimic different forms of colorblindness, and artistic filters to simulate heat, UV light, and polarized light sensitivity.</li>
				<li>A node-based aerial pathfinding system to allow flying animals such as dragonflies and buzzards to travel through the scene and rest on trees. This includes custom graph generation, and creating a custom path-following algorithm that allows creatures to smoothly move and rotate between nodes to create the illusion of natural movement.</li>
				<li>A complex, branching tutorial system that integrates dialogue, subtitles, and scene interactions to introduce new users to the application.</li>
			</ul>
			<p>Currently, the Anivision team is focused on gamifying the experience, and modifying the experience flow to ensure users understand why animals possess the traits they do, rather than just understand how the traits function.</p>',
			array (
				'/portfolio/anivision/gallery/birds.mp4',
				'/portfolio/anivision/gallery/colorblind.png',
				'/portfolio/anivision/gallery/explore.mp4',
				'/portfolio/anivision/gallery/dragonfly.mp4',
				'/portfolio/anivision/gallery/scavenger.webp',
				'/portfolio/anivision/gallery/teaser.gif',
				'/portfolio/anivision/gallery/uv.png',
			),
		); ?>
    </body>
</html>
