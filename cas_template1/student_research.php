<?php

require_once('php/autoloader.php');
$feed = new SimplePie();

// Set which feed to process.
$feed->set_feed_url('http://blog.uvm.edu/anthro/category/studentaffiliate-research/feed/');

// Run SimplePie.
$feed->init();

// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

?>
	<style type="text/css">
		h2 {
			font-size: inherit;
		}
	</style>
	
	<div class="header">
		<h1><a href="<?php echo $feed->get_permalink(); ?>"><?php echo $feed->get_title(); ?></a></h1>
	</div>

	<?php
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	*/
	foreach ($feed->get_items() as $item) {
	?>

		<div class="item">
			<u><h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2></u>
			<p><?php echo $item->get_description(); ?></p>
			<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div>
<?php } ?>

<h3>Student Research Resources</h3>

<ul>
	<li><a href="documents/HumanSubjectsResearchGuideforAnthStudents.pdf">Research on Human Subjects</a></li>
	<li><a href="documents/AnthHonorsThesisGuide.pdf">Honors Thesis Guide</a></li>
</ul>