<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>BANK</b></a><span class="divider">/</span></li>
								<li><a href="#">Updates: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php
if(isset($_GET['delete'] , $_GET['id'])){
$f_no = (int) $_GET['id']; 
mysql_query("DELETE FROM `farmers` WHERE `f_no` = '" .stripslashes($f_no)."' ") ; 
echo (mysql_affected_rows()) ? "farmer deleted.<br /> " : "Nothing deleted.<br /> ";
}
?> 
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  			<?php
								$query = mysql_query("select * from updates ")or die(mysql_error());
								?>
								<div class="span">
		
        
        <!--<div class="span span6" >
            <div class="span12"  style="width:auto">
									<?php while($row = mysql_fetch_array($query)){ 
										$title = $row['title'];
									$message = $row['message'];
									$update_date = $row['update_date'];
									?>
  								<div class="alert alert-info">
								<i class="icon-info"> <?php echo  $row["title"] ?></i><br/>
								<i><?php echo $row['message'] ?></i><br/>
								
								<i>UPDATED ON: <?php echo $row['update_date']?></i>
								</div>
									
								<?php } ?>
                                </div>
        </div>-->
        
        
        
    </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                </div>
	
            </div>
		
        </div>
        <?php include('footer.php'); ?>
		<?php include('script.php'); ?>
		
    </body>
</html>
