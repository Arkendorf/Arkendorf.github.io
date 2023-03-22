<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Apples',
			'Social media app promoting authenticity where you answer a new prompt each day.',
			NULL,
			NULL,
            '/portfolio/apples/gallery/logo.png',
			'<p>Let\'s be real, BeReal has lost its authenticity. What started as a social media platform designed to remove self-filtering of content before posting has fallen victim to its own popularity, with users scrutinizing their content as their number of friends grow. Apples aims to remove the monotony of endless scrolling through BeReal selfies by providing users with a daily prompt that they can respond to with a picture.</p>
            <p>We built Apples for iOS using React Native and Redux. As part of the Apples team, my main responsibilities included:</p>
			<ul>
                <li>Creating the profile page and the settings page.</li>
                <li>Designing the user log-in flow. I integrated the backend into the sign-in page, worked on error checking and error display on the front end for sign-in related errors, and integrated log-in details into the app\'s redux state to ensure all pages could access the currently logged-in user.</li>
                <li>Functionality for taking, uploading, and saving profile photos, and the creation of the profile photo thumbnail component.</li>
			</ul>',
			array (
                '/portfolio/apples/gallery/account.gif',
                '/portfolio/apples/gallery/feed.gif',
                '/portfolio/apples/gallery/friends.gif',
                '/portfolio/apples/gallery/login.gif',
                '/portfolio/apples/gallery/logout.gif',
                '/portfolio/apples/gallery/onboarding.gif',
                '/portfolio/apples/gallery/post.gif',
                '/portfolio/apples/gallery/prompt.gif',
			),
		); ?>
    </body>
</html>
