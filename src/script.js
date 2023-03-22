// Scrolls to the given element, offsetting for the header if requested
function ScrollToElement(id, addHeaderOffset = false) {    
    // Get the element to we want to scroll to
    let element = document.getElementById(id);

    // Initialize offset
    let offset = {
        left: 0,
        top: 0,
    }

    // Aggregate offsets of the element, recursing through parents
    while(element != null){        
        offset.left += element.offsetLeft;        
        offset.top += element.offsetTop;        
        element = element.offsetParent;        
    }

    // Offset scroll by the header's height, if requested
    if (addHeaderOffset) {
        const header = document.getElementById('header');
        offset.top -= header.offsetHeight;
    }

    // Start the scroll, smoothly
    window.scrollTo({...offset, behavior: 'smooth'});    
}