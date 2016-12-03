// Set offset on page load
if(window.innerWidth <= 768 ){
	document.getElementsByTagName("nav")[1].setAttribute("data-offset-top", "-1");
} else {
	document.getElementsByTagName("nav")[1].setAttribute("data-offset-top", "80");
}

// Find initial window width
var initWidth = window.innerWidth;

// Reload page when resized to correctly display nav
// Event listener on body attribute
// Only reload when breakpoint hit
function reloadPage(){
	if( initWidth > 768 && window.innerWidth <= 768 ){
		location.reload();
	} else if ( initWidth <= 768 && window.innerWidth > 768 ){
		location.reload();
	}
	
}