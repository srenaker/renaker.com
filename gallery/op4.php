<?php include("../shared/header.php"); ?>


		<style>

			.backdrop {
				width: 1600px;
			}

			.intro_text {
				width: 300px;
				height: 330px;
				margin-right: 26px;
			}
			.details_images {
				float: left;
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				border: 20px solid #373734;
				margin-right: 25px;
				margin-bottom: 25px;						
			}
			.header, .footer {
				width: 1600px;
			}

			.footer_item {
				margin-left: 50px;
			}
		</style>
		
		<div id='op4_popup1' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op4_popup1").style.display = "none"'> 
		<img class='panel_popup' src='/images/blue_above_med.png'>
		</div>
		
		<div id='op4_popup2' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op4_popup2").style.display = "none"'> 
		<img class='panel_popup' src='/images/blue_full_length_med2.jpg'>
		</div>
		
		<div id='op4_popup3' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op4_popup3").style.display = "none"'> 
		<img class='panel_popup' src='/images/blue_front_med.jpg'>
		</div>
		
		<div class='intro_text'>
			<p>
			This instrument is one half of a pair I built based on a harpsichord built by Ioannes Ruckers
			in 1624, known as the 'Colmar' Ruckers (because the original is in a museum in Colmar, France).
			This is a single-manual version of what was originally a double-manual instrument, and I changed
			the dimensions slightly to accomodate a transposing note, allowing it to play at either A=415 or
			A=440 pitch levels.    
			</p><p>
			The soundboard painting is by Janine Johnson, the nameboard lettering is by Elizabeth Fifield,
			and the Flemish papers in the keywell and inner case are by Grant O'Brien.  I painted the outer case
			and lid myself.	
			</p>	
			
		</div>
		
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op4_popup1", 520, 752); return false;'>
			<img src='/images/blue_above_sm.png'></a>
		</div>	

		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op4_popup2", 520, 566); return false;'>
			<img src='/images/blue_full_length_sm.png'></a>
		</div>
		
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op4_popup3", 713, 390); return false;'>
			<img src='/images/blue_front_sm.png'></a>
		</div>
		
	</div>
	
<?php include("../shared/footer.php"); ?>
