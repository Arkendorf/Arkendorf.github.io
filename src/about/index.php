<?php include_once('./components/signature/signature.php'); ?>
<?php include_once('./components/header/header.php'); ?>
<?php include_once('./components/footer/footer.php'); ?>
<?php include_once('./components/links/links.php'); ?>
<?php include_once('./components/icon/icon.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php echo SignatureHead(); ?>
        <?php echo HeaderHead(); ?>
		<?php echo FooterHead(); ?>
        <?php echo LinksHead(); ?>
        <link rel="stylesheet" href="/about/style.css">
    </head>
    <body>
        <?php echo HeaderBody('home'); ?>
        <div id="main">
            <div id="intro" class="screen">
                <div class="middle">
                    <div class="single">
                        <img id="intro-img" src="/about/profile.jpg" alt ="Profile photo">
                    </div>
                    <div class="single">
                        <h1>Hi, I'm Amon.</h1>
                        <p>I enjoy solving the technical and creative challenges present in all aspects of software engineering. My journey began with game development, but has since led to making websites, creating mobile apps, and building AR and VR experiences, among many other detours. This website hosts a collection of my work in these areas, with the hope that it demonstrates my creativity, passion, and skill.</p>  
                    </div>             
                </div>
                <div class="end">
                    <button class="icon button" aria-label="Down" onclick="ScrollToElement('portfolio')"><?php echo IconBody('down'); ?></button>
                </div>
                <div class="bottom-left triangle"></div>   
            </div>
            <div id="portfolio" class="screen">
                <div class="middle">
                    <h1 class="light double">See what I've done.</h1>
                    <div class="single">
                        <p class="light">If you'd like to see some examples of my work, please take a look at my portfolio.</p>
                        <a class="transparent button" href="/portfolio">Portfolio</a>
                    </div>
                    <div class="single">
                        <p class="light">If you're more interested in code that I've written, check out my code samples.</p>
                        <a class="transparent button" href="/code"> Code Samples</a>
                    </div>     
                </div>
                <div class="end">
                    <button class="transparent icon button" aria-label="Down" onclick="ScrollToElement('contact')"><?php echo IconBody('down'); ?></button>
                </div>
                <video class="background" autoplay muted loop playsinline>
                    <source src="/about/highlights.mp4" type="video/mp4">
                </video>  
            </div>
            <div id="contact" class="screen">
                <div class="middle">
                    <div class="single">
                        <h1>Get in touch.</h1>
                        <p>Feel free to reach out with questions, feedback, ideas, or opportunities.</p>
                    </div>
                    <div class="single">
                        <?php echo LinksBody(); ?>
                    </div>    
                </div>
                <div class="top-right triangle"></div>    
            </div>
        </div>
		<?php echo FooterBody(); ?>
    </body>
</html>
