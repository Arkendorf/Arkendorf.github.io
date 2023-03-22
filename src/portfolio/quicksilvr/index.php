<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'QuickSILvr',
			'Persistent, online, multi-user VR environment.',
			NULL,
			NULL,
			'/portfolio/quicksilvr/gallery/trailer.mp4',
			'<p>QuickSILvr is a persistent, online, multi-user VR environment used for experiments with social interaction technology in XR.</p>
			<p>One of the primary challenges of multi-user VR projects is creating the digital representation of each user. As a part of the QuickSILvr development team, I created the avatar system for the project.</p>
            <p>The avatar system is highly customizable. Each avatar uses a base kit, which has several parts and parameters that can be customized or swapped. I created several custom systems and user interfaces to allow users to modify their avatar in a unique and intuitive way. I kept the system extremely modular, even allowing for the creation of non-humanoid avatars.</p>
            <p>The behavior of each avatar is controlled through a custom pose system that allows users to easily swap between custom behaviors depending on their current actions, such as walking or sitting.</p>
            <p>The culmination of my work with QuickSILvr avatars is my custom pose-recognition algorithm. Users can gesture or pose in the real world to trigger poses for their avatar. If a player bows in the real world, for example, it will trigger their avatar to play a bowing animation. This system becomes even more powerful when combined with multi-user poses, such as when two players make a hugging gesture to cause their avatars to hug each other.</p>
            <p>As part of my avatar work, I also helped research the impact of synthetic and predictive movement of avatars on communication in VR.</p>',
			array (
                '/portfolio/quicksilvr/gallery/trailer.mp4',
                '/portfolio/quicksilvr/gallery/sitting.png',
                '/portfolio/quicksilvr/gallery/interaction.jpg',
                '/portfolio/quicksilvr/gallery/island.jpg',
                '/portfolio/quicksilvr/gallery/tub.jpg',   
                '/portfolio/quicksilvr/gallery/sitting2.jpg',
                '/portfolio/quicksilvr/gallery/entry.mp4',
                '/portfolio/quicksilvr/gallery/bench.png',
                '/portfolio/quicksilvr/gallery/amphitheatre.jpg',
			),
		); ?>
    </body>
</html>
