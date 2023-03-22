<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'To Arithmos',
			'A fun, immersive, educational math game.',
			'Read More',
			'https://medium.com/dartmouth-cs98/tired-of-boring-educational-games-take-a-trip-to-arithmos-7754da46acc2',
            '/portfolio/arithmos/gallery/engineroom.mp4',
			'<p>In To Arithmos, you play as the Space Baby, an alien mechanic tasked with repairing a crashed ship. Throughout the game, you meet aliens, solve puzzles, and explore the entire ship. To Arithmos teaches mathmatical concepts through abstract puzzles, designed to teach arithmetic and logical thinking.</p>
			<p>To Arithmos is a response to the lackluster state of educational videogames. The mechanics of most math games make it clear that the goal is to learn math, often by directly presenting the player with a math equation on-screen, which causes players to lose interest. Rather than directly presenting the player with equations to solve, To Arithmos abstracts the same concepts into visually-appealing puzzles that force players to develop and use the same skills they need to solve arithmetic equations without explicitly linking the two together. To Arithmos\'s three-dimensional nature is also very intentional. By placing the players into a world they can navigate and explore, they feel more immersed, engaged, and ultimately more willing to learn.</p>
            <p>As part of the To Arithmos team, I worked on several key features of the game. One such feature is the puzzle system itself. I designed and programmed a grid-based puzzle system that allows players to move, rotate and reposition parts. Each part itself can accept multiple inputs from other parts, and create an ouput. These parts range from simple pipes that transport gooballs throughout the puzzle, to complex parts that perform mathmatical operations on a number of gooballs.</p>
            <p>A key consideration for the puzzle system is ensuring every aspect is intuitive to the player, especially since the goal of each puzzle is to clearly convey a mathmatical concept. Audio and visual feedback helped a lot, but the central component I created to achieve this goal is a set of math animations that play whenever an operation is performed. These animations present the player with a visual demonstration of what each operation is actually doing, represented through the guise of gooballs. For example, adding 1 + 1 is shown through the combination of two individual gooballs melding into one double-size goo cluster. As the operations increase in complexity, so to do the animations, but each one remains intuitive and conveys the logic behind the operation in an easy-to-understand way.</p>
            <p>Other than the puzzle system, I developed several other core features of To Arithmos:</p>
            <ul>
                <li>Developed the state machine behind the main character\'s movement, allowing them to walk, jump, and fall, with blended animations for each state.</li>
                <li>Created a camera control system that moves the camera based on user input, avoiding collision with the environment.</li>
                <li>Modeled, textured, skinned, and rigged the main character and the alien NPCs.</li>  
                <li>Designed, modeled, and textured the "Engine Room" level.</li>
                <li>Developed the behavior for the "Clinger" enemies, and create a model and texture for them</li>
                <li>Created models and textures for each puzzle part, including writing custom shaders for several pieces, such a pipe deformation shader that makes pipes bulge outward while transporting gooballs.</li>
                <li>Integrated controller support into the project.</li>
            </ul>',
			array (
                '/portfolio/arithmos/gallery/engineroom.mp4',
                '/portfolio/arithmos/gallery/control.png',
				'/portfolio/arithmos/gallery/gif1.gif',
				'/portfolio/arithmos/gallery/logo.png',
				'/portfolio/arithmos/gallery/gif2.gif',
				'/portfolio/arithmos/gallery/lighting.png',
                '/portfolio/arithmos/gallery/gif3.gif',
                '/portfolio/arithmos/gallery/alien.jpg',
			),
		); ?>
    </body>
</html>
