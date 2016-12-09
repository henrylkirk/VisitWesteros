// when the 'info' glyphicon is clicked, toggle captions between hidden and visible
function toggleCaption(){
	var captions = document.getElementsByTagName("figcaption");
	
	for (var i = 0; i < captions.length; i++) {
    	if(captions[i].style.visibility === "hidden"){
    		captions[i].setAttribute("style", "visibility: visible;");
    	} else {
    		captions[i].setAttribute("style", "visibility: hidden;");
    	}
    	
	}
}