<?php include('header_dashboard.php'); 
include('admin/dbcon.php');
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<li><a href="#"><b>User</b></a><span class="divider">/</span></li>
								<li><a href="#"><b>Events</b></a><span class="divider">/</span></li>
								<li><a href="#">Manager: </a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <?php

if (isset($_POST['submitted'])) {
   
    
       
       
        $sql = "INSERT INTO `delivery` ( `r_f_no` ,  `r_kg` ,  `r_dt` ,  `r_deliverer`  ) VALUES(  '{$_POST['r_f_no']}' ,  '{$_POST['r_kg']}' ,  '{$mysqldate}' ,  '{$_POST['r_deliverer']}'  ) ";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        echo "Saved!.<br />";
        //echo "<a href='index.php' class='btn btn-primary'>Back To Deliveries</a>";
    
}
?>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<a href='delivery.php' class='btn btn-primary'>Back To Deliveries</a>
<form action='' method='post' class="form-horizontal"> 
    <div class="control-group">
        <label class="control-label" for="user_id"> Farmer UserID:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="user_id" name='user_id'/>

        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="kg">Milk in KGs:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="kg" name='kg'/> 

        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="deliverer"> Delivered By:</label >
        <div class="controls">
            <input class="input-xlarge" type="text" placeholder="deliverer" name='deliverer'/> 
        </div>
    </div>
    
    <div class="control-group">

        <div class="controls">
            <input type='hidden' value='1' name='submitted' />
            <input type='submit' value='Add Farmer' class="btn btn-success btn-large" /> 
             
        </div>
    </div>
</form>
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
