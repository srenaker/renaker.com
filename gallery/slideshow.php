<?php include("../shared/header.php"); ?>

<?php
$image_path = "/images/construction_slideshow";

$descriptions = array(
	'Spine, cheek, and wrestplank assembled. The instrument is in three dimensions for the first time.',
	'Bentside installed.',
	'First frames installed. The structure looks a bit more stable now.',
	'Framing complete, with liners and support blocks.',
	'Thinnning the soundboard. The soundboard is made of Italian spruce, and is as thin as 2.2 mm in some places, as thick as 4.2 mm in others.',
	'Ribs on the underside of the soundboard, which help strengthen it and define the speaking area.',
	'The bass-end hook of the bridge, phase 1. To bend the rest of the bridge to the right shape I soften it in a steamer, then set it in a form, but the hook at the bass end curves too sharply to be bent, so I carve it out of a block of pear.',
	'The bass-end hook of the bridge, phase 2. I\'ve cut it to approximately the right shape on the bandsaw.',
	'The bass-end hook of the bridge, phase 3. Now it\'s all sanded and polished, and you have to look pretty closely to see the scarf joint where it\'s glued on.',
	'Gluing down the bridge onto the soundboard.',
	'The soundboard with rose hole cut, ready to be installed in the case.',
	'The rose, gilded and ready to install into the soundboard. The harp-playing angel is a traditional motif in harpsichord roses, and was associated with the Guild of St. Luke, which was an artisans\' guild during the heyday of harpsichord construction, back in the 16th and 17th centuries.',
	'Installing the soundboard. This operation requires 50-60 go-bars and at least three people. To watch it happen, see  <a href="http://www.youtube.com/watch?v=6xGsQa4oa0Q">this	video</a>.',
	'Gluing in the bentside hitchpin rail. Getting a tight seal on both the soundboard and case side surfaces is very tricky.',
	'The soundboard painting, by Janine Johnson of Berkeley. The flowers, birds, and insects in the design are based on the painting which appears on the original Ruckers instrument of 1624.',
	'Keyboard preparation. The keys are drawn in pencil onto the basswood plank which I\'ll cut apart into the 56 keys.',
	'Next phase of the keyboard. The balance pin holes are drilled, and the natural keys have their ebony tops.',
	'The keys are cut apart, partly on the table saw and partly on the bandsaw.',
	'The keyboard is almost done. The keys have their red felt on the backs, arcades on the fronts, and I\'m gluing on the bone-topped sharps.',
	'The keyboard is (finally) done. The guide pins are fitted to the back rack and the keys are levelled and evenly spaced.',
	'The lids are done, and it\'s almost time to paint.',
	'The tail end of the case, painting in progress.',
	'The case painting is done. Next up, stringing.',
	'The finished instrument. Doesn\'t it make you want to sit down and play some Bach?'
);

if (array_key_exists('slide', $_GET)) {
	$slide_number = $_GET['slide']; 
} else {
	$slide_number = 1;
}
 

$next = $slide_number + 1;	
$previous = $slide_number - 1;
?>

<div class='slideshow_images'>
	
	<?php 
	if ($next < 23) {
		echo "<a href='slideshow.php?slide=$next'>";
	}
	?>
	<img src='/images/construction_slideshow/<?php echo $slide_number; ?>.jpg'></a>
</div>
<div class='slideshow_text'>
	
	
	<p>Construction slide <?php echo $next; ?> of 24</p>
	<p>
		<?php echo $descriptions[$slide_number]?>
	</p>
	<br>
	<p>
	<?php if ($slide_number > 0) {
		echo "<a href='slideshow.php?slide=$previous'><- Previous</a>";
	}	
	?>

	&nbsp;			&nbsp;			&nbsp;
	
	<?php if ($slide_number < 23) {
		echo "<a href='slideshow.php?slide=$next'>Next -></a>";	
	}
	?>
			
	</p>
</div>


<?php include("../shared/footer.php"); ?>