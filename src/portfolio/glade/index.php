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
			'/portfolio/glade/gallery/glade.mp4',	
			'<p>The Glade is a virtual reality space that invites users to guide a horse-like creature called a "polydon" through a networked nature-scape using only the push and pull of their controllers as reins. The Glade was designed to experiment with the relationship between real-world tactile elements and virtual immersion. In the real world, users are handed a set of physical reins that mirror their digital counterpart. By pushing and pulling on the reins, the user guides their polydon around the scene. By providing users with a real-world object that allows them to tactically feel the results of their virtual actions in the real world, the user feels more immersed in the fictional world of The Glade.</p>
            <p>As a part of The Glade project, I designed and built the behavior system for the polydons. Polydons can perform a set of actions such as changing speed, turning, looking at something, or moving their tail. Each polydon has a distinct set of behaviors, and each behavior has a desired value for every action. For example, a stop-and-smell-the-flowers behavior will direct the polydon\'s head to look at the closest flower. Each behavior can also specify a priority for each action. The flower-smelling behavior, for example, would have a high priority for it\'s look action, but would probably have a low priority for the ear angle action. The polydon averages each behavior\'s desired action values weighted by priority to determine the final action values. The end result is a dynamic mount that reacts to the environment and users!</p>
			<p>Every user\'s ability to control their polydon is in fact a behavior itself. If the user snaps the reins, the behavior makes the polydon speed up. If the user pulls back on both reins, the polydon slows down. When the user pulls on a single rein, the polydon will turn in that direction. To supplement this behavior, I built a gesture recognition system that identifies when a user makes a meaningful gesture with their reins, and translates those gestures into a set of discrete instructions for the polydon.</p>
			<p>I also designed several visual systems that translate polydon and rein behavior into visuals. For example, I created a custom renderer for the reins that gives the illusion that the slack in each rein is responding to gravity, and makes waves ripple down the reins when they are shaken.</p>',
			array (
                '/portfolio/glade/gallery/glade.mp4',
				'/portfolio/glade/gallery/polydon.jpg',
				'/portfolio/glade/gallery/logo.png',
			),
		); ?>
    </body>
</html>
