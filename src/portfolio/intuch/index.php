<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Intuch',
			'Reminder app that helps you remember to reach out to friends and family.',
			'GitHub',
			'https://github.com/Arkendorf/Intuch',
            '/portfolio/intuch/gallery/contacts.png',
			'<p>Intuch is an app that integrates with your contacts and SMS history to track the last time you reached out to friends, and to remind you to reach out after a set amount of (user-specified) time. I created Intuch from scratch using Android Studio and Kotlin, as a way to learn the platform and language.</p>
            <p>Intuch\'s main interface is a list of contacts taken from the user\'s real contacts, that can be updated, rearranged, and adjusted in real-time while continuing to display properly. For each contact, users can specify a time interval for each contact. If the user doesn\'t send a text to the contact during the specified time interval, they will receive a reminder to reach out. The app sends push notifications to the device whenever it is time to reach out to a contact.</p>',
			array (
                '/portfolio/intuch/gallery/contacts.png',
                '/portfolio/intuch/gallery/interval.png',
                '/portfolio/intuch/gallery/notifications.png',
                '/portfolio/intuch/gallery/push.png',
                '/portfolio/intuch/gallery/expanded.png',
			),
		); ?>
    </body>
</html>
