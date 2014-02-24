<!-- Be sure not to change the below php code -->
<?php require_once( "{$_SERVER['UVMMAGIC']}/plugins/news/aggregate_driver.php" ); ?>

<div id="container">

<div id="content">
<h3 id="homepage">Intro heading/paragraph</h3>

<div id="intro">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugi</p>

</div>


<div id="multi_column_wrapper">
<div class="multi_column">
<h4>Mauris ipsum</h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio  </p>
</div>

<div class="multi_column">
	
<h4>Class aptent taciti</h4>
<p>Ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
</p>
 </div>


<div class="multi_column last_column">	
<h4>Duis rhoncus leo</h4>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie  </p>

</div>

</div><!-- close#multicolumn_wrapper -->
</div><!-- close#content -->


<div id="sidebar">
<img src="images/generic190-120.jpg" width="190" height="120" alt="" />

<h4>Lorem Ipsum</h4>
<p>Ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
<div id="news_section">
<h4>News from XXX</h4>
<!-- set news category (short group name) here -->
<?php makeNews( array("category:uvmacademics","numBasic:4","basicRSS:0") ); ?>
</div>
</div><!-- close#sidebar -->

</div><!-- close#container -->

