<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Supply & Demand',
			'Sci-fi tower defense game created for a 48 hour game jam.',
			'Download',
			'https://arkendorf.itch.io/supply-demand',
            '/portfolio/supplydemand/gallery/walkthrough.mp4',
			'<p>Supply & Demand is a sci-fi-themed tower defense game, where the player controls a factory that produces autonomous defense turrets. The player must either choose to use these turrets themselves to defend their factory from the incoming alien horde, or to give these turrets to defenseless civilians to increase their score.</p>
            <p>Supply & Demand was created in 48 hours for the inaugural Yogscast Game Jam. The theme for the jam was "giving". The game received 14th place, out of the 337 entries into the contest.</p>
			<p>Interesting features included in Supply & Demand:</p>
            <ul>
                <li>Custom pathfinding algorithm to allow enemies to navigate between towers and reach the factory.</li>
                <li>Turret prioritization system that allowed different types of turrets to use different criteria to decide which enemies to target. For example, the turrets that deal heavier damage prioritize the higher-health enemies to prevent damage overflow.</li>
                <li>Abstracted enemy and turret information into a easily-modified parameters to allow for the easy creation of new turret and enemy types.</li>
            </ul>',
			array (
                '/portfolio/supplydemand/gallery/walkthrough.mp4',
                '/portfolio/supplydemand/gallery/logo.png',
                '/portfolio/supplydemand/gallery/wave15.png',
                '/portfolio/supplydemand/gallery/mkii.png',
                '/portfolio/supplydemand/gallery/intro.png',
                '/portfolio/supplydemand/gallery/quad.png',
                '/portfolio/supplydemand/gallery/wave19.png',
			),
		); ?>
    </body>
</html>
