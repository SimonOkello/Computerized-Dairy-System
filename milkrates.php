<?php include('header_dashboard.php'); 
 include('admin/dbcon.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('kcc_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<!--<li><a href="#"><b>User</b></a><span class="divider">/</span></li>-->
								<li><a href="#"><b>KCC</b></a><span class="divider">/</span></li>
								<li><a href="#">Milk Rates: </a></li>
						</ul>
						 <!-- end breadcrumb -->
                         
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    MILK RATES
                                   <!-- <?php
//if(isset($_GET['delete'] , $_GET['id'])){
//$f_no = (int) $_GET['id']; 
//mysql_query("DELETE FROM `farmers` WHERE `f_no` = '" .stripslashes($f_no)."' ") ; 
//echo (mysql_affected_rows()) ? "farmer deleted.<br /> " : "Nothing deleted.<br /> ";
//}
?> -->
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								
<table class="table table-hover table-striped table-condensed table-bordered">
    <thead class="" >
        <th>#</th>
        <th>Rate:</th>
         <th>Set On:</th>
        <th>Expiry Date:</th>
        
        
        </thead>
    <tbody>
  <?php

$query = mysql_query("select * from settings_rates ")or die(mysql_error());
$i=0;
 while($row = mysql_fetch_array($query)){
$i+=1;
    echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$row['rate'].'</td>';
        echo '<td>'.$row['from'].'</td>';
        echo '<td>'.$row['to'].'</td>';
        
    echo '</tr>';
}
?>
</tbody>
</table>
<form>
    <input type="hidden" name="f_no" value="<?php echo $row['f_no'];?>" />
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
