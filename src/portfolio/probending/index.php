<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Pro-bending VR',
			'Multi-player VR elemental combat.',
			'GitHub',
			'https://github.com/Arkendorf/Pro-bending-VR',
			'/portfolio/probending/gallery/match.mp4',	
			'<p>Pro-bending VR is based on the fictional sport of the same name from the TV show The Legend of Korra. In the game, two opponents battle each other in an immersive arena, while spectators watch from the stands. Instead of fighting with weapons or fists, contestants use the power of the elements, flinging fireballs back and forth. When players wear down their enemy\'s defenses, they are declared the victor.</p>
			<p>I made several key contributions to the Pro-bending VR project:</p>
			<ul>
				<li>Built bending mechanics, including gesture recognition to identify when to create fireballs, and a system that reads the motion of the player\'s hand to dynamically control the fireball\'s trajectory over its lifetime.</li>
				<li>Designed many of the central networking mechanics, including an interpolation script that smoothed player movement between server update ticks, and syncing fireball positions.</li>
				<li>Created custom particle behavior to visualize the fireballs, and designed a unique 2D sprite animation from scratch to use for the particle system.</li>
				<li>Modelled the player avatars, including the geometry, texturing, rigging, and skinning. I also integrated inverse kinematics into the in-game avatars to dynamically move the their limbs to match their respective players.</li>
				<li>Lit the scene, and created a custom drop shadow system for the players in place of actual shadows, for both artistic and performance reasons.</li>
				<li>Partially designed the games onboarding sequence, and recorded the announcer voiceover.</li>
			</ul>',
			array (
                '/portfolio/probending/gallery/trailer.mp4',
				'/portfolio/probending/gallery/match.mp4',
				'/portfolio/probending/gallery/logo.jpg',
				'/portfolio/probending/gallery/flame.jpg',
			),
		); ?>
    </body>
</html>
