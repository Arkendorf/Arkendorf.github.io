<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/project-tile/project-tile.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo SignatureHead(); ?>
        <?php echo HeaderHead(); ?>
		<?php echo FooterHead(); ?>
        <?php echo ProjectTileHead(); ?>
		<link rel="stylesheet" href="/portfolio/style.css">
    </head>
    <body>
    	<?php echo HeaderBody('portfolio'); ?>
        <div class="top-right triangle"></div>  
        <div id="main">
            <div class="section">
                <h1>Portfolio</h1>
                <h2>AR/VR Projects</h2>
                <div class="project-category">
                    <?php ProjectTileBody(
                        'Anivision', 
                        '/portfolio/anivision/gallery/logo.png', 
                        'Seeing the world through an animal\'s eyes with virtual reality.', 
                        'anivision'
                    ) ?>
                    <?php ProjectTileBody(
                        'QuickSILvr', 
                        '/portfolio/quicksilvr/gallery/logo.png', 
                        'Persistent, online, multi-user VR environment.', 
                        'quicksilvr'
                    ) ?>
                    <?php ProjectTileBody(
                        'ODDMOUNT Protocol', 
                        '/portfolio/oddmount/gallery/logo.png', 
                        'Virtual reality mech-piloting game where you save a small town from evil robots.', 
                        'oddmount'
                    ) ?>
                    <?php ProjectTileBody(
                        'The Glade', 
                        '/portfolio/glade/gallery/logo.png', 
                        'An alien horseback-riding experience that melds real-world tactility with a VR experience.', 
                        'glade'
                    ) ?>
                    <?php ProjectTileBody(
                        'Pro-bending VR', 
                        '/portfolio/probending/gallery/logo.jpg', 
                        'Multi-player VR elemental combat.', 
                        'probending'
                    ) ?>
                </div>
                <h2>Games</h2>
                <div class="project-category">
                    <?php ProjectTileBody(
                        'To Arithmos', 
                        '/portfolio/arithmos/gallery/logo.png', 
                        'A fun, immersive, educational math game.', 
                        'arithmos'
                    ) ?>
                    <?php ProjectTileBody(
                        'Flioneer', 
                        '/portfolio/flioneer/gallery/logo.png', 
                        'Pixel art roguelike featuring daring aircraft combat.', 
                        'flioneer'
                    ) ?>
                    <?php ProjectTileBody(
                        'Supply & Demand', 
                        '/portfolio/supplydemand/gallery/logo.png', 
                        'Sci-fi tower defense game created for a 48 hour game jam.', 
                        'supplydemand'
                    ) ?>
                    <?php ProjectTileBody(
                        'Sci-Fight', 
                        '/portfolio/scifight/gallery/logo.png', 
                        'Science-fiction-inspired multiplayer fighting game.', 
                        'scifight'
                    ) ?>
                    <?php ProjectTileBody(
                        'Kingsbowl III', 
                        '/portfolio/kingsbowl3/gallery/logo.png', 
                        'The third iteration of multiplayer medieval football.', 
                        'kingsbowl3'
                    ) ?>
                    <?php ProjectTileBody(
                        'Kingsbowl II', 
                        '/portfolio/kingsbowl2/gallery/logo.png', 
                        'The second iteration of multiplayer medieval football.', 
                        'kingsbowl2'
                    ) ?>
                    <?php ProjectTileBody(
                        'Witchy Wizard War Transmuted', 
                        '/portfolio/wwwtransmuted/gallery/logo.png', 
                        '1-bit multiplayer card game featuring dueling wizards.', 
                        'wwwtransmuted'
                    ) ?>
                </div>
                <h2>Other</h2>
                <div class="project-category">
                    <?php ProjectTileBody(
                        'Apples', 
                        '/portfolio/apples/gallery/logo.png', 
                        'Social media app promoting authenticity where you answer a new prompt each day.', 
                        'apples'
                    ) ?>
                    <?php ProjectTileBody(
                        'PIC/FLIP Fluid Simulation', 
                        '/portfolio/picflip/gallery/logo.png', 
                        '2D fluid simulation using the PIC/FLIP method.', 
                        'picflip'
                    ) ?>
                    <?php ProjectTileBody(
                        'Intuch', 
                        '/portfolio/intuch/gallery/logo.png', 
                        'Reminder app that helps you remember to reach out to friends and family.', 
                        'intuch'
                    ) ?>
                    <?php ProjectTileBody(
                        '3D Renders',
                        '/portfolio/renders/gallery/room1.png',
                        'A collection of 3D renders created using Autodesk Maya.', 
                        'renders'
                    ) ?>
                    <?php ProjectTileBody(
                        'Portfolio Website',
                        '/portfolio/website/gallery/logo.png',
                        'A personal website that hosts my portfolio and other relevant information.', 
                        'website'
                    ) ?>
                </div>
            </div>
        </div>
        <div class="bottom-left triangle"></div>  
		<?php echo FooterBody(); ?>
    </body>
</html>
