<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Poppy Playtime Console Ports',
			'Introducing more victims to a haunted toy factory.',
			'Read More',
			'https://store.playstation.com/en-us/concept/10009028',
      		'/portfolio/poppy1/gallery/hub.jpg',
			'<p>I joined Mob Entertainment as a founding member of their Console Porting Team, and immediately helped port their hit game Poppy Playtime: Chapter 1 to Playstation, Xbox, and Nintendo Switch. Prior to joining Mob Entertainment I had no Unreal Engine experience, but I learned quickly and was able to improve on the work of the original developers.</p>
			<p>As a member of the porting team, my responsibilities included:</p>
			<ul>
				<li>Completely refactoring poorly-optimized Blueprint scripts, rewriting them in C++.</li>
				<li>Restructuring and optimizing fundamental game systems, such as level streaming, saving, and the "GrabPack" mechanics.</li>
				<li>Adding support for console controller inputs.</li>
				<li>Remaking the user interface to ensure compatibility with the new control scheme.</li>
				<li>Retopologizing assets to support less-performant hardware.</li>
				<li>Simplifying several materials and effects.</li>
				<li>Working with Sony and Nintendo to certify the game for release on their platforms.</li>
			</ul>',
			array (
				'/portfolio/poppy1/gallery/hub.jpg',
				'/portfolio/poppy1/gallery/electrical.jpg',
				'/portfolio/poppy1/gallery/grab.jpg',
				'/portfolio/poppy1/gallery/halls.jpg',
				'/portfolio/poppy1/gallery/hub.jpg',
				'/portfolio/poppy1/gallery/makeafriend.jpg',
				'/portfolio/poppy1/gallery/storage.jpg',
				'/portfolio/poppy1/gallery/vents.jpg',
			),
			); ?>
    </body>
</html>
