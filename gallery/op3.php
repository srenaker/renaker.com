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
				margin-bottom: 5px;						
			}
			.header, .footer {
				width: 1600px;
			}

			.footer_item {
				margin-left: 50px;
			}
		</style>
		
		<div id='op3_popup1' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op3_popup1").style.display = "none"'> 
		<img class='panel_popup' src='/images/green_3qtr_lg.jpg'>
		</div>
		
		<div id='op3_popup2' class='panel_link'>
		<input class='right' type='submit' value=' Close ' onClick='document.getElementById("op3_popup2").style.display = "none"'> 
		<img class='panel_popup' src='/images/green_above_med.jpg'>
		</div>
		
		<div class='intro_text'>
			<p>
			This instrument is the other half of my single-manual Colmar Ruckers pair, completed
			in March 2010 and sold to a Bay Area customer.  Its compass is 56 notes, G to d transposing,
			with two 8-foot choirs.	
			</p><p>
			The soundboard painting and nameboard lettering are by Elizabeth Fifield,
			and the Flemish papers in the keywell and inner case are by Grant O'Brien.  I painted the outer case
			and lid myself.	
			</p><p>
			Many thanks to Elaine Thornburgh for testing out
			the new instrument, and to <a href='http://www.youtube.com/user/queswerte'>Sisto 
				Flores</a> for his video expertise!
			<ul>
				<li><a href='/slideshow/1'>Construction slideshow</a></li>
			</ul>
		</div>
		

		<div class='details_images'>
			<object style="height: 344px; width: 425px; z-index: 1;"><param name="movie" value="http://www.youtube.com/v/vK5dyNR5A9Y"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/vK5dyNR5A9Y" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="425" height="344"></object>
		</div>
		
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op3_popup1", 740, 548); return false;'>
			<img src='/images/3qtr_sm.jpg'></a>
		</div>	
		
		<div class='details_images'>
			<a href='#' onClick='fireMyPopup("op3_popup2", 740, 656); return false;'>
			<img src='/images/3_above_sm.png'></a>
		</div>
				
	</div>
<?php include("../shared/footer.php"); ?>
