<!-- Be sure not to change the below php code -->
<?php require_once( "{$_SERVER['UVMMAGIC']}/plugins/news/aggregate_driver.php" ); ?>

<div id="container">

<div id="content">
<h3 id="homepage">Anthropology at <abbr>UVM</abbr>: A firm grounding in all areas of the discipline</h3>

<div id="intro">
<p>
	<img src="images/anthrofaculty.jpg" alt="Anthropolgy faculty" class="imageleft" width="250" style="margin-bottom:2%; margin-top:3%;">Although our faculty is deeply 
	committed to research and other scholarly activities, we see our primary mission as providing a first-rate undergraduate 
	education. Our majors are well-prepared  in the areas of archaeology, biological anthropology, sociocultural anthropology 
	and linguistic anthropology. Many have even gone on to graduate work in anthropology and have shared feedback that this firm 
	grounding in all four areas of the discipline has helped them succeed.
</p>
</div>


<div id="multi_column_wrapper">
<div class="multi_column">
<h4>Major, minor, get your hands dirty</h4>
<p>Through the four areas of discipline, we are  committed to providing students with a comprehension of the variations in human populations and a sensitivity to cultural differences.</p>
</div>

<div class="multi_column last_column" style="width: 60%; background-color: white;">
	
<h4>Learning happens in the classroom and in the field:</h4>
<ul>
  <li><strong>Hands-on courses:</strong> Field Work in Archaeology; Methods of Ethnographic Field Work</li>
  <li><strong>Topical classes based on faculty research:</strong> Law, War and Disorder; Anthropology of Media</li>
  <li><strong>Lab facilities:</strong> Provide training for students interested in archaeology, human osteology, and forensic anthropology</li>
  <li><strong>Consulting Archaeology Program (CAP):</strong> Gain experience in hands-on archaeology and employment</li>
  <li><strong>Readings and Research program: </strong>Students pursue their own interests by working with an appropriate faculty member</li>
  <li><strong>College Honors: </strong>For the highly motivated student wishing to prepare a major research project</li>
  </ul>
</div>


<!-- <div class="multi_column last_column">	
<h4>Duis rhoncus leo</h4>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie  </p>

</div> -->

</div><!-- close#multicolumn_wrapper -->
</div><!-- close#content -->


<div id="sidebar">

<h3>Connect with us:</h3>
<a href="https://www.facebook.com/groups/410485755635018/"><img src="images/facebooklogo.jpg" alt="facebook" style="padding-bottom: 20px;
margin-left: 17%;"></a>
<a href="http://www.linkedin.com/groups/UVM-Anthropology-Network-4344662"><img src="images/linkedin.png" alt="LinkedIn" style="margin-left: 17%;"></a>
<h4 style="margin-left: 16%;"><a href="http://blog.uvm.edu/anthro/">Anthropology blog</a></h4>

<div id="news_section">
<h4>News from UVM</h4>
<!-- set news category (short group name) here -->
<?php makeNews( array("category:uvmacademics","numBasic:4","basicRSS:0") ); ?>
</div>
</div><!-- close#sidebar -->

</div><!-- close#container -->

