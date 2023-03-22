<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'The Glade',
			'An alien horseback-riding experience that melds real-world tactility with a VR experience.',
			NULL,
			NULL,
			'/portfolio/glade/gallery/polydon.mp4',	
			'<p>The Glade is a virtual reality space that invites users to guide a horse-like creature called a "polydon" through a networked nature-scape using only the push and pull of their controllers as reins. The Glade was designed to experiment with the relationship between real-world tactile elements and virtual immersion. In the real world, users are handed a set of physical reins that mirror their digital counterpart. By pushing and pulling on the reins, the user guides their polydon around the scene. By providing users with a real-world object that allows them to tactically feel the results of their virtual actions in the real world, the user feels more immersed in the fictional world of The Glade.</p>
            <p>As a part of The Glade project, I built the mechanism behind the polydon\'s movement as a reponse to the user\'s actions with their reins. If the user snaps the reins, the polydon speeds up. If the user pulls back on both reins, the polydon slows down. When the user pulls on a single rein, the polydon will turn in that direction. To create this behavior, I made several interconnected systems:</p>
            <ul>
                <li>Building a gesture recognition system that identifies when a user makes a meaningful gesture with their reins, and translates those gestures into a set of discrete instructions for the polydon.</li>
                <li>A polydon controller that receives signals from the reins, handles conflicting instructions, and translates them into smooth movement, including speeding up, slowing down, and turning.</li>
                <li>Several visual systems that translate polydon and rein behavior into visuals. For example, I created a custom renderer for the reins that gives the illusion that the slack in each rein is responding to gravity, and makes waves ripple down the reins when they are shaken.</li>
            </ul>',
			array (
                '/portfolio/glade/gallery/polydon.mp4',
				'/portfolio/glade/gallery/logo.png',
			),
		); ?>
    </body>
</html>
