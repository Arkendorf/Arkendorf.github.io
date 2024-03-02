<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Poppy Playtime: Chapter 3',
			'Explore a decrepit orphanage and discover the horrible secrets left behind.',
			'Read More',
			'https://store.steampowered.com/app/2555190/Poppy_Playtime__Chapter_3/',
            '/portfolio/poppy3/gallery/school.jpg',
			'<p>I joined the Chapter 3 Team in its final push before release. As part of the team, I had three major responsibilities:</p> 
			<ul>
                <li>I led a strike team of programmers, level designers, and environment artists focused on bringing the "Home Sweet Home" level up to quality standards. Together, we were able to transform an unclear and unenjoyable level into an playable, fun experience.</li>
                <li>I led the Sound and Tech Art teams through a full pass at the game, helping to improve sound and effects quality across the entire project.</li>
                <li>I refactored the main gameplay mechanic of extending and retracting hands, replacing the previous implementation which was was incomplete and buggy.</li>
            </ul>',
			array (
                '/portfolio/poppy3/gallery/gpz.jpg',
                '/portfolio/poppy3/gallery/hsh.jpg',
                '/portfolio/poppy3/gallery/playhouse.jpg',
                '/portfolio/poppy3/gallery/school.jpg',
                '/portfolio/poppy3/gallery/toys.jpg',
                '/portfolio/poppy3/gallery/tunnels.jpg',
			),
		); ?>
    </body>
</html>
