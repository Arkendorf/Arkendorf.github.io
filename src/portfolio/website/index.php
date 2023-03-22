<?php include_once('./components/project-page/project-page.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo ProjectPageHead(); ?>
    </head>
    <body>
		<?php echo ProjectPageBody(
			'Portfolio Website',
			'A personal website that hosts my portfolio and other relevant information.',
			'Visit',
			'http://www.amon.us',
            '/portfolio/website/gallery/logo.png',
			'<p>I created this website to host all the work I\'ve done in the realm of computer science, as well as provide a bit more information about me. If you\'ve gotten this far, then you\'ve seen how it\'s turned out. I also took the opportunity to learn how to use PHP and Batch scripting, which you can read a bit more about below.</p>
            <p>While I\'ve taken a class on web development, particularly on using React and Redux, I thought that using those tools would be overkill for this site. I only needed to host some static information, and didn\'t really need to worry about any state changes for my site, so I opted to use basic HTML and Javascript.</p>
            <p>Unfortunately, I quickly remembered why React and Redux are helpful, as I started having to write a lot of redundant code. For example, I wanted the same header component on every page, but with basic HTML the only solution was to copy and paste it to every index file. After trying and failing to find a vanilla HTML solution on the web, I realized that PHP could help solve my problem. With PHP "include" statements, I could write components to a separate PHP files, and include them on any pages I wanted, without writing redundant code. Even better, I could pass parameters to these components, allowing one component to serve a diverse set of needs. For example, each project page in my portfolio is built from the same component, with different parameters (such as title, text content, and gallery images) passed in.</p>
            <p>While PHP fixed my redundancy problem, it created a problem of its own. I wanted to host my site using GitHub pages, but GitHub pages only hosts static sites. In other words, it won\'t run PHP for me, so my components wouldn\'t work. Luckily, as I mentioned in the beginning, my site only needs to host static content. Once the PHP code executes, it never needs to change. I created a new batch script that iterates through my project, running each index.php file and saving the output to a new index.html file. Whenever I run this custom script I get a bunch of static HTML pages I can host. With this method I can treat my website as a set of static pages, while still being able to use PHP for reusable components.</p>',
			NULL,
		); ?>
    </body>
</html>
