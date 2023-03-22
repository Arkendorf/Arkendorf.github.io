<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Kingsbowl III',
			'The third iteration of multiplayer medieval football.',
			'Download',
			'https://arkendorf.itch.io/kingsbowl-3',
      		'/portfolio/kingsbowl3/gallery/game.mp4',
			'<p>Kingsbowl III is turn-based take on <a href="/portfolio/kingsbowl2">Kingsbowl II</a>. The Kingsbowl series puts a medieval spin on modern (American) football, replacing passing the ball with shooting an arrow from a bow, and substituting blocking and tackling with knightly combat. The goal of Kingsbowl III was to create a more strategic Kingsbowl game, while keeping the fast-paced feel of the series.</p>
      		<p>KImprovements made for Kingsbowl III:</p>
			<ul>
				<li>Updated networking library built using socket and enet.</li>
				<li>In-game tutorial and rulebook, to make the game more accessible to new players.</li>
				<li>System to allow each player to control multiple knights.</li>
				<li>Logic for turn-based actions and simultaneous turn resolution.</li>
				<li>Custom turn-based combat system that resolves turns simultaneously.</li>
				<li>Updated graphics for better readability and situational awareness.</li>
				<li>Camera panning and control system that allows the player to control the camera themselves, or lock on to a knight.</li>
			</ul>',
			array (
                '/portfolio/kingsbowl3/gallery/game.mp4',
                '/portfolio/kingsbowl3/gallery/title.png',
                '/portfolio/kingsbowl3/gallery/3v3.png',
                '/portfolio/kingsbowl3/gallery/tackle.png',
                '/portfolio/kingsbowl3/gallery/pass.png',
                '/portfolio/kingsbowl3/gallery/matchmaking.png',
                '/portfolio/kingsbowl3/gallery/manual.png',
                '/portfolio/kingsbowl3/gallery/range.png',
                '/portfolio/kingsbowl3/gallery/start.png',
			),
		); ?>
    </body>
</html>
