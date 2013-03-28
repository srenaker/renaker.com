
// script courtesy of http://dhtmlpopups.webarticles.org
function fireMyPopup(popupId, ht, wdth) {
  
	var scrolledX, scrolledY;
	if( self.pageYOffset ) {
	  scrolledX = self.pageXOffset;
	  scrolledY = self.pageYOffset;
	} else if( document.documentElement && document.documentElement.scrollTop ) {
	  scrolledX = document.documentElement.scrollLeft;
	  scrolledY = document.documentElement.scrollTop;
	} else if( document.body ) {
	  scrolledX = document.body.scrollLeft;
	  scrolledY = document.body.scrollTop;
	}

	var centerX, centerY;
	if( self.innerHeight ) {
	  centerX = self.innerWidth;
	  centerY = self.innerHeight;
	} else if( document.documentElement && document.documentElement.clientHeight ) {
	  centerX = document.documentElement.clientWidth;
	  centerY = document.documentElement.clientHeight;
	} else if( document.body ) {
	  centerX = document.body.clientWidth;
	  centerY = document.body.clientHeight;
	}
  	var leftOffset = scrolledX + (centerX - ht) / 2;
  	var topOffset = scrolledY + (centerY - wdth) / 2;

//  	document.getElementById(popupId).style.top = topOffset + "px";
 	document.getElementById(popupId).style.left = leftOffset + "px";

  	document.getElementById(popupId).style.top = "10px";
 // 	document.getElementById(popupId).style.left = "50px";

  	document.getElementById(popupId).style.display = "block";
}
