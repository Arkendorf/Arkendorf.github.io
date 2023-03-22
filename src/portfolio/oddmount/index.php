<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'ODDMOUNT Protocol',
			'Virtual reality mech-piloting game where you save a small town from evil robots.',
			'GitHub',
			'https://github.com/Arkendorf/ODDMOUNT-Protocol',
			'/portfolio/oddmount/gallery/trailer.mp4',	
			'<p>ODDMOUNT Protocol was a solo, 10 week project where I challenged myself to tackle all aspects of game development on my own. In ODDMOUNT Protocol, the player sits in the cockpit of robot mech. They must pull levers, push buttons, and move mechanisms to pilot their mech, navigate a town, and defeat evil robots.</p>
			<p>Everything in ODDMOUNT Protocol is controlled by the physics system. The movement of enemies, projectiles, damage values and the main mech\'s limbs are all dictated by physics. This allows the player to get creative with their mech\'s motion: for example, by using their thrusters to make a flying leap at an enemy, their punch will do more damage.</p>
			<p>As a part of ODDMOUNT Protocol\'s physical controls, I made a script to translate the movement of the player\'s real-world arms into physically-based motion for the mech. To do so, I created a system that behaves similarly to a PID controller, applying force and torque to the mech so it could match the position and rotation of the player\'s limbs within a certain threshold of accuracy.</p>
			<p>Another physics-based system I developed is a script that allows enemies to find the most direct route to get into line-of-sight of the player, and navigate to that point by adding force to themselves while avoiding obstacles. By keeping enemies tied to the physics system, the player can knock them over and push them back, making the experience more dynamic.</p>
			<p>Other features of ODDMOUNT Protocol include a custom weapon system and weapon swapping, physical levers used to reload weapons, and an enemy radar system.</p>
            <p>I used Unity and C# to code the game, and designed all models and textures myself using Autodesk Maya, Photoshop, and Substance Painter.</p>',
			array (
                '/portfolio/oddmount/gallery/trailer.mp4',
				'/portfolio/oddmount/gallery/cockpit.png',
				'/portfolio/oddmount/gallery/enemy.jpg',
				'/portfolio/oddmount/gallery/model.jpg',
				'/portfolio/oddmount/gallery/scenery.png',
			),
		); ?>
    </body>
</html>
