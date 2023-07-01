<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Red Is Gone',
			'A pixel art narrative mystery based on a classic fairy tale.',
			'Download',
			'https://arkendorf.itch.io/red-is-gone',
            '/portfolio/redisgone/gallery/playthrough.mp4',
			'<p>Red Is Gone is a narrative-based, mystery-solving game where you must discover clues to determine the whereabouts of Red, a missing child you\'ve been tasked to protect. Will you be able to find her in time, or will she fall prey to dangers that lurk in the woods?</p>
			<p>Red Is Gone started as a class project, then became a passion project. It was built using Lua and the LÖVE game engine, on top of a custom object-oriented framework I designed. Despite the fact that I\'ve created games before, this was my first real foray into creating a game primarily driven by its story, something that proved to be much more challenging than I anticipated. Despite this, I\'m very proud of the end result. Some of my favorite features of Red is Gone include:</p>
            <ul>
                <li>A detailed and engaging narrative presented through first-person dialogue, inspired by traditional Little Red Riding Hood tales.</li>
                <li>Storybook system where words can be dragged-and-dropped to fill out the story as the game progresses.</li>         
                <li>Hand-drawn pixel art graphics for clues and interfaces.</li>
                <li>Custom backgrounds created using generative AI, modified to fit the game\'s aesthetic.</li>
            </ul>',
			array (
                '/portfolio/redisgone/gallery/playthrough.mp4',
                '/portfolio/redisgone/gallery/logo.png',
                '/portfolio/redisgone/gallery/home.png',
				'/portfolio/redisgone/gallery/flowers.png',
                '/portfolio/redisgone/gallery/storybook.png',
				'/portfolio/redisgone/gallery/grandmother.png',
				'/portfolio/redisgone/gallery/grotto.png',
                '/portfolio/redisgone/gallery/storybook2.png',
                '/portfolio/redisgone/gallery/den.png',
			),
		); ?>
    </body>
</html>
