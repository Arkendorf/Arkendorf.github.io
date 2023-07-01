<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Conversation Pit',
			'A VR discussion space that visualizes your conversations through generative AI.',
			NULL,
			NULL,
			'/portfolio/conversationpit/gallery/logo.png',	
			'<p>The Conversation Pit is a multi-user VR social space designed to foster innovative and unique discussions. As you and your friends talk, key words and phrases from your conversation are extracted, transformed into images using generative AI, and painted on the walls around you. The room itself evolves with your conversation.</p>
            <p>To create the Conversation Pit, I combined several tools together into a single seamless experience:</p>
            <ul>
                <li>I created a custom library for Unity that accesses OpenAI\'s API, allowing the Conversation Pit to leverage DALL·E 2\'s generative capabilities.</li>
                <li>I built a custom library for Unity that integrates with AWS\'s S3 service, so the project can upload and download images from the cloud. This allows every user in the Conversation Pit to view the same canvas at the same time.</li>
                <li>I integrated the Meta Voice SDK and Wit.ai into the Conversation Pit to allow for voice recognition and transcription. I combined this with the Normcore networking package and built functionality to fully transcribe a multi-speaker conversation and to extract important phrases from them.</li>
            </ul>',
			array (
				'/portfolio/conversationpit/gallery/logo.png',
			),
		); ?>
    </body>
</html>
