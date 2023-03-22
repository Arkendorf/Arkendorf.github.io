<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'PIC/FLIP Fluid Simulation',
			'2D fluid simulation using the PIC/FLIP method.',
			NULL,
			NULL,
            '/portfolio/picflip/gallery/demo.mp4',
			'<p>I implemented a PIC/FLIP fluid simulation as described in <i>Animating Sand as a Fluid</i> by Zhu et al.</p>
            <p>The concept behind particle-in-cell (PIC) fluid is to combine grid-based and particle-based fluid approaches to benefit from both their strengths and avoid both their weaknesses. The particle part of PIC handles advection and vortices easily, a challenge for grid-based approaches, and the grid allows for efficient discretizations for steps like projection, which can be challenging in a particle-only approach.</p>
            <p>The simulation overview for each time step is as follows:</p>    
            <ul> 
                <li>Calculate grid node velocities based on nearby particle velocities.</li>
                <li>Apply gravity, boundaries, and projection on the grid.</li>
                <li>Calculate particle velocities based on nearby grid nodes, using PIC and FLIP.</li>
            </ul>       
            <p>For PIC fluid, particle velocity is simply the interpolated velocity of nearby grid cells.
            For FLIP fluid, particle velocity is the velocity from the previous time step, plus the interpolated change in velocity of nearby grid cells.</p>',
			array (
                '/portfolio/picflip/gallery/demo.mp4',
			),
		); ?>
    </body>
</html>
