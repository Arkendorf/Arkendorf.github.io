<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Kingsbowl II',
			'The second iteration of multiplayer medieval football.',
			'Download',
			'https://arkendorf.itch.io/kingsbowl-2',
			'/portfolio/kingsbowl2/gallery/game.mp4',
			'<p>Kingsbowl II is the sequel to an older project that never saw the light of day. The Kingsbowl series puts a medieval spin on modern (American) football, replacing passing the ball with shooting an arrow from a bow, and substituting blocking and tackling with knightly combat. The original Kingsbowl was created as an experiment with networked multiplayer, and this sequel improves upon the same concept, directly informed by the lessons I learned along the way.</p>
			<p>Key features of Kingsbowl II:</p>
			<ul>
				<li>Custom networking library built using socket and enet.</li>
				<li>Fast character collision and collision resolution.</li>
				<li>AI-controlled knights with a custom state machine controlling their behavior, influenced by the current state of the game.</li>
				<li>Position prediction mechanism that can predict what any knight\'s position will be at a given point in time, useful for telling the quarterback where to throw the ball.</li>
				<li>Custom combat system that implements stabbing and shielding, and the interaction between the two.</li>
			</ul>',
			array (
                '/portfolio/kingsbowl2/gallery/game.mp4',
                '/portfolio/kingsbowl2/gallery/title.png',
                '/portfolio/kingsbowl2/gallery/sack.png',
                '/portfolio/kingsbowl2/gallery/scrimmage.png',
                '/portfolio/kingsbowl2/gallery/matchmaking.png',
                '/portfolio/kingsbowl2/gallery/pass.png',
			),
		); ?>
    </body>
</html>
