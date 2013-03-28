<?php include("../shared/header.php"); ?>

	<style>
		.backdrop, .header, .footer {
			width: 1600px;
		}
		
		.intro_text {
			width: 300px;

			margin-right: 26px;
		}
		.details_images {
			float: left;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border: 20px solid #373734;
			margin-right: 25px;
			margin-bottom: 5px;						
		}


	</style>
		<div id='op5_popup1' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op5_popup1").style.display = "none"'> 
		<img class='panel_popup' src='/images/op5-above-1.jpg'>
		</div>
		
		<div id='op5_popup2' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op5_popup2").style.display = "none"'> 
		<img class='panel_popup' src='/images/op5-side_on-1.jpg'>
		</div>

		<div id='op5_popup3' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op5_popup3").style.display = "none"'> 
		<img class='panel_popup' src='/images/op5-3qtr-1.jpg'>
		</div>
		
		<div class='intro_text'>
			<p>
			This is my most recently finished instrument, a Flemish single-manual modeled 
			after the Colmar Ruckers of 1624, using the
			same design as my <a href='op3.php'>last instrument</a>. It has a compass of 
			56 notes, G to d transposing from A=415 to A=440, with two 8-foot choirs. 
			
			</p>
			<p>
			The soundboard painting is by Janine Johnson, and the Flemish papers are by
			Grant O'Brien. 
			<p>
			This instrument is very lightweight and portable, and can easily be carried by two 
			people.  It's an excellent chamber music instrument. 	
			</p>
			<p>
			This instrument is currently <a href='forsale.php'>for sale</a>.
			</p>		
		</div>
		
		<div class='details_images'>
			<object style="height: 344px; width: 425px; z-index: 1;"><param name="movie" value="http://www.youtube.com/v/YfEGzphViOM"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/YfEGzphViOM" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="425" height="344"></object>
		</div>
		
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op5_popup1", 832, 621); return false;'>
			<img src='/images/op5-above-sm.jpg'></a>
		</div>	
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op5_popup2", 687, 578); return false;'>
			<img src='/images/op5-side_on-sm.jpg'></a>
		</div>


<?php include("../shared/footer.php"); ?>
