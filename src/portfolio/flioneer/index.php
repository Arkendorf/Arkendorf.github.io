<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Flioneer',
			'Pixel art roguelike featuring daring aircraft combat.',
			'Download',
			'https://arkendorf.itch.io/flioneer',
            '/portfolio/flioneer/gallery/walkthrough.mp4',
			'<p>Flioneer is a pixel art roguelike where you adopt the mantle of a Flioneer, and pilot your aircraft across increasingly dangerous skies. As you continue your adventure, you\'ll unlock new weapons, fight bosses, and discover new lands.</p>
			<p>I created Flioneer from scratch as a class project, using Lua and the LÖVE game engine. Some features I\'m proud of include:</p>
            <ul>
                <li>Level difficulty system where enemies are dynamically spawned to maintain a certain difficulty threshold for each level.</li>
                <li>Several unique bossfights with custom enemies and dialogue.</li>
                <li>Randomized map system with custom points of interest to ensure every playthrough feels unique.</li>
                <li>Weapon customization, allowing players to slot different weapon types into their aircraft to add variety to their experience.</li>
                <li>In-game tutorial system that explains mechanics to the player as they appear, to gradually introduce the player to the game instead of explaining everything at once.</li>
                <li>Completely custom pixel art sprites created by hand.</li>
            </ul>',
			array (
                '/portfolio/flioneer/gallery/walkthrough.mp4',
                '/portfolio/flioneer/gallery/menu.png',
                '/portfolio/flioneer/gallery/difficult.mp4',
				'/portfolio/flioneer/gallery/game.png',
                '/portfolio/flioneer/gallery/orca.mp4',
				'/portfolio/flioneer/gallery/shop.png',
				'/portfolio/flioneer/gallery/tutorial.png',
                '/portfolio/flioneer/gallery/gorious.mp4',
			),
		); ?>
    </body>
</html>
