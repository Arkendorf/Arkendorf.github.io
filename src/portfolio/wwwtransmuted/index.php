<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Witchy Wizard War Transmuted',
			'1-bit multiplayer card game featuring dueling wizards.',
			'Download',
			'https://arkendorf.itch.io/witchy-wizard-war',
			'/portfolio/wwwtransmuted/gallery/match.mp4',
			'<p>Witchy Wizard War Transmuted is a networked multiplayer card game that pits two wizards against each other in a magic duel: each wizard must place offensive and defensive spells onto the board to attack their opponent and protect themselves.</p>
			<p>Notable elements of Witchy Wizard War Transmuted:</p>
			<ul>
				<li>Custom networking library built using socket and enet.</li>
				<li>Automatic matchmaking that finds open games on the player\'s LAN without requiring the player to enter I.P. and port manually.</li>
				<li>Turn resolution system where all cards are resolved simultaneously, updating damage dealt, remaining card health, and remaining wizard health, without creating an unfair advantage for one player over the other.</li>
				<li>Card data is abstracted into simple and discrete parameters to allow for easy creation of new cards, and  to ensure consistent behavior and appearance across cards.</li>
				<li>Handmade 1-bit card art and graphics, as well as the ability to change color palette through shaders.</li>
				<li>Custom sound effects.</li>
			</ul>',
      		array (
				'/portfolio/wwwtransmuted/gallery/match.mp4',
				'/portfolio/wwwtransmuted/gallery/title.png',
				'/portfolio/wwwtransmuted/gallery/combat.png',
				'/portfolio/wwwtransmuted/gallery/settings.png',
				'/portfolio/wwwtransmuted/gallery/combat2.png',
				'/portfolio/wwwtransmuted/gallery/matchmaking.png',
			),
		); ?>
    </body>
</html>
