// Whether highlight is currently open
let highlightOpen = false;

// Base highlight opening functionality
function OpenHighlight(highlightItem, fit = true) {
    if (!highlightOpen) {
        // Add necessary attributes applicable to to all highlight items
        highlightItem.id = 'highlight-item';

        // Append item to highlight frame
        document.getElementById('highlight-frame').prepend(highlightItem);

        // Open highlight
        const highlight = document.getElementById('highlight');
        highlight.classList.add('visible');
        // Make highlight fit content, if necessary
        if (fit) {
            highlight.classList.add('fit');
        }

        // Remember highlight is open
        highlightOpen = true;
    }
    else {
        // If highlight is already open, ignore new item, and delete it
        highlightItem.remove();
    }
}

// Highlights the given image
function OpenHighlightImage(img) {
    // Create new image element
    const highlightImage = document.createElement('img');
    highlightImage.alt = img.alt;
    highlightImage.src = img.src;

    // Open highlight
    OpenHighlight(highlightImage);
}

// Highlights the given video using the existing highlight div on the page
function OpenHighlightVideo(video) {
    // Create new video element
    const highlightVideo = document.createElement('video');
    highlightVideo.setAttribute('controls', '');
    highlightVideo.setAttribute('playsinline', '');
    highlightVideo.innerHTML = video.innerHTML;
    highlightVideo.load();

    // Open highlight
    OpenHighlight(highlightVideo);
}

// Highlights the given video using the existing highlight div on the page
function OpenHighlightSample(descendant) {
    // Find the sample div, given a descendant
    let sample = descendant;
    while (!sample.classList.contains('sample')) {
        sample = sample.parentNode;
    }

    // Create new sample element
    const highlightSample = document.createElement('div');
    highlightSample.classList.add('sample', 'expanded');
    highlightSample.innerHTML = sample.innerHTML;
    highlightSample.querySelector('.expand').remove();
    highlightSample.querySelector('.info').removeAttribute('onclick');

    // Open highlight
    OpenHighlight(highlightSample, false);
}

// Hides the highlight window, if it is active
function CloseHighlight(event) {
    // Only close highlight if it is currently open
    if (highlightOpen) {
        // Only close highlight if the correct element(s) are clicked (need to check due to event bubbling)
        // Can either click outside the image on the background (the 'highlight' and 'highlight-resizer' elements),
        // or click on the button (in which case we need to check if any children of the button are clicked)
        if (event.target.id === 'highlight' || 
            event.target.id === 'highlight-resizer' || 
            document.getElementById('highlight-close').contains(event.target)) {
                
            // remove highlight item
            document.getElementById('highlight-item').remove();
    
            // Hide highlight
            document.getElementById('highlight').classList.remove('visible', 'fit');

            // Remember highlight is closed
            highlightOpen = false;
        }
    }  
}