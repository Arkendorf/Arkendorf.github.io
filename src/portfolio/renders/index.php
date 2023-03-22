<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'3D Renders',
			'A collection of 3D renders created using Autodesk Maya.',
			NULL,
			NULL,
            '/portfolio/renders/gallery/room1.png',
			'<p>The following collection is taken from assorted personal and class projects. I created each piece using the Autodesk Maya modelling software, in conjunction with the Arnold renderer.</p>',
			array (
                '/portfolio/renders/gallery/room1.png',
                '/portfolio/renders/gallery/room2.png',
                '/portfolio/renders/gallery/room3.png',
                '/portfolio/renders/gallery/biped.mp4',
				'/portfolio/renders/gallery/abstract.gif',
			),
		); ?>
    </body>
</html>
