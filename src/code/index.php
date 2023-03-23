<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/sample/sample.php'); ?>
<?php include_once('./components/highlight/highlight.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo SignatureHead(); ?>
		<?php echo HeaderHead(); ?>
		<?php echo SampleHead(); ?>
		<?php echo FooterHead(); ?>
		<?php echo HighlightHead(); ?>
    </head>
    <body>
    	<?php echo HeaderBody('code'); ?>
		<div class="top-right triangle"></div>  
		<div id="main">
			<div class="section">
				<h1>Code Samples</h1>
				<?php SampleBody(
					'Body Part Classification for Skinned Avatars', 
					'Texture mask generation for skinned avatar meshes in Unity, where each pixel\'s value corresponds to a body part.', 
					'<p>This script was created for a VR project in which the user embodies a fully-modeled first-person avatar. Depending on the player\'s pose, certain parts of the avatar\'s body should be hidden. For example, when standing, the avatar\'s arms are visible (so the player knows where their hands are), but the head isn\'t, as it would obstruct the player\'s vision. When sitting, the legs become visible, to remind the user they are sitting. This approach works well for avatars composed of several meshes, as it is easy to enable or disable parts of the avatar\'s body. However, when the avatars are a single skinned mesh, this becomes much more challenging.</p>
					<p>I solved this problem by creating a texture mask, in which each pixel corresponds to a body part. For example, each pixel UV mapped to the avatar\'s head has a color of (1, 0, 0, 0), and every pixel mapped to the torso is (0, 0, 0, 1). These "body group weights" can also be interpolated, so a neck pixel may have a value close to (.5, .5, 0, 0). I generate these textures by first going through every vertex in the avatar mesh, getting the bone weights for that vertex, then summing the body groups (i.e. head, torso, arm, and leg) for every bone influencing the vertex. This leaves me with a vector for every vertex which I call a "body group weight". Next, I create an empty texture. For every vertex, I set the color at its UV coordinate to its body group weight, then perform a simple flood fill to color the rest of the pixels. The resulting texture, coupled with a custom alpha clipping shader, allows me to show and hide parts of a single-mesh avatar on the fly.</p>',
					'./code/samples/texture.cs'
				); ?>
				<?php SampleBody(
					'Efficient, Multi-Destination Pathfinding with Avoidance', 
					'Enemy pathfinding for a multiplayer game, where enemies can path to any player, and should avoid crowded paths.', 
					'<p>I created this custom pathfinding algorithm for a cooperative multiplayer game where players are pitted against hordes of AI-controlled enemies. Along with static nodes representing the environment, I treat players and enemies as nodes in a pathfinding graph. I modified Dijkstra\'s algorithm to allow for multiple source nodes, one for each player. Once the algorithm runs, enemies can  easily find the shortest path from their node to the nearest player node by following a standard backtracing procedure. On rare occasions, my modification to the algorithm does not find a shortest path, but it\'s still more efficient than running Dijkstra\'s algorithm once per player, so the tradeoff is worthwhile.</p>
					<p>I also integrated avoidance logic into my enemy pathfinding. Whenever an enemy picks a new path to follow, they add in a temporary avoidance value to the weight of the edges along the path. Likewise, when an enemy finishes traversing an edge, they reduce its avoidance value. When the pathfinding algorithm is re-run, edges with high avoidance values are deprioritized in favor of less-costly edges, due to the nature of the algorithm. This simple approach works well, and prevents enemies from clumping up along the same paths.</p>',
					'./code/samples/pathfinding.lua'
				); ?>
				<?php SampleBody(
					'Android Reminder Notifications', 
					'Push notifications to remind you to reach out to friends.',
					'<p>This function was created for my <a href="/portfolio/intuch">Intuch</a> project. The app allows users to look through their phone contacts, and choose which ones they want to receive reminder notifications for, if they haven\'t reached out in a while. For Intuch, I wanted to be able to send notifications when the app is closed, even though Android apps can normally only send notifications while they are running. I solved this issue by creating a custom Worker class, which can run in the background even if the app itself isn\'t.</p>
					<p>This particular Worker runs in the background once every day or so, looking through the app\'s saved list of contacts, checking the last time the user texted them, and checking if they want a reminder to reach out. If so, it creates a reminder notification for that contact and pushes it to the device. If several contacts require a notification, they are grouped together nicely under a summary notification.</p> 
					<p>Whenever a user clicks a notification, their text conversation with the corresponding contact opens up, making it easy for the user to reach out. Additionally, the app records the last time it sent a notification for each contact and doesn\'t send a new one until a pre-set interval has passed, to prevent overwhelming the user with notifications.</p>', 
					'./code/samples/notifications.kt'
				); ?>
				<?php SampleBody(
					'Scroll to Element', 
					'Javascript function that dynamically scrolls to the given element\'s position on the page.',
					'<p>I wrote this function for use within this website. Whenever you click a "continue" button (denoted by down arrow), this function is called to scroll the window to the next section. While other methods (such as the scrollIntoView() function, or focusing an element by adding it to the page url) do exist, they do not have the full functionality I was looking for. Namely, they don\'t support (or have spotty support for) smooth scrolling, and they don\'t support adding a custom offset (i.e., scrolling so that the next section starts directly below the header, rather than at the top of the page).</p>
					<p>My solution takes advantage of the HTML DOM hierarchy, taking an element and recursively adding its ancestor\'s position offsets to find the element\'s total offset on the page. This approach also allows me to find the header element and add its height to the total y offset, essentially treating the bottom of the header as the top of the page. I then use the window.scrollTo() method to scroll by the total offset amount. I pass in the "behavior: \'smooth\'" parameter to scroll smoothly.</p>', 
					'./code/samples/scroll.js'
				); ?>
			</div>
		</div>
		<div class="bottom-left triangle"></div>  
		<?php echo FooterBody(); ?>
		<?php echo HighlightBody('contract'); ?>
    </body>
</html>
