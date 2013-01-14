<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>

  <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Course Menu</li>
                <?php echo public_navigation($sel_subject, $sel_page); ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <?php if ($sel_page) { ?>
				    <h2><?php echo htmlentities($sel_page['menu_name']); ?></h2>
            <hr size="5"/>
					     <?php echo $sel_page['content']; ?>
			       <?php } else { ?>
				    <h2 align="center">Welcome students to Data Communications and Networking E-Learning</h2>
<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
<div class="item active"><center><img src="images/networking.gif" alt="" width="400px" height="400px" /></center></div>
<div class="item"><center><img src="images/social-network1.jpg" alt="" width="400px" height="400px" /></center></div>

</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a></div>
            <br />
            <center>
            
			      </center> 
            <?php } ?>
          </div>
          <div class="row-fluid">
            <?php //display_description(); 
            ?> 
          </div><!--/span-->
          </div>

      </div><!--/row-->
    </div><!--/.fluid-container-->
    
<?php include("includes/footer.php"); 
?>
